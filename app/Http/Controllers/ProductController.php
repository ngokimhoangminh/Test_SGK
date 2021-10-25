<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Http\Services\CategoryService;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(
        CategoryService $categoryService,
        ProductService $productService
    ) {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();

        return view('product.index', [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->getAll();

        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $this->productService->store($request->validated());
            session()->flash('status', 'Thêm sản phẩm thành công');

            return redirect()->route('product.index');
        } catch (\Exception $e) {
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $categories = $this->categoryService->getAll();
            $product = $this->productService->findProductById($id);
            if (empty($product)) {
                session()->flash('status', 'Sản phẩm không tồn tại');

                return redirect()->route('product.index');
            } else {
                return view('product.edit', [
                    "product" => $product,
                    "categories" => $categories
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request,  $id)
    {
        try {
            $this->productService->update($request->validated(), $id);
            session()->flash('status', 'Cập nhật sản phẩm thành công');

            return redirect()->route('product.index');
        } catch (\Exception $e) {
            return abort(500);
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
        try {
            $result = $this->productService->destroy($id);

            return $result;
        } catch (\Exception $e) {
            return abort(500);
        }
    }

    public function activeProduct($id)
    {
        try {
            $this->productService->activeProduct($id);
            session()->flash('status', 'Cập nhật trạng thái sản phẩm thành công');

            return redirect()->route('product.index');
        } catch (\Exception $e) {
            return abort(500);
        }
    }
}