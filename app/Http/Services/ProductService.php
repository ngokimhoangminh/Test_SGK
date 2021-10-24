<?php

namespace App\Http\Services;

use File;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Http\Repositories\ProductRepositories;
use App\Http\Repositories\CategoryRepositories;


class ProductService 
{
    protected $productRepositories;
    protected $categoryRepositories;

    public function __construct(
        ProductRepositories $productRepositories, 
        CategoryRepositories $categoryRepositories
    ) {
        $this->productRepositories = $productRepositories;
        $this->categoryRepositories = $categoryRepositories;
    }

    public function index()
    {
        $products = $this->productRepositories->index();

        return view('product.index', [
            "products" => $products,
        ]);
    }

    public function create()
    {
        $categories = $this->categoryRepositories->index();

        return view('product.create')->with(compact('categories'));
    }

    public function store($request)
    {
        try{
            DB::beginTransaction();

            $data = $request->validated();
            $image = $request->image;
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $data['image'] = $new_image;
            Storage::disk(config('filesystems.default'))->put($new_image, File::get($image));
            $this->productRepositories->store($data);

            DB::commit();

            session()->flash('status', 'Thêm sản phẩm thành công'); 

            return redirect()->route('product.index');
        }catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->withErrors($e->getMessage());
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

    public function edit($id)
    {
        try{
            $categories = $this->categoryRepositories->index();
            $product = $this->productRepositories->show($id);

            return view('product.edit',compact('product', 'categories'));
        }catch(\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function update($request, $id)
    {
        try{
            DB::beginTransaction();

            $product = $this->productRepositories->find($id);
            $data = $request->validated();
            $image = $request->image;
            if($image)
            {
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                $data['image'] = $new_image;
                Storage::disk(config('filesystems.default'))->put($new_image, File::get($image));
                Storage::disk(config('filesystems.default'))->delete($product->image);
            }
            $this->productRepositories->update($id, $data);

            DB::commit();

            session()->flash('status', 'Cập nhật sản phẩm thành công'); 

            return redirect()->route('product.index');
        }catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->withErrors($e->getMessage());
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
        try{
            $product = $this->productRepositories->find($id);
            Storage::disk(config('filesystems.default'))->delete($product->image);
            $result = $this->productRepositories->destroy($id);

            return $result;
        }catch(\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function activeProduct($id)
    {
        $product = $this->productRepositories->find($id);
        if($product->status) 
        {
            $product->status = Product::STATUS_INACTIVE;
        }else 
        {
            $product->status = Product::STATUS_ACTIVE;
        }
        $product->save();
        session()->flash('status', 'Cập nhật trạng thái sản phẩm thành công'); 

        return redirect()->route('product.index');
    }
}
