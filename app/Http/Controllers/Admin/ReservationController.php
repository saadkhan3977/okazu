<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function index()
    {
		$data['reservations'] =  Reservation::get();		
		return view('admin.forms.reservation.index',$data);
    }

    public function delete($id)
    {
		$data = Reservation::find($id);		
		$data->delete();
		return redirect()->back();
    }
}
