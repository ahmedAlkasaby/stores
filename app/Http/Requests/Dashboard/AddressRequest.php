<?php

namespace App\Http\Requests\dashboard;

use Google\Rpc\Context\AttributeContext\Request;
use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            "user_id" =>  "required|exists:users,id",
            "region_id" => "required|exists:regions,id",
            "city_id" => "required|exists:cities,id",
            "type" => "required",
            "address" => "required|string",
            "building" => "nullable|string",
            "floor" => "nullable|string",
            "apartment" => "nullable|string",
            "additional_info" => "nullable|string",
            "latitude" => "required|string",
            "longitude" => "required|string",

        ];
    }
}
