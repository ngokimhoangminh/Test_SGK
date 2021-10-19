<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Validate\Product\StoreValidate;
use App\Http\Validate\Product\UpdateValidate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::orderBy('id','desc')->get();
        return view('product.index')->with(compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValidate $request)
    {
        //
        try{

            $product = Product::create($request->validated());

            return redirect()->route('product.index')->with('status','Thêm sản phẩm thành công');
        }catch(\Throwable $th){
            Log::error($th);

            return redirect()->back();
        }
        
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
    public function edit(Product $product)
    {
        //
        try{

            return view('product.edit',compact('product'));
        }catch(\Throwable $th){

            Log::error($th);
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValidate $request, Product $product)
    {
        //
        try{

            $product->update($request->validated());

            return redirect()->route('product.index')->with('status','Cập nhật sản phẩm thành công');
        }catch(\Throwable $th){
            Log::error($th);
            return redirect()->back();
        }
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
        dd($id);
    }

    public function delete($id)
    {
        try{

            Product::find($id)->delete();

            return redirect()->route('product.index')->with('status','Đã xóa sản phẩm thành công');
        }catch(\Throwable $th){
            Log::error($th);
            return redirect()->back();
        }
    }
}
