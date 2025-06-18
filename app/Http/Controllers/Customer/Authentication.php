<?php

namespace App\Http\Controllers\Customer;

use App\Http\Requests\Customer\RegisterRequest;
use App\Models\Customer;

class Authentication
{
    public function login()
    {

    }

    public function register()
    {

    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        Customer::query()->create($data);

        return response()->json([
            'message' => 'Tạo tài khoản thành công',
            'nextUrl' => route('auth.login.index')
        ])->setStatusCode(200);
    }
}
