<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel_orders;

class TravelController extends Controller
{
    public function index()
    {
        $travel_orders=Travel_orders::OrderBy('id','asc')
                                    ->paginate(10);
    	return view('admin.travel.index',[
    		'pagetitle' => 'travel order',
    		'title' => 'Order | Admin',
            'travel_orders' => $travel_orders
    	]);
    }

    public function view(Request $request)
    {
        $travel_orders=Travel_orders::OrderBy('where id = request');
        return view('admin.travel.index',[
            'pagetitle' => 'travel order',
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
        $savetravel_orders = new Travel_orders;
        $savetravel_orders->emp = $request->emp;
        $savetravel_orders->travel_purpose = $request->travel_purpose;
        $savetravel_orders->place = $request->place;
        $savetravel_orders->date  = $request->date;
        $savetravel_orders->objective  = $request->objective;
        $savetravel_orders->funds  = $request->funds;
         
        if ($savetravel_orders->save()) {
            return redirect()->back();
        }
    }
}
