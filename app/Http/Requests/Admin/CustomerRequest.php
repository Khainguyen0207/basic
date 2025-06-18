<?php

namespace App\Http\Requests\Admin;

use App\Enums\CustomerStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    public function rules(): array
    {

        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('customers', 'email')->ignore($this->customer)
            ],
            'phone' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:6|confirmed',
            'gender' => 'nullable|in:male,female,other',
            'cash' => 'numeric|min:0',
            'address' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'avatar' => 'nullable|image|max:2048',
            'is_partner' => 'nullable|boolean',
            'status' => ['nullable', Rule::in(CustomerStatusEnum::cases())]
        ];
    }
}
