<body class="body">
<style>

.body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #4696e5;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500; 
}
.box input[type = "email"],.box input[type = "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "email"].box input[type = "password"]{
    width: 200px;
    border-color: #2ecc71;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type = "submit"]:hover{
    background: #2ecc71;
}
.rec{
    color: white;
    text-decoration-color: white;
}
</style>
@extends('layouts.app')
@section('content')

    
        
            
                

                <div class="box">
                    <form class="box" method="POST" action="{{ route('login') }}">
                        <h1>Iniciar sesión</h1>
                        @csrf

                      
                          
                                <input id="email" type="email" class="form-control @error('correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                       

                        

                           
                                <input id="password" type="password" class="form-control @error('contraseña') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="contraseña">

                                @error('contraseña')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                             
                                <input type="submit" class="btn btn-primary" value="Entrar"  {{ __('Entrar') }}>
                                   
                                </input>
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} {{ __('Recordar') }}>

                                    <label class="rec" for="remember" color="white">
                                        {{ __('Recordar') }}
                                    </label>
                              

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
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
</body>
