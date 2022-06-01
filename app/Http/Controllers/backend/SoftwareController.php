<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use Auth;

class SoftwareController extends Controller
{

 public function __construct()
 {
  $this->middleware('auth');
 }


 public function software()
 {
  return view('backend.software.software');
 }


 public function softwareinsert(Request $abc)
 {
  $data = array(

   'title' =>$abc->title,
   'status' =>$abc->status,
   'short_title' =>$abc->short_title,
   'description' =>$abc->description,
   'admin_id' =>Auth()->user()->id,
  );


  DB::table('softwareinformation')->insert($data);

  $notification=array(
   'messege'=>'Software Insert Successfully Done !!',
   'alert-type'=>'success'
  );
  return Redirect()->back()->with($notification);

 }


 public function managesoftware()
 {
  $Software = DB::table('softwareinformation')->get();
  return view('backend.software.managesoftware', compact('Software'));
 }


 public function inactiveSoftware($id)
 {
  DB::table('softwareinformation')->where('id',$id)->update(['status' => 2]);

  $notification=array(
   'messege'=>'Software Inactive Successfully Done !!',
   'alert-type'=>'error'
  );
  return Redirect()->back()->with($notification);
 }


 public function activeSoftware($id)
 {
  DB::table('softwareinformation')->where('id',$id)->update(['status' => 1]);

  $notification=array(
   'messege'=>'Software Active Successfully Done !!',
   'alert-type'=>'error'
  );
  return Redirect()->back()->with($notification);
 }


 public function deleteSoftware($id)
 {
  DB::table('softwareinformation')->where('id',$id)->delete();

  $notification=array(
   'messege'=>'Software Delete Successfully',
   'alert-type'=>'error'
  );
  return Redirect()->back()->with($notification);
 }


 public function editSoftware($id)
 {
  $Data = DB::table('softwareinformation')->where('id',$id)->first();
  return view('backend.software.editsoftware', compact('Data'));
 }


 public function softwareupdate(Request $abc, $id)
 {
  $data = array(

   'title' =>$abc->title,
   'status' =>$abc->status,
   'short_title' =>$abc->short_title,
   'description' =>$abc->description,
   'admin_id' =>Auth()->user()->id,
  );


  DB::table('softwareinformation')->where('id',$id)->update($data);

  $notification=array(
   'messege'=>'Software Update Successfully Done !!',
   'alert-type'=>'success'
  );
  return Redirect()->back()->with($notification);
 }

















}
