<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Customer;
use App\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']=Product::orderBy('updated_at','DESC')->get();
        return view('super.product.list', $data);
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
        //
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
        $data['customers']=Customer::all();
        $data['result']=Product::Find($id);
        return view('super.product.edit', $data);
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
        // $product=Product::Find($id);
        // $product->customer_id=$request->customer_id;
        // $product->status=$request->status;
        // $product->progress=$request->progress;

        // $subsidiary_id=Customer::Find($request->customer_id)->subsidiary_id;
        // $product->subsidiary_id=$subsidiary_id;

        // if($request->photo){
        //     $imageName = time().'.'.$request->photo->getClientOriginalExtension();
        //     $request->photo->move(public_path('upload'), $imageName);
        //     $product->photo='upload/'.$imageName;
        // }
        // $product->save();

        $product=Product::Find($id);
        $product->customer_id=$request->customer_id;
        $product->status=$request->status;
        $product->equipament=$request->equipament;
        $product->brand=$request->brand;
        $product->model=$request->model;
        $product->serial_number=$request->serial_number;
        $product->defect=$request->defect;
        $product->description=$request->description;
        $product->observations=$request->observations;
        $product->subsidiary_id=auth()->user()->id;

        $subsidiary_id=Customer::Find($request->customer_id)->subsidiary_id;
        $product->subsidiary_id=$subsidiary_id;

        if($request->optional){
            $product->optional=1;
            $product->numeric_digits=$request->numeric_digits;
            $product->purchase_date=$request->purchase_date;
            $product->store=$request->store;
        }else{
            $product->optional=0;
            $product->numeric_digits='';
            $product->purchase_date='';
            $product->store='';
        }

        $product->save();
        if($request->photo){
            $countfiles =count($request->photo);
        // if($countfiles!=0){
            $images=Image::where('product_id',$product->id)->delete();
            for($i=0; $i<$countfiles; $i++){
                $filename = time().rand(100, 999).".".$request->photo[$i]->getClientOriginalExtension();
                $request->photo[$i]->move(public_path('upload'), $filename);
                $new_image=new Image();
                $new_image->product_id=$product->id;
                $new_image->photo='upload/'.$filename;
                $new_image->save();
            }
        }


        return redirect()->route('admin-product.index')->with('success','update_success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin-product.index')->with('success','delete_success');
    }
}
