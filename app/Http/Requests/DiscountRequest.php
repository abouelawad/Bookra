<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class DiscountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        
        return [
            'code'=> ['required','string','min:3','unique:discounts,code,'],
            'percentage'=>['required','numeric','between:10,90'],
            'quantity'=>['required','numeric','between:1,1000'],
            'expiry_date'=>["required",'date_format:Y-m-d\TH:i', 'after:now'],

        ];
    }
}
