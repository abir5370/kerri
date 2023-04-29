<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Icon;
use App\Models\Inbox;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class FrontendContrller extends Controller
{
    public function index(){
        $about = About::all();
        $icons = Icon::where('status',1)->get();
        $contact = Contact::all();
        $works = Work::where('status',1)->get();
        $clients = Client::where('status',1)->get();
        $blogs = Blog::where('status',1)->get();
        $services = Service::where('status',1)->get();
        return view('frontend.index',[
            'services'=>$services,
            'clients'=>$clients,
            'works'=>$works,
            'contact'=>$contact,
            'icons'=>$icons,
            'about'=>$about,
            'blogs'=>$blogs
        ]);
    }

}
