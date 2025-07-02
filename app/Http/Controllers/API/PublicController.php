<?php

namespace App\Http\Controllers\API;

use App\Models\Customer;

class PublicController
{

    public function customers()
    {
        $response = Customer::query()->get();

        return response()->json([
            'error' => false,
            'data' => $response,
            'message' => 'success'
        ]);
    }
}
