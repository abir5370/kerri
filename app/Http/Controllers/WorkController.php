<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        return view('admin.work.add_work');
    }
    public function manageWork(){
        $works = Work::all();
        return view('admin.work.manage_work',[
            'works'=>$works
        ]);
    }
    public function storeWork(Request $request){
        Work::saveWork($request);
        return back();
    }
    public function statusWork($id){
        Work::workStatus($id);
        return back();
    }
    public function editWork($id){
        $work = Work::find($id);
        return view('admin.work.edit_work',[
            'work'=>$work
        ]);
    }
    public function updateWork(Request $request){
        Work::workUpdate($request);
        return redirect('/manage-work')->with('updated','update successfully!');
    }
    public function deleteWork(Request $request){
        Work::deleteWork($request);
        return back()->with('delete-success','delete successfully!');
    }
}
