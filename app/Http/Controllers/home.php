<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function index()
    {
       
        return view('welcome');
    }
    public function home(Request $request)
    {
        if($request->ajax()){
            $acc=$request->acc_name;
            $sosical=DB::table('tb_links')->where('acc_name',$acc)->first();
            $username=DB::table('username')->where('acc_name', $acc)->first();
            $wallet=DB::table('wallet')->where('acc_name', $acc)->first();
           
            return response([
               'sosical'=>$sosical,
               'username'=>$username,
               'wallet'=>$wallet 
            ]);
        }else{
            $account= DB::table('account')->get();
            $sosical=DB::table('tb_links')->where('acc_name',$account[0]->name)->first();
            $username=DB::table('username')->where('acc_name',$account[0]->name)->first();
            $wallet=DB::table('wallet')->where('acc_name',$account[0]->name)->first();
           
            return view('home',compact('account','sosical','username','wallet'));
        }
        
       
    }
    public function add(Request $request)
    {
        
        DB::table('account')->insert([
           'name'=>$request->account
       ]);
       DB::table('tb_links')->insert([
           'link_tw'=>$request->tw,
           'link_email'=>$request->email,
           'link_fb'=>$request->fb,
           'link_ins'=>$request->ins,
           'link_red'=>$request->red,
           'link_medium'=>$request->medium,
           'link_lk'=>$request->lk,
           'link_yt'=>$request->yt,
           'acc_name' =>$request->account,
       ]);
       DB::table('username')->insert([
           'acc_name' =>$request->account,
           'name_tw'=>$request->nametw,
           'name_tele'=>$request->nametele,
           'name_ins'=>$request->nameins,
           'name_discord'=>$request->namediscord,
           'name_medium'=>$request->medium,
       ]);

       DB::table('wallet')->insert([
        'bep-20'=>$request->wlbep,
        'sol'=>$request->wlsol,
        'terra'=>$request->wlterra,
        'acc_name' =>$request->account,
    ]);
    return redirect('/');
    }
    public function get($id)
    {
       $links= DB::table('tb_links')->where('acc_name',$id)->get();
       $username= DB::table('username')->where('acc_name',$id)->get();
       $wallet= DB::table('wallet')->where('acc_name',$id)->get();

       return response([
           'link'=>$links,
           'username'=>$username,
           'wallet'=>$wallet,
       ]);
    }
}