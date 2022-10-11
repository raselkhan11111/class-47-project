<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Order::create([
            'orders' => $request->orders,
            'price' => $request->price,
            'city' => $request->city,
            'unit' => $request->unit,
            'delevary_date' => $request->delevary_date,
            'status' => $request->status,
        ]);
        return redirect()->route('order.index')->with('success', 'SuccessFully Created Course');
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
        $orders = Order::find($id);
        return view('order.edit', compact('orders'));
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
        $orders = Order::find($id);
        $data = [
            'orders' => $request->orders,
            'price' => $request->price,
            'city' => $request->city,
            'unit' => $request->unit,
            'delevary_date' => $request->delevary_date,
            'status' => $request->status,
        ];
        $orders->update($data);
        return redirect()->route('order.index')->with('success', 'Course edit Successdfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect()->route('order.index')->with('success', 'successfully delete');
    }
}
