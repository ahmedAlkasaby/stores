<?php

namespace App\Http\Requests\Api;

use App\Enums\TypeAddressEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

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
            'type'    => ['required', new Enum(TypeAddressEnum::class)],
            'city_id'=>'required|exists:cities,id',
            'region_id'=>'nullable|exists:regions,id',
            'address'=>'required|string',
            'latitude'=>'required|string',
            'longitude'=>'required|string',
            'building'=>'nullable|string',
            'floor'=>'nullable|string',
            'apartment'=>'nullable|string',
            'phone'=>'nullable|string',
            'additional_info'=>'nullable|string'
        ];
    }


}
