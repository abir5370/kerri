<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('admin.client.client');
    }
    public function storeContent(Request $request){
        Client::saveClient($request);
        return back();
    }
    public function clientManage(){
        $clients = Client::all();
        return view('admin.client.manage_client',[
            'clients'=>$clients
        ]);
    }
    public function clientStatus($id){
        Client::updateStatus($id);
        return back();
    }
    public function clientEdit($id){
        $client = Client::find($id);
        return view('admin.client.edit_client',[
            'client'=>$client
        ]);
    }
    public function clientUpdate(Request $request){
        Client::updateClient($request);
        return back();
    }
    public function clientDelete(Request $request){
        $delete_image = Client::find($request->id);
        if ($delete_image->photo){
            if (file_exists($delete_image->photo)){
                unlink($delete_image->photo);
                $delete_image->delete();
            }
        }
        else{
            $delete_image->delete();
        }
        return back();
    }
}
