<?php

namespace App\Http\Controllers;

use App\Models\hostelinformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\index;
use function Sodium\compare;

class IndexController extends Controller
{
    function login(){

        $data= array('datas'=>DB::table('indices')->get());

        return view('welcome',$data);
    }

    public function add(Request $request){
    $request->validate([
       'National'=>'required|numeric',
        'student'=>'required|numeric'
    ]);
        $user=index::where('National',str($request->National))->first();
       if ($user && $request->student == $user->student) {
           return redirect('index/' . $user->id);
       }elseif($user && $request->student == 1234567890){
           return redirect('panel');
       }
       else{
           return back()->with('message','شماره دانشجویی یا کد ملی اشتباه است');
       }
    }
    function indext(){

    return view('indext');
    }
    function index($id){
        $edit=DB::table('indices')
            ->where('id',$id)
            ->first();
        $date=[
            'Information'=>$edit,

        ];
        return view('StudentDormitory.index',$date);
    }
    function panel(){
        $datas=hostelinformation::all();
        return view('panel.panel',compact('datas'));
    }
    function search(Request $request){
         $data=$request->input('search');

     $datas= DB::table('hostelinformations')->where('National','like','%'.$data .'%')
         ->orWhere('student','like','%'.$data .'%')
         ->get();

     return view('panel.panel',compact('datas'));
    }
    function receive(Request $request){
        $request->validate([
            'name'=>'required|string',
            'National'=>'required|numeric',
            'student'=>'required|numeric',
            'dorm'=>'required',
            'floor'=>'required'
        ]);
        $receive=DB::table('hostelinformations')->insert([
            'name'=>$request->input('name'),
            'National'=>$request->input('National'),
            'student'=>$request->input('student'),
            'dorm'=>$request->input('dorm'),
            'floor'=>$request->input('floor'),
        ]);

        if ($receive){
        return back()->with('true','خوابگاه شما ثبت شد ');
        }else{
            return back()->with('false','مشکلی رخ داد است ');
        }
    }
}
