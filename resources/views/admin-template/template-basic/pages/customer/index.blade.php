@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Customer</h4>
                        <div class="action float-right">
                            <button type="reset" class="btn btn-inverse-primary btn-icon-text"
                                    data-bb-toggle="btn-with-href"
                                    data-url="{{ route('admin.customers.create') }}">
                                <i class="mdi mdi-plus"></i> Thêm
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="customer-table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> ID</th>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> Cash ( VNĐ )</th>
                                    <th> Status</th>
                                    <th> Create Date</th>
                                    <th> Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td> 1</td>
                                    <td>
                                        <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image"/>
                                        <span class="pl-2">Henry Klein</span>
                                    </td>
                                    <td> tkhai12386@gmail.com</td>
                                    <td> 100.000</td>
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                    <td> 04 Dec 2019</td>
                                    <td>
                                        <button type="button" class="btn-sm btn-inverse-primary btn-icon">
                                            <i class="mdi mdi-pencil-box-outline"></i>
                                        </button>
                                        <button type="button" class="btn-sm btn-inverse-danger btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td> 2</td>
                                    <td>
                                        <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image"/>
                                        <span class="pl-2">Estella Bryan</span>
                                    </td>
                                    <td> abc@example.com</td>
                                    <td> 200.000</td>
                                    <td>
                                        <div class="badge badge-danger">Locked</div>
                                    </td>
                                    <td> 04 Dec 2019</td>
                                    <td>
                                        <button type="button" class="btn-sm btn-inverse-primary btn-icon">
                                            <i class="mdi mdi-pencil-box-outline"></i>
                                        </button>
                                        <button type="button" class="btn-sm btn-inverse-danger btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
