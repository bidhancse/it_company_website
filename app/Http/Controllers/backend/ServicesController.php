<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use Auth;

class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function services()
    {
        return view('backend.services.services');
    }



    public function servicesinsert(Request $abc)
    {
       $data = array(

        'title' =>$abc->title,
        'status' =>$abc->status,
        'short_title' =>$abc->short_title,
        'description' =>$abc->description,
        'admin_id' =>Auth()->user()->id,
    );


       DB::table('servicesinformation')->insert($data);

       $notification=array(
        'messege'=>'Services Insert Successfully Done !!',
        'alert-type'=>'success'
    );
       return Redirect()->back()->with($notification);

   }



   public function manageservices()
   {
       $Services = DB::table('servicesinformation')->get();
       return view('backend.services.manageservices', compact('Services'));
   }


   public function deleteServices($id)
   {
       DB::table('servicesinformation')->where('id',$id)->delete();

       $notification=array(
        'messege'=>'Services Delete Successfully',
        'alert-type'=>'error'
    );
       return Redirect()->back()->with($notification);
   }


   public function inactiveServices($id)
   {
    DB::table('servicesinformation')->where('id',$id)->update(['status' => 2]);

    $notification=array(
        'messege'=>'Services Inactive Successfully Done !!',
        'alert-type'=>'error'
    );
    return Redirect()->back()->with($notification);
}


public function activeServices($id)
{
    DB::table('servicesinformation')->where('id',$id)->update(['status' => 1]);

    $notification=array(
        'messege'=>'Services Active Successfully Done !!',
        'alert-type'=>'error'
    );
    return Redirect()->back()->with($notification);
}



public function editServices($id)
{
    $Data = DB::table('servicesinformation')->where('id',$id)->first();
    return view('backend.services.editservices', compact('Data'));
}


public function servicesupdate(Request $abc, $id)
{
    $data = array(

        'title' =>$abc->title,
        'status' =>$abc->status,
        'short_title' =>$abc->short_title,
        'description' =>$abc->description,
        'admin_id' =>Auth()->user()->id,
    );


    DB::table('servicesinformation')->where('id',$id)->update($data);

    $notification=array(
        'messege'=>'Services Update Successfully Done !!',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
}







}
