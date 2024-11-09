<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Services\TelegramService;

class BlogController extends Controller
{
    public function index()
    {
        // get all blog posts
        $posts = BlogPost::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        // get a specific blog post by ID
        $post = BlogPost::findOrFail($id);
        $post->increment('views');

        // show the blog post details view with the post data
        return view('blog.show', ['post' => $post]);


    }


    public function storeComment(Request $request, $id, TelegramService $telegramNotificationService)
    {
        $request->validate([
            
            'author' => ['required','string','max:255'],
            'content' => ['required','string'],
        ]);
        
        $comment = new Comment();
        $comment->blog_post_id = $id;
        $comment->author = $request->author;
        $comment->content = $request->content;
        $comment->save();

        // Send a notification to the Telegram group
        $message = "Yeni yorum eklendi! \nŞu Blog Yazısına: ".env('APP_URL')."/blog/".$comment->blog_post_id ." \n\nAd: " . $comment->author. "\nYorum: " . $comment->content. "\n#yorumlar";
        $telegramNotificationService->sendMessage($message);

        return redirect()->back()->with('status', 'Yorum eklendi!');
    }

    public function like($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->increment('likes');

    // Add a success message to the session
    session()->flash('success', 'Beğendim!');
    
        return redirect()->back();
    
    }
}
