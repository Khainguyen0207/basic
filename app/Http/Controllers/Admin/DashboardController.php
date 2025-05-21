<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return admin_template_basic_view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
}
