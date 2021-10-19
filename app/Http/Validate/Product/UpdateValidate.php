<?php
namespace App\Http\Validate\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateValidate extends FormRequest
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
                'name' =>'required|string|min:5:|max:255',
                'price' =>'required|',
                'discount' =>'required|',
                'description' => 'required|string|max:255',
                'status' => 'required',
            ];
    }
    public function messages(){
        return [
            'name.required' => 'Yêu cầu nhập tên sản phẩm',
            'price.required' => 'Bạn phải nhập giá sản phẩm',
            'discount.required' => 'Bạn chưa nhập giá giảm sản phẩm',
            'description.required' => 'Mô tả sản phẩm hiện chưa có',
            'status.required' => 'Bạn chưa chọn trạng thái cho sản phẩm',
        ];
    }
}

?>