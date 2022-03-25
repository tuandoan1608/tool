<?php

namespace App\Http\Controllers;

use App\Imports\accountImport;
use App\Imports\sosicalImport;
use App\Imports\usernameImport;
use App\Imports\walletImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function account()
    {
        return view('acc');
    }
    public function importacc() 
    {
         
         Excel::import(new accountImport,request()->file('file'));           
         return back();
    }

    public function sosical()
    {
        return view('sosical');
    }
    public function importsc() 
    {
         
         Excel::import(new sosicalImport,request()->file('file'));           
         return back();
    }

    public function username()
    {
        return view('username');
    }
    public function importun() 
    {
         
         Excel::import(new usernameImport,request()->file('file'));           
         return back();
    }

    public function wallet()
    {
        return view('wallet');
    }
    public function importwl() 
    {
         
         Excel::import(new walletImport,request()->file('file'));           
         return back();
    }
}