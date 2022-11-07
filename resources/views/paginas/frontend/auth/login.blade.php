@extends("paginas.frontend.layout")

@section('title', 'Login')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection

@section('content')
    <div class="backimg">
        <div class="forms">
            <form class="signIn" method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Bem-vindo</br>de Volta !</h3>
                <h5>Insira o seu Email</h5>
                <input class="form-control @error('email') is-invalid @enderror" placeholder="&#xf0e0;&nbsp; Email"
                    value="{{ old('email') }}" type="email" name="email" id="signinemail"
                    autocomplete='off' required />
                @if ($errors->has('email'))
                    <script>
                        toastr.error('Credênciais Incorretas, Verifique os Campos!');

                    </script>
                @endif
                <h5>Insira a sua Password</h5>
                <input class="form-control @error('register_email') is-invalid @enderror" type="password"
                    id="signinpassword" placeholder="&#xf023; &nbsp; Password" name="password" required />
                <div class="lembrar">
                    <input type="checkbox" name="remember" id="cbx" class="checkb" style="display: none;"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="cbx" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path
                                d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
                            </path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </label>
                    <label for="cbx" class="lembrar">Lembrar-me</label>
                </div>
<br><br>
                <button class="form-btn dx" type="submit">Log In</button>
                <button class="form-btn sx back" type="button">Criar Conta</button>
            </form>
            <form class="signUp" method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Criar Conta</h3>
                <p class="paragrafo">Crie a sua conta e junte-se a nós!</p>
                <h5>Insira o seu Nome</h5>
                <input class="form-control @error('name') is-invalid @enderror" placeholder="&#xf007;&nbsp; Nome"
                    id="signupnome" name="name" type="text" value="{{ old('name') }}" required autocomplete='off' />
                @error('name')
                    <script>
                        toastr.error('Nome Inválido!');
                        $(".signUp").addClass("active-sx");
                        $(".signIn").addClass("inactive-dx");
                        $(".signIn").removeClass("active-dx");
                        $(".signUp").removeClass("inactive-sx");

                    </script>
                @enderror
                <h5>Insira o seu Apelido</h5>
                <input class="form-control @error('apelido') is-invalid @enderror" placeholder="&#xf007;&nbsp; Apelido"
                    id="signupapelido" name="apelido" value="{{ old('apelido') }}" type="text" required
                    autocomplete='off' />
                @error('apelido')
                    <script>
                        toastr.error('Apelido Inválido!');
                        $(".signUp").addClass("active-sx");
                        $(".signIn").addClass("inactive-dx");
                        $(".signIn").removeClass("active-dx");
                        $(".signUp").removeClass("inactive-sx");

                    </script>
                @enderror
                <h5>Insira o seu Email</h5>
                <input class="form-control @error('register_email') is-invalid @enderror" placeholder="&#xf0e0;&nbsp; Email"
                    value="{{ old('register_email') }}" id="signupemail" name="register_email" type="email" required
                    autocomplete='off' />
                @error('register_email')
                    <script>
                        toastr.error('O Email Já Está a Ser Utilizado!');
                        $(".signUp").addClass("active-sx");
                        $(".signIn").addClass("inactive-dx");
                        $(".signIn").removeClass("active-dx");
                        $(".signUp").removeClass("inactive-sx");

                    </script>
                @enderror
                <h5>Insira a sua Password</h5>
                <input class="password" type="password" minlength="8" placeholder="&#xf023;&nbsp; Password" name="password"
                    id="signuppassword" required />
                <div id="strong"><span></span></div>
                <div class="small">A Password tem de ter pelo menos 8 caracteres</div>
                <h5>Confirme a sua Password</h5>
                <input class="password" type="password" minlength="8" placeholder="&#xf023;&nbsp; Confirmar Password"
                    name="password_confirmation" id="signupcpassword" required />
                <div id="valid"></div>
                <input type="hidden" name="tipouser" value="Utilizador" />
                <button class="form-btn dx" name="registar" id="registar" type="submit">Criar Conta</button>
                <button class="form-btn sx log-in" type="button">Já tem Conta?</button>
            </form>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('assets/js/paginas/frontend/login.js') }}"></script>
@endsection
