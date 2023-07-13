@extends('auth.layouts.login-layout')

@section('title', 'HAMA|Login')

@section('content')

    <main class="main-content main-login mt-0">

      <div class="page-header min-vh-100">
        <div class="left-container col-8">
          <div class="login-txt ms-10">
            <h1>95% Clientes</h1>
            <h1>SATISFECHOS.</h1>
          </div>
          <span class="left-filter"></span>
        </div>

        <div class="right-container col-12 col-xl-4 container">
          <div class="row">
            <div class="form-container">
              <div class="card z-index-0 fadeIn3 fadeInBottom">

                <div class="cont-txt-login d-flex">

                  <div class="cont-img-logo">
                    <img src="{{asset('assets/login/img/logo.png')}}" alt="HamaPerú">
                  </div>
  
                  <div>
                    <h4 class="text-white text-center"> BIENVENIDO A HAMA PERÚ </h4>
                    <h4 class="text-white text-center"> Para continuar por favor ingresa con tu usuario y contraseña. </h4>
                  </div>
  
                </div>
                
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}" role="form" class="text-start login-form">

                    @csrf

                    <div class="input-group input-group-outline my-4">
                      
                      <input id="dni" name="dni" type="text" class="form-control @error('dni') is-invalid @enderror" required autocomplete="dni" value="{{old('dni')}}" placeholder="Documento de Identidad">

                      @error('dni')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>


                    <div class="input-group input-group-outline mb-3">

                      <input id="password" name="password" type="password" required class="form-control @error('dni') is-invalid @enderror" placeholder="Contraseña">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn w-100 my-4 mb-2">{{_('Iniciar Sesión')}}</button>
                    </div>

                  </form>

                </div>

                <div class="card-header p-0 position-relative mx-3 z-index-2">
                    <div class="row ">
                      <div class="col-2 text-center">
                        <a class="btn btn-link px-3" href="https://www.facebook.com/HamaPeruOficial/">
                          <i class="fa-brands fa-facebook-f text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center">
                        <a class="btn btn-link px-3" href="https://www.linkedin.com/company/hama-perú/?viewAsMember=true">
                          <i class="fa-brands fa-linkedin-in text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center">
                        <a class="btn btn-link px-3" href="https://www.instagram.com/hamaperu/">
                          <i class="fa-brands fa-instagram text-white text-lg"></i>
                        </a>
                      </div>
                    </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>


    </main>

@endsection