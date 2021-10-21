<?php

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Repositories\ProductRepositories;
use App\Http\Repositories\CategoriesRepositories;
use Session;

class ProductServices 
{
    protected $prodcutRepositories;
    protected $categoriesRepositories;

    public function __construct(ProductRepositories $prodcutRepositories, CategoriesRepositories $categoriesRepositories)
    {
        
        $this->prodcutRepositories = $prodcutRepositories;
        $this->categoriesRepositories = $categoriesRepositories;
    }

    public function index()
    {
        $products=$this->prodcutRepositories->index();

        return view('product.index')->with(compact('products'));
    }

    public function create()
    {
        $categories=$this->categoriesRepositories->index();

        return view('product.create')->with(compact('categories'));
    }

    public function store($request)
    {
        try{
            $this->prodcutRepositories->store($request->validated());
            session()->flash('status', 'Thêm sản phẩm thành công'); 

            return redirect()->route('product.index');
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

    public function edit($product)
    {
        //
        try{
            return view('product.edit',compact('product'));
        }catch(\Throwable $th){
            Log::error($th);

            return redirect()->back();
        }
        
    }

    public function update($request,  $id)
    {
        try{
            $this->prodcutRepositories->update($id, $request->validated());
            session()->flash('status', 'Cập nhật sản phẩm thành công'); 

            return redirect()->route('product.index');
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
        try{
            $this->prodcutRepositories->destroy($id);

            return 1;
        }catch(\Throwable $th){
            Log::error($th);

            return redirect()->back();
        }
    }
}
