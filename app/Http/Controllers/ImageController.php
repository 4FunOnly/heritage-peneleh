<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function delete($id)
    {
        $image = Image::findOrFail($id);

        // Delete image file from the storage
        if (file_exists(public_path($image->url))) {
            unlink(public_path($image->url));
        }

        // Delete image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }
}
