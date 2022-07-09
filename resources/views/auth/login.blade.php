@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 d-flex justify-content-center">
            <img src="{{asset("fotoss/banerr.jpg")}}">
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="email" class="col-md-5 col-form-label text-md-end">ingrese email</label>

                            <div class="col-md-7">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
<div class="bg-white mb-3">
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                <div class="d-flex justify-content-center  mb-3">
                    <img src="{{asset("fotoss/logoudh3.jpg")}}">

                </div>
                <p>
                <b>OFICINA CENTRAL</b><br>
                Jr. Hermilio Valdizán # 871 - Huánuco
                </p>
                <p>
                <b>Teléfono: (51-62) 519773</b><br>
                </p>
                <p>
                    <b>CIUDAD UNIVERSITARIA</b><br>
                Carretera Central km 2.6 - Huánuco
                </p>
                <p>
                <b>Teléfono: (51-62) 515151</b><br>
                </p>

            </div>
            <div class="col">
                <h1> paginas </h1><br>
                <div class="d-flex justify-content-center  mb-3">
                    <img style="border: 1px solid #cccccc" src="{{asset("fotoss/sistemas.jpg")}}">

                </div>
            </div>
            <div class="col mt-3">
                <h2>Enlaces </h2>
                <ul class="text-success text-decoration-underline">
                    <li>Preguntas Frecuentes</li>
                    <li>Oficina de admisión</li>
                    <li>Programa de Educación Superior a Distancia</li>
                    <li>Vicerrectorado de investigación</li>
                    <li>Ubicación y contactos</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="bg-success" style="height: 10px"></div>

</div>
@endsection
