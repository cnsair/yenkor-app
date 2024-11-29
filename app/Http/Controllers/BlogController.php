<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Show the form to create a blog post (Admin).
     */
    public function create()
    {
        return view('admin.create-blog');
    }

    /**
     * Store a new blog post in the database.
     */
    public function store(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload (if provided)
        $image_url = null;
        if ($request->hasFile('image')) {
            // Save the image in the 'public/images' directory
            $image_path = $request->file('image')->store('images', 'public');
            $image_url = Storage::url($image_path);
        }

        // Create a new blog post
        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_url' => $image_url,
        ]);

        // Redirect to the homepage with a success message
        return redirect()->route('home')->with('success', 'Blog post created successfully!');
    }

    /**
     * Display all blog posts on the homepage.
     */
    public function index()
    {
        // Fetch all blog posts, sorted by the latest
        $blogs = Blog::latest()->get();

        // Return the homepage view with blogs
        return view('home.blog', compact('blogs'));
    }
}
