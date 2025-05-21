@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <form class="form-sample col-12 " method="POST" action="/">
                @csrf
                <div class="grid-margin stretch-card">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-section mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text"
                                                       class="form-control @error('username') is-invalid @enderror"
                                                       id="username" name="username"
                                                       placeholder="Enter username">
                                                @error('username')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       id="email" name="email"
                                                       placeholder="Enter email">
                                                @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       id="password" name="password" placeholder="Enter new password">
                                                @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" class="form-control"
                                                       id="password_confirmation" name="password_confirmation"
                                                       placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="date"
                                                       class="form-control @error('dob') is-invalid @enderror"
                                                       id="dob" name="dob" value="">
                                                @error('dob')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="mb-4">Action</h3>
                                <button type="submit" class="btn btn-primary btn-icon-text mb-3">
                                    <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-icon-text mb-3" data-bb-toggle="btn-with-href" data-url="{{ route('admin.customers.index') }}">
                                    <i class="mdi mdi-file-cancel btn-icon-prepend"></i> Cancel
                                </button>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="mb-4">Avatar</h3>
                                <div class="file-upload-wrapper">
                                    <div class="file-upload-preview mb-3 text-center">
                                        <img src="{{ asset('assets/images/default-avatar.png') }}"
                                             alt="Avatar Preview"
                                             class="img-fluid rounded-circle"
                                             id="avatar-preview"
                                             style="width: 150px; height: 150px; object-fit: cover;">
                                    </div>
                                    <div class="file-upload-input">
                                        <input type="file"
                                               class="form-control @error('avatar') is-invalid @enderror"
                                               id="avatar"
                                               name="avatar"
                                               accept="image/*">
                                        <small class="form-text text-muted">Allowed formats: JPG, PNG, GIF. Max size: 2MB</small>
                                        @error('avatar')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('footer')
<script>
    // Handle file upload preview
    document.getElementById('avatar').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Check file type
            if (!file.type.match('image.*')) {
                alert('Please select an image file');
                this.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatar-preview').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Handle form progress
    const form = document.querySelector('form');
    const progressBar = document.querySelector('.progress-bar');
    const requiredFields = form.querySelectorAll('input[required], select[required], textarea[required]');
    const totalFields = requiredFields.length;

    function updateProgress() {
        const filledFields = Array.from(requiredFields).filter(field => {
            if (field.type === 'file') {
                return field.files.length > 0;
            }
            return field.value.trim() !== '';
        }).length;

        const progress = (filledFields / totalFields) * 100;
        progressBar.style.width = `${progress}%`;
        progressBar.setAttribute('aria-valuenow', progress);

        // Update progress bar color based on completion
        if (progress === 100) {
            progressBar.classList.remove('bg-primary');
            progressBar.classList.add('bg-success');
        } else {
            progressBar.classList.remove('bg-success');
            progressBar.classList.add('bg-primary');
        }
    }

    // Add required attribute to necessary fields
    const usernameInput = document.getElementById('username');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    if (usernameInput) usernameInput.setAttribute('required', '');
    if (emailInput) emailInput.setAttribute('required', '');
    if (passwordInput) passwordInput.setAttribute('required', '');

    // Add event listeners to all required fields
    requiredFields.forEach(field => {
        field.addEventListener('input', updateProgress);
        field.addEventListener('change', updateProgress);
    });

    // Initial progress update
    updateProgress();
</script>
@endpush
