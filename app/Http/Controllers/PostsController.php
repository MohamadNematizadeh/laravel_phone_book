<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('welcome')
            ->withSuccess(__('Post delete successfully.'));
    }
}
