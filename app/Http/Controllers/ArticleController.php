<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::latest()->paginate(6);
        return view('articles.index', compact('articles'))
                    ->with('i', (request()->input('page', 1) - 1) * 6);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request): RedirectResponse
    {
        $article = Article::create($request->validated());

        $articleId = $article->id;
        if($request->hasFile('images'))
        {
            $uploadPath = 'uploads/articles/';
            $i=1;
            foreach($request->file('images') as $image)
            {
                $extension = $image->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $image->move($uploadPath,$filename);
                $finalImagePath = $uploadPath.$filename;

                $newimage = new Image();
                $newimage->url = $finalImagePath;
                $newimage->article_id = $articleId;
                $newimage->save();

            };
        }

        return redirect()->route('articles.index')
                         ->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): View
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Article $article): RedirectResponse
    {
        $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
        ]);
        $article->update($request->all());
        return redirect()->route('articles.index')
                         ->with('success', 'Article Updated');
    }

    public function editimage($article)
    {
        $article=Article::findOrFail($article);
        return view('articles.editimage', compact('article'));
    }

    public function addimage (Request $article, $id): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article = Article::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/articles/';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move(public_path($uploadPath), $filename);
            $finalImagePath = $uploadPath . $filename;

            $article->uploadImage()->create([
                'url' => $finalImagePath,
                'article_id' => $article->id,
            ]);

            return redirect()->back()->with('success', 'Image uploaded successfully');
        }

        return redirect()->back()->with('error', 'Image upload failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        // Delete related images
    foreach ($article->uploadImage as $image) {
        // Delete the image file from storage
        if (file_exists(public_path($image->url))) {
            unlink(public_path($image->url));
        }

        // Delete the image record from the database
        $image->delete();
    }
        $article->delete();

        return redirect()->route('articles.index')
                         ->with('success', 'Article Deleted');
    }
}
