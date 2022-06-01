<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
Use Auth;

class TeamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function team()
    {
        return view('backend.team.team');
    }



    public function teaminsert(Request $abc)
    {


        $data = array(

            'name' =>$abc->name,
            'position' =>$abc->position,
            'experiences' =>$abc->experiences,
            'facebook' =>$abc->facebook,
            'twitter' =>$abc->twitter,
            'instagram' =>$abc->instagram,
            'linkedin' =>$abc->linkedin,
            'admin_id' =>Auth()->user()->id,
        );

        $TeamPicture = $abc->file('image');

        if ($TeamPicture) {
            $image_one_name= hexdec(uniqid()).'.'.$TeamPicture->getClientOriginalExtension();
            Image::make($TeamPicture)->save('public/image/teamimage/'.$image_one_name,80);
            $data['image']='public/image/teamimage/'.$image_one_name;
            DB::table('teaminformation')->insert($data);

        }

        else {
            DB::table('teaminformation')->insert($data);
        }

        $notification=array(
            'messege'=>'Team Insert Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function manageteam()
    {
        $Team = DB::table('teaminformation')->get();
        return view('backend.team.manageteam', compact('Team'));
    }



    public function deleteTeam($id)
    {
        $check = DB::table('teaminformation')->where('id',$id)->first();

        if(isset($check->image)) {
            unlink($check->image);

            DB::table('teaminformation')->where('id',$id)->delete();
        }

        else {
            DB::table('teaminformation')->where('id',$id)->delete();
        }

        $notification=array(
            'messege'=>'Team Delete Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function editTeam($id)
    {
        $Data = DB::table('teaminformation')->where('id',$id)->first();
       return view ('backend.team.editteam',compact('Data'));
    }


    public function teamupdate(Request $abc, $id)
    {
        $data = array(

            'name' =>$abc->name,
            'position' =>$abc->position,
            'experiences' =>$abc->experiences,
            'facebook' =>$abc->facebook,
            'twitter' =>$abc->twitter,
            'instagram' =>$abc->instagram,
            'linkedin' =>$abc->linkedin,
            'admin_id' =>Auth()->user()->id,
        );

        $TeamPicture = $abc->file('image');
        $old_image = $abc->old_image;

        if ($TeamPicture) {
            if($old_image) {
                unlink($old_image);
            }
            $image_one_name= hexdec(uniqid()).'.'.$TeamPicture->getClientOriginalExtension();
            Image::make($TeamPicture)->save('public/image/teamimage/'.$image_one_name,80);
            $data['image']='public/image/teamimage/'.$image_one_name;
            DB::table('teaminformation')->where('id',$id)->update($data);

        }

        else {
            DB::table('teaminformation')->where('id',$id)->update($data);
        }

        $notification=array(
            'messege'=>'Team Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }



}
