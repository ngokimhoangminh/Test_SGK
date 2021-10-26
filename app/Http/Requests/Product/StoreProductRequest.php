<?php
namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|unique:products|string|min:5:|max:255',
                'category_id' => 'required',
                'price' => 'required',
                'discount' => 'required',
                'description' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000', 
                'status' => 'required'
            ];
    }
    
    public function messages(){
        return [
            'name.required' => 'Yêu cầu nhập tên sản phẩm',
            'name.unique' => 'Sản phẩm đã có ,xin nhập tên sản phẩm khác',
            'category_id.required' => 'Bạn chưa chọn dnah mục sản phẩm',
            'price.required' => 'Bạn phải nhập giá sản phẩm',
            'discount.required' => 'Bạn chưa nhập giá giảm sản phẩm',
            'description.required' => 'Mô tả sản phẩm hiện chưa có',
            'image.required' => 'Bạn chưa chọn hình ảnh',
            'image.image' => 'Ảnh phải là file ảnh',
            'image.mimes' => 'Ảnh phải là file ảnh jpg | png | gif | svg',
            'status.required' => 'Bạn chưa chọn trạng thái cho sản phẩm'
        ];
    }
}