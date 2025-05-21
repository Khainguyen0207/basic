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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Edit customer']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Edit customer']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return admin_template_basic_view('customer.edit', ['title' => 'Customer', 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
