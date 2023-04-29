<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.add_blog');
    }
    public function storeBlog(Request $request){
        Blog::saveBlog($request);
        return back();
    }
    public function manageBlog(){
        return view('admin.blog.manage_blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function statusBlog($id){
        Blog::updateStatus($id);
        return back();
    }
    public function editBlog($id){
        return view('admin.blog.edit_blog',[
            'blog'=>Blog::find($id)
        ]);
    }
    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return back();
    }
    public function deleteBlog(Request $request){
        Blog::deleteBlog($request);
        return back();
    }
    public function detailsBlog($id){
        return view('admin.blog.details_blog',[
            'blog'=>Blog::find($id)
        ]);
    }
}
