<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel_order;

class TravelController extends Controller
{
    public function index()
    {
        $travel_orders = travel_order::OrderBy('id', 'ASC')
                    ->paginate(10);
    	return view('admin.travel.index',[
    		'pagetitle' => 'Travel Order',
    		'title' => 'Order | Admin',
            'travel_orders' => $travel_orders
    	]);
    }
    public function create()
    {
    	return view('admin.travel.create',[
    		'pagetitle' => 'travel order',
    		'title' => 'Order | Admin'
    	]);
    }
    public function store(Request $request)
    {
        $savetravel_order = new Travel_order;
        $savetravel_order->emp = $request->emp;
        $savetravel_order->travel_purpose = $request->travel_purpose;
        $savetravel_order->place = $request->place;
        $savetravel_order->date  = $request->date;
        $savetravel_order->objective  = $request->objective;
        $savetravel_order->funds  = $request->funds;
         
        if ($savetravel_order->save()) {
            return redirect()->back();
        }
    }
}
