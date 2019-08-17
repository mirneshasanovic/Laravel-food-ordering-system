<?php

namespace App\Http\Controllers;
use  App\Customer;
use  App\Food;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Customer::all();
        return view('orders')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer=new Customer;
        $customer->food = $request->input('food');
        $customer->quantity = $request->input('quantity');
        $customer->name = $request->input('name');
        $customer->lastname = $request->input('lastname');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        $old_value = Food::where('food', $request->input('food'))->first()->quantity;
        Food::updateOrCreate(['food' => $request->input('food')] , ['quantity' =>$old_value - $request->input('quantity')] );
        return redirect('todays_offer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
