<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Base\BaseHttpResponse;

abstract class Controller
{
    public function httpResponse(): BaseHttpResponse
    {
        return BaseHttpResponse::make();
    }
}
