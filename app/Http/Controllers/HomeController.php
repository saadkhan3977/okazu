<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSettingWebStyle;
use App\Models\Reservation;
use App\Models\Emails;
use App\Mail\ReservationMail;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
		$data['general_wesbstyle'] =  GeneralSettingWebStyle::first();		
		return view('welcome',$data);
    }


    public function reservation_store(Request $request)
    {
    	$dataa = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
        ];

        $data = Reservation::create($dataa);
        $objDemo = new \stdClass();
        $objDemo->name = $request->name;
        $objDemo->email = $request->email;
        $objDemo->date = $request->date;
        $objDemo->time = $request->time;
        $objDemo->phone = $request->phone;
        $objDemo->message = $request->message;
        $contacts = Emails::get();
        if($contacts)
        {
            foreach($contacts as $row){
                Mail::to($row->email)->send(new ReservationMail($objDemo));
            }
        }
        else
        {
            Mail::to('info@okazu.com')->send(new ReservationMail($objDemo));
        }
        return response()->json(['data'=>$data]);
    }
}
