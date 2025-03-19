<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'customer_name' => 'required|string|max:255',
            'created_data' => 'required|date',
            'product_id' => 'required|exists:products,id',
            'status' => 'required|boolean',
            'comment' => 'nullable|string'
        ];
    }
}
