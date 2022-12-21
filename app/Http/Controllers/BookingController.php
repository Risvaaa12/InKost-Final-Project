<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Comunity;
use App\Models\Rates;
use App\Models\Discs;

class BookingController extends Controller
{
    public function index(){
        $title="Booking Page";
        $package=Packages::all();
        $comunities=Comunity::all();
        $rates=Rates::all();
        $disc=Discs::all();
        return view('booking.bookingpage', compact('title','package','comunities','rates', 'disc'));
    }
}
