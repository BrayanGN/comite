@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen mx-auto max-w-full ">
   
        <div class="bg-white bg-gradient-to-r from-blue-400 to-indigo-800 p-8 shadow-md rounded-md w-80 border-200 border-indigo-200 border-b-indigo-500">
            <div class="col-md-8">
                <div>
                    <img src="../../../public/img/logo-sena-negro-png-2022.png" alt="">
                </div>
                <div class="card">
                    <div class="text-xl font-semibold mb-4">{{ __('Bienvenido!') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Correo Electronico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="mt-1 px-3 py-2 block w-full rounded-md border-b-indigo-500 focus:border-blue-500 focus:ring focus:ring-blue-200 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="mt-1 px-3 py-2 block w-full rounded-md border-b-indigo-500 focus:border-blue-500 focus:ring focus:ring-blue-200 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4  ">
                                    <button type="submit" class="btn btn-primary border-indigo-500/50 rounded-lg  bg-blue-900 w-16 text-white">
                                        {{ __('Entrar') }}
                                    </button>
                                    <br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link underline decoration-double" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
@endsection

	
