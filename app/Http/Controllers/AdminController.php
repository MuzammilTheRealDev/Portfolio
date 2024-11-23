<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('index');
    }

    public function logged(){
        $userType = Auth::user()->user_type;
        if($userType == "Admin"){
            return view('admin.adminDashboard');
        }
        else{
            return view('index');
        }
    }

    public function add(){
        return view('auth.login');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $data = new AdminModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('success','Message sent successfully');    

    }

    public function show(){
        $data = AdminModel::all();
        return view('admin.pages.showMessage')->with(['data' => $data ]);
    }

    public function edit($id){
        $data = AdminModel::find($id);
        return view('admin.pages.updateMessage')->with(['data' => $data]);
    }

    public function update(Request $request, $id){
        $data = AdminModel::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('show');


    }

    public function delete($id){
        $data = AdminModel::find($id);
        $data->delete();
        return redirect()->back();
    }
}
