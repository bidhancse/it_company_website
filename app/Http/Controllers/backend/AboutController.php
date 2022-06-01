<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use Auth;

class AboutController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function about()
    {
        $id = 1;
        $Data = DB::table('aboutinformation')->where('id',$id)->first();
        return view('backend.about.about', compact('Data'));
    }


    public function aboutupdate(Request $abc, $id) {

        $data = array(

            'description' => $abc->description,
            'admin_id' => Auth()->user()->id,
        );

        DB::table('aboutinformation')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'About Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification); 

    }



}
