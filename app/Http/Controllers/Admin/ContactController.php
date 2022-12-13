<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUS;

class ContactController extends Controller
{
    public function index()
    {
		$data['contacts'] =  ContactUS::get();		
		return view('admin.forms.contact.index',$data);
    }

    public function delete($id)
    {
		$data = ContactUS::find($id);		
		$data->delete();
		return redirect()->back();
    }
}
