<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;
use App\Mail\ContactMail;
use App\Models\Emails;
use Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
    	$data = ContactUS::create($request->all());
    	$objDemo = new \stdClass();
        $objDemo->name = $request->name;
        $objDemo->email = $request->email;
        $objDemo->subject = $request->subject;
        $objDemo->phone = $request->phone;
        $objDemo->description = $request->description;
        $contacts = Emails::get();
        if($contacts)
        {
            foreach($contacts as $row){
                Mail::to($row->email)->send(new ContactMail($objDemo));
            }
        }
        else
        {
            Mail::to('info@okazu.com')->send(new ContactMail($objDemo));
        }
    	return redirect()->back()->with('success_contact','Thank you For Contact');
        // $data = Reservation::create($dataa);
        // return response()->json(['data'=>$data]);
    }
}
