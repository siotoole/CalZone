@extends('layouts.app')

@section('content')
  <div class="card max-w-md mx-auto">
    <h2>{{ __('Login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="my-6">
        <label class="block text-gray-600 mb-2" for="email">{{ __('E-Mail Address') }}</label>
        <input type="email"
               name="email"
               id="email"
               class="form-input"
               value="{{ old('email') }}"
               required
               autocomplete="email"
               autofocus>
      </div>
      <div class="my-6">
        <label class="block text-gray-600 mb-2" for="password">{{ __('Password') }}</label>
        <input type="password"
               name="password"
               id="password"
               class="form-input"
               required
               autocomplete="current-password">
      </div>
      <div class="my-6 flex items-center">
        <input type="checkbox"
               name="remember"
               id="remember"
          {{ old('remember') ? 'checked' : '' }}>
        <label class="text-gray-600 ml-2" for="remember">{{ __('Remember Me') }}</label>
      </div>
      <div class="mt-6 flex items-center justify-between">
        <button class="button" type="submit">{{ __('Login') }}</button>
        @if (Route::has('password.request'))
          <a class="inline-block font-bold text-blue-500 hover:text-blue-700"
             href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        @endif
      </div>
    </form>
  </div>
@endsection
