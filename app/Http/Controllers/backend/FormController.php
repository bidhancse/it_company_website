<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use DB;

class FormController extends Controller
{
    public function form()
    {
        return view('backend.form.form');
    }

    public function datatable()
    {
        return view('backend.form.datatable');
    }


    public function forminsert(Request $abc) {


        $data = array(
            'name' =>$abc->name,
            'email' =>$abc->email,
            'password' =>Hash::make($abc->password),
            'skill' =>$abc->skill,
            'phone' =>$abc->phone,
        );


            DB::table('form')->insert($data);


        $notification=array(
            'messege'=>'Item Added Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification); 
        
    }
}
