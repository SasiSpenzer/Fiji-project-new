<?php

namespace App\Http\Controllers;

use App\Traits\SendMailTrait;
use Illuminate\Http\Request;
use Validator;


class ShippingController extends Controller
{
    use SendMailTrait;
    public function MonthlyShippingSchedule(){

        return view('shipping.monthly-schedule');
    }

    public function MonthlyShippingScheduleStore(Request $request){

        if ($request) {
            $validator = Validator::make($request->all(), [
                'reservation'     => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        $DataArray = array();
        $dateRange = trim($request->input('reservation'));
        for($a=0;$a <= 20;$a++){

            if(!empty($request->input('VN_'.$a.''))){

                $tempArray = array();
                $tempArray['VN'] = $request->input('VN_'.$a.'');
                $tempArray['VI'] = $request->input('VI_'.$a.'');
                $tempArray['VO'] = $request->input('VO_'.$a.'');
                $tempArray['ETA_Date'] = $request->input('ETA_Date_'.$a.'');
                $tempArray['LOA'] = $request->input('LOA_'.$a.'');
                $tempArray['LP'] = $request->input('LP_'.$a.'');
                $tempArray['NP'] = $request->input('NP_'.$a.'');
                $tempArray['Line'] = $request->input('Line_'.$a.'');

                array_push($DataArray,$tempArray);
            }
        }
        // Set The Session By Spenzer
        session(['monthly_shipping_data' => $DataArray]);

        return view('shipping.monthly-schedule-review',compact('DataArray','dateRange'));

    }


    public function MonthlyShippingScheduleStoreEmail(Request $request){


        $dataURL = $request->data;
        $encoded_image = explode(",", $dataURL)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("signature.png", $decoded_image);

        $toAddress = "sasi.spenzer@gmail.com";
        $template = 'emails.name';
        $title = 'Shipping Schedule';
        $subject = 'Shipping Schedule';

        $response = $this->SendMail($toAddress,$template,$title,$subject,$link=null,$body = null);

    }

    public function ChangeRequestEmail(Request $request){

        $dataURL = $request->data;
        $encoded_image = explode(",", $dataURL)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("signature.png", $decoded_image);

        $toAddress = "sasi.spenzer@gmail.com";
        $template = 'emails.name';
        $title = 'Shipping Schedule';
        $subject = 'Shipping Schedule';

        $response = $this->SendMail($toAddress,$template,$title,$subject,$link=null,$body = null);
    }

    public function VesselBreathingApp(){

        return view('shipping.breathing-app');

    }

    public function StatusChangeRequest(){


        return view('shipping.status-change-request');
    }

    public  function StatusChangeRequestPost(Request $request){

        if ($request) {
            $validator = Validator::make($request->all(), [
                'Vessel_Number'     => 'required',
                'Voyage_number'     => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        $DataArray = array();
        $Vessel_Number = trim($request->input('Vessel_Number'));
        $Voyage_number = trim($request->input('Voyage_number'));
        for($a=0;$a <= 20;$a++){

            if(!empty($request->input('CN_'.$a.''))){

                $tempArray = array();
                $tempArray['CN'] = $request->input('CN_'.$a.'');
                $tempArray['SIZE'] = $request->input('SIZE_'.$a.'');
                $tempArray['OS'] = $request->input('OS_'.$a.'');
                $tempArray['SC'] = $request->input('SC_'.$a.'');
                $tempArray['LVN'] = $request->input('LVN_'.$a.'');
                $tempArray['LVVN'] = $request->input('LVVN_'.$a.'');


                array_push($DataArray,$tempArray);
            }
        }
        // Set The Session By Spenzer
        session(['status_change_request' => $DataArray]);

        return view('shipping.status-change-request-review',compact('DataArray','Vessel_Number','Voyage_number'));

    }

    public function DischargeChangeRequest(){

        return view('shipping.discharge-request');
    }

    public function DischargePost(Request $request){

        if ($request) {
            $validator = Validator::make($request->all(), [
                'Vessel_Number'     => 'required',
                'Voyage_number'     => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        $DataArray = array();
        $Vessel_Number = trim($request->input('Vessel_Number'));
        $Voyage_number = trim($request->input('Voyage_number'));
        for($a=0;$a <= 20;$a++){

            if(!empty($request->input('CN_'.$a.''))){

                $tempArray = array();
                $tempArray['CN'] = $request->input('CN_'.$a.'');
                $tempArray['SIZE'] = $request->input('SIZE_'.$a.'');
                $tempArray['Type'] = $request->input('Type_'.$a.'');
                $tempArray['RCF'] = $request->input('RCF_'.$a.'');
                $tempArray['RCT'] = $request->input('RCT_'.$a.'');



                array_push($DataArray,$tempArray);
            }
        }
        // Set The Session By Spenzer
        session(['discharge_request' => $DataArray]);

        return view('shipping.discharge-request-review',compact('DataArray','Vessel_Number','Voyage_number'));



    }

    public function DischargeAjax(Request $request){

        $dataURL = $request->data;
        $encoded_image = explode(",", $dataURL)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("signature.png", $decoded_image);

        $toAddress = "sasi.spenzer@gmail.com";
        $template = 'emails.name';
        $title = 'Shipping Schedule';
        $subject = 'Shipping Schedule';

        $response = $this->SendMail($toAddress,$template,$title,$subject,$link=null,$body = null);
    }

    public function ReeferUnpluggingRequest(){

        return view('shipping.unplugging-request');
    }

    public function ReeferUnpluggingRequestPost(Request $request){

        if ($request) {
            $validator = Validator::make($request->all(), [
                'Vessel_Number'     => 'required',
                'Voyage_number'     => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        $DataArray = array();
        $Vessel_Number = trim($request->input('Vessel_Number'));
        $Voyage_number = trim($request->input('Voyage_number'));
        for($a=0;$a <= 20;$a++){

            if(!empty($request->input('CN_'.$a.''))){

                $tempArray = array();
                $tempArray['CN'] = $request->input('CN_'.$a.'');
                $tempArray['SIZE'] = $request->input('SIZE_'.$a.'');
                $tempArray['Type'] = $request->input('Type_'.$a.'');
                $tempArray['UPD'] = $request->input('UPD_'.$a.'');
                $tempArray['UPT'] = $request->input('UPT_'.$a.'');



                array_push($DataArray,$tempArray);
            }
        }
        // Set The Session By Spenzer
        session(['unplugging_request' => $DataArray]);

        return view('shipping.unplugging-request-review',compact('DataArray','Vessel_Number','Voyage_number'));

    }

    public function UnpluggingAjax(Request $request){

        $dataURL = $request->data;
        $encoded_image = explode(",", $dataURL)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("signature.png", $decoded_image);

        $toAddress = "sasi.spenzer@gmail.com";
        $template = 'emails.name';
        $title = 'Shipping Schedule';
        $subject = 'Shipping Schedule';

        $response = $this->SendMail($toAddress,$template,$title,$subject,$link=null,$body = null);
    }

    public function OnCarrierChange(){

        return view('shipping.On-Carrier-Change');
    }

    public function OnCarrierChangePost(Request $request){



        $DataArray = array();

        for($a=0;$a <= 20;$a++){

            if(!empty($request->input('CN_'.$a.''))){

                $tempArray = array();
                $tempArray['CN'] = $request->input('CN_'.$a.'');
                $tempArray['SIZE'] = $request->input('SIZE_'.$a.'');
                $tempArray['Type'] = $request->input('Type_'.$a.'');
                $tempArray['RCF'] = $request->input('RCF_'.$a.'');
                $tempArray['RCT'] = $request->input('RCT'.$a.'');



                array_push($DataArray,$tempArray);
            }
        }
        // Set The Session By Spenzer
        session(['carrier_request' => $DataArray]);

        return view('shipping.carrier-request-review',compact('DataArray'));
    }

    public function carrierAjax(Request $request){

        $dataURL = $request->data;
        $encoded_image = explode(",", $dataURL)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("signature.png", $decoded_image);

        $toAddress = "sasi.spenzer@gmail.com";
        $template = 'emails.name';
        $title = 'Shipping Schedule';
        $subject = 'Shipping Schedule';

        $response = $this->SendMail($toAddress,$template,$title,$subject,$link=null,$body = null);
    }










}
