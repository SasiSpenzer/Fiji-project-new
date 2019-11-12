<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{

    public function MonthlyShippingSchedule(){

        return view('shipping.monthly-schedule');
    }

    public function MonthlyShippingScheduleStore(Request $request){
        die('sas');
    }

    public function VesselBreathingApp(){
        return view('shipping.monthly-schedule');
    }










}
