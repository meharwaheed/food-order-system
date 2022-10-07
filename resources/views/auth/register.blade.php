@extends('layouts.website')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section>
    <div class="row py-3">
        <h1 class="py-3 text-center">UTAS Lunch Ordering Registration</h1>
    </div>
    <div class="row py-3">
        <div class="col-4">
            <img src="images/register.png" class="img-fluid" alt="">
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body" style="background-color: #e6eeff;">
                    <h5 class="card-title text-center">Register</h5>
                    <form id="register-form">
                        <div class="mb-3">
                            <label for="uname" class="form-label">UTAS Id</label>
                            <input type="text" class="form-control" name="uname" id="uname"
                            placeholder="US12345" />
                        </div>
                         <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                            placeholder="Your Name" />
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password1" id="password1"
                            placeholder="******" />
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Again Password</label>
                            <input type="password" class="form-control" name="password2" id="password2"
                            placeholder="******"/>
                        </div>
                        <div class="mb-3">
                            <label for="mobileno" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" name="mobileno" id="mobileno"
                            placeholder="1231231233"/>
                        </div>
                        <div class="mb-3">
                            <label for="mailid" class="form-label">Email Id</label>
                            <input type="text" class="form-control" name="mailid" id="mailid"
                            placeholder="mail@domain.com"/>
                        </div>
                       <div class="d-grid gap-2">
                          <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</section>
@endsection
