@extends('layouts.app')

@section('content')
<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
    <div class="row w-100">
      <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <label for="email" class="label">{{ __('E-Mail Address') }}</label>
              <div class="input-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @if ($errors->has('email'))
            <span class="invalid-feedback">
                {{ $errors->first('email') }}
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="label">{{ __('Password') }}</label>
        <div class="input-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*********">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
            </span>
        </div>
        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary submit-btn btn-block">
                                    {{ __('Login') }}
                                </button>
</div>

<div class="form-group d-flex justify-content-between">
  <div class="form-check form-check-flat mt-0">
    <label class="form-check-label"> 
      <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
  </label>
</div>
<a class="text-small forgot-password text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
</div>
<!--
<div class="form-group">
    <div class="text-block text-center my-3">
    <span class="text-small font-weight-semibold">Or log in with</span>
</div>
     @include('partials.socials-icons')
</div>

<div class="text-block text-center my-3">
    <span class="text-small font-weight-semibold">Not a member ?</span>
    <a href="{{ url('/register') }}" class="text-black text-small">Create new account</a>
</div>
-->
</form>
    

</div>
<!--
<ul class="auth-footer">
    <li>
      <a href="#">Conditions</a>
  </li>
  <li>
      <a href="#">Help</a>
  </li>
  <li>
      <a href="#">Terms</a>
  </li>
</ul>
-->
<p class="footer-text text-center">copyright © 2018 ThinkIT Uganda Limited. All rights reserved.</p>
</div>
</div>
</div>
<!-- content-wrapper ends -->
</div>
@endsection
