@extends('theme.layouts.master')

@section('content')
    <section class="login-section" data-bb-toggle="login-modal">
        <div class="login-wrapper mx-auto mt-4">
            <form action="{{ route('admin.login.authenticate') }}" method="post" class="login-form" data-bb-toggle="login-form-toggle">
                @csrf
                <div class="form-header mb-4">
                    <div class="arrow">
                        <a href="{{ route('homepage') }}"><i class="fas fa-arrow-left"></i></a>
                    </div>

                    <div class="login-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        <h3 class="fw-bold">Login</h3>
                    </div>
                </div>

                <div class="form-input">
                    <input type="text" name="email" autocomplete="off" value="tkhai12386@gmail.com" required>
                    <label for="text" class="label-name">
                    <span class="content-name">
                      Email/Phone Number
                    </span>
                    </label>
                </div>
                <div class="form-input">
                    <input data-bb-toggle="password-field" type="password" name="password" autocomplete="off"
                        value="tkhai12386@gmail.com"   required>
                    <label for="password-field" class="label-name">
                        <span class="content-name">
                          Password
                        </span>
                    </label>
                    <div class="login-btn">
                        <span data-bb-target="password-field" class="toggle-password me-2">
                            <i class="fa-solid fa-eye"> </i>
                        </span>
                        <div class="arrow login-btn-w">
                            <button type="submit"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="rs-pass mb-4">
                <a href="#">
                    Forget password
                </a>
            </div>

            <div class="form-footer">
                <div class="login-other-link mb-4">
                    <p class="fst-italic mb-4">Log in using another method</p>
                    <div class="login-methods">
                        <button type="reset" class="google-login">
                            <img src="{{asset('assets/images/icon-images/google-icon.png')}}" alt="google-icon">
                        </button>
                        <button type="reset" class="facebook-login">
                            <img src="{{asset('assets/images/icon-images/facebook-icon.png')}}"
                                 alt="facebook-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

