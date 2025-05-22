<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return admin_template_basic_view('customer.index', ['title' => 'Customer']);
    }

    public function create()
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Edit customer']);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(string $id)
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Edit customer']);
    }

    public function edit(string $id)
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Customer', 'id' => $id]);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
