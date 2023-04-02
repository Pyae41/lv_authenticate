<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'product_name' => 'required | string',
            'price' => 'required | numeric',
            'qty' => 'required | numeric',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => (Session::get('locale') == 'en') ? 'The product name field is required.' : 'ထုတ်ကုန်အမည်အကွက် လိုအပ်သည်။',
            'price.required' => (Session::get('locale') == 'en') ? 'The price field is required.' : 'စျေးနှုန်းအကွက်လိုအပ်သည်။',
            'qty.required' => (Session::get('locale') == 'en') ? 'The quantity field is required.' : 'ပမာဏအကွက် လိုအပ်သည်။',
        ];
    }
}
