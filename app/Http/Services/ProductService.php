<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Http\Repositories\Product\ProductRepositoryInterface;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function store($data)
    {
        try {
            $image = $data['image'];
            $newImage = Str::uuid()->toString() . '.' . $image->getClientOriginalExtension();
            $data['image'] = $newImage;
            Storage::disk(config('filesystems.default'))->put($newImage, File::get($image));
            $result = $this->productRepository->store($data);

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function findProductById($id)
    {
        try {
            $product = $this->productRepository->find($id);

            return $product;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function update($data, $id)
    {
        try {
            DB::beginTransaction();
            $product = $this->productRepository->find($id);
            if (isset($data['image'])) {
                $image = $data['image'];
                $newImage = Str::uuid()->toString() . '.' . $image->getClientOriginalExtension();
                $data['image'] = $newImage;
                Storage::disk(config('filesystems.default'))->put($newImage, File::get($image));
                Storage::disk(config('filesystems.default'))->delete($product->image);
            }
            $result = $this->productRepository->update($id, $data);
            DB::commit();

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function destroy($id)
    {
        try {
            $product = $this->productRepository->find($id);
            Storage::disk(config('filesystems.default'))->delete($product->image);
            $result = $this->productRepository->destroy($id);

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function activeProduct($id)
    {
        try {
            $product = $this->productRepository->find($id);
            if ($product->status) {
                $product->status = Product::STATUS_INACTIVE;
            } else {
                $product->status = Product::STATUS_ACTIVE;
            }
            $result = $product->save();

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}