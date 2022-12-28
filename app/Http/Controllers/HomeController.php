<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Comunity;
use App\Models\Rates;
use App\Models\Discs;

class HomeController extends Controller
{
    public function index(){
        $title="Landing Page";
        // $packages=[(object)[
        //     'package_name'=>'Dummy Name',
        //     'package_desc'=>'Dummy Desc'
        // ],(object)[
        //     'package_name'=>'Dummy Name2',
        //     'package_desc'=>'Dummy Desc2'
        // ]];
        $packages=Packages::all();
        $comunities=Comunity::all();
        $rates=Rates::all();
        $discs=Discs::all();
        //dd($packages);
        return view('frontpage.landingpage', compact('title','packages','comunities','rates', 'discs'));
    }

    function first(){
        $packages=Packages::all();
        $comunities=Comunity::all();
        $rates=Rates::all();
        $discs=Discs::all();
        return view('frontpage.firstpage', compact('packages','comunities','rates', 'discs'));
    }
    
}
