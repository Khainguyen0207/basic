<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        return admin_template_basic_view('customer.index', [
            'title' => 'Customer',
            'customers' => Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new customer.
     */
    public function create()
    {
        $title = 'Create Customer';

        return admin_template_basic_view('customer.create', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();

        Customer::query()->create($data);

        session()->flash('success', 'Tài khoản được tạo thành công');

        return response()->json([
            'error' => false,
            'data' => [
                'message' => 'Dữ liệu tạo thành công',
                'nextUrl' => route('admin.customers.index')
            ]
        ]);
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer)
    {
        return admin_template_basic_view('customer.edit', compact('customer'));
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit(Customer $customer)
    {
        return admin_template_basic_view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();

        if ($password = $data['password']) {
            $customer->password = Hash::make($password);
        } else {
            unset($data['password']);
        }

        $customer->fill($data);

        if ($customer->isDirty()) {
            $customer->save();
        }

        return response()->json([
            'error' => false,
            'data' => [
                'message' => 'Cập nhật dữ liệu thành công',
                'nextUrl' => route('admin.customers.index')
            ]
        ]);
    }

    public function destroy(Customer $customer)
    {
        if ($customer->getKey() === auth()->guard('customer')->id()) {
            return redirect()
                ->route('admin.customers.index')
                ->withErrors('Customer deleted failed.');
        }
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully.');
    }
}
