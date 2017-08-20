<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * 
     * @return 	Response
     */
    public function index()
    {
    	$orders = Orders::all();

    	return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 	Response
     */
    public function create()
    {
    	$user = session()->get('user');
    	return view('orders.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param 	Request 	$request
     * @return 	Response
     */
    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), Orders::$rules);

    	if ($validator->passes()) {
    		Orders::create($request->all());

    		return redirect('orders');
    	}

    	return redirect('orders/create')
	    	->withInput()
	    	->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param 	int 	$id
     * @return 	Response
     */
    public function show($id)
    {
    	$order = Orders::find($id);
    	// dd($order);
    	return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param 	int 	$id
     * @return 	Response
     */
    public function edit($id)
    {
    	$order = Orders::find($id);
        if (is_null($order)) {
            return redirect('orders');
        }

        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param 	int 	$id
     * @return 	Response
     */
    public function update($id, Request $request)
    {
    	$input = $request->all();
        $validator = Validator::make($request->all(), Orders::$rules);
        
        if ($validator->passes()) {
            $order = Orders::find($id);
            $order->update($input);
            return redirect('orders');
        }

		return redirect('orders/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
    }

    /**
     * Remove the specified resource from storage
     *
     * @param 	int 	$id
     * @return 	Response
     */
    public function destroy($id)
    {
    	Orders::find($id)->delete();
        return redirect('orders');
    }
}
