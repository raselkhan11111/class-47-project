<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
       // dd($request);
        Product::create([
            'name' => $request->name,
            'title' => $request->title,
            'category' => $request->category,
            'price'=>$request->price,
            'is_active' => $request->is_active? True :False,
            'description' => $request->description,
            'image' => $this->uploadimage($request->file('image'))
        ]);
        return redirect()->route('product.index')->with('success', 'SuccessFully Created Product');
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
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $products = Product::find($id);
        $requestData = [
            'name' => $request->name,
            'title' => $request->title,
            'category' => $request->category,
            'price'=>$request->price,
            'is_active' => $request->is_active ? true : false,
            'description' => $request->description,
            
        ];

        if ($request->hasFile('image')) {
            $requestData['image'] = $this->uploadImage($request->file('image'));

            // dd($requestData['image']);
        }
        $products->update($requestData);
        return redirect()->route('product.index')->with('success', 'products edit Successdfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'successfully delete');
    }

    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('YmdHi') . time() . $originalName;
        // $image->move(storage_path ('/app/public/Products'),
        //  $filename);
        Image::make($image)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/products/' . $fileName);

        return $fileName;
    }
}
