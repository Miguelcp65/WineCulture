@extends("paginas.frontend.layout")

@section('title', 'Contactos')

@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/toast.min.css"
        integrity="sha512-atBvlmoxIAq7FWb+pPFxGTnPmwBRkorw1TtmH17kbUYaLxJnE/j1yIfT0NiDsZgCbmTd8NWCjSF1/9kfhl1Y2g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/transition.min.css"
        integrity="sha512-pinUcwCNaqU0NZshAbsdo6KVLgxKgFh1YH2Hb5otGJMMnEjgH3y9wxbA3Ig2onWdMNGI/ee9SlrZ0X5xcqqnVw=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/transition.min.js"
        integrity="sha512-PizVXr2x8nthLzuhSX9uZjZ6VQpxdh8+sNvx+JZSOJA29Edpz+Ly+y+dS87Vi4wyc1YFAgDczoV0pqdXXPltmA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/toast.min.js"
        integrity="sha512-KzZ7u3HRHAFKPuOeFY6F2sqcycggXWbKCD5pjGQ0RnG5VH7w/KSFBzmrflh2c4dgGDUAU93hEu6brEYlWTBs1w=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/visibility.min.js"
        integrity="sha512-+/TIsNTLXgkSjF5V9XBY2d0y2d6PVf/Ba1tPmJwW22ijmV+bpT4SDRXu5mqiaak94H4K/bNHhDeZtIRoSzURVw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/progress.min.css"
        integrity="sha512-mhYcZwrvfg7Iw3+ledVSiFSRfCm7biyHoRcRTwPY/xme/VFsRVcbo9eWCGLiK4Vz7nq3Wl/0fSakUgtcSjzlzQ=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.7/components/progress.min.js"
        integrity="sha512-2Prcj+U1bItvCrRjp8gOi5djn9YcWemeYx2HYm+hmaagl2fzxfsbCdLSrs4Er1XCCetiEtVe1iUcZFR4f9TOYA=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/contactos.css') }}">
@endsection

@section('content')
    <div class="container">
        <div id="rowcontactos" class="row">
            <div class="col-md-3">
                <h3>Contacte-nos:</h3>
                <h5>Telefone:</h5>
                <p><i class="fa fa-phone"></i>&nbsp;&nbsp;(+351) 244 830 010</p>
                <h5>Telemóvel:</h5>
                <p><i class="fa fa-phone">&nbsp;&nbsp;</i>967 830 010</p>
                <h5>Email:</h5>
                <p>
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;wineculture@gmail.com
                </p>
                <h6>Segue-nos:</h6>
                <div class="icon">
                    <a class="icon" href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                    <a class="icon" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    <a class="icon" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            <form method="POST" role="form" id="form-registo" class="col-md-8 mt-4 cenas"
                action="{{ route('contactos_frontend_store') }}">
                @csrf
                <div>
                    <div class="form-group campo">
                        <input type="text" name="name"
                            class="form-control @error('name') border-bottom border-danger @enderror"
                            value="{{ old('name') }}" id="campoNome" placeholder="&#xf007;&nbsp; Nome" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group campo">
                        <input type="text" name="email"
                            class="form-control @error('email') border-bottom border-danger @enderror"
                            value="{{ old('email') }}" id="campoEmail" placeholder="&#xf1fa; Email" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group campo">
                        <input type="text" name="assunto"
                            class="form-control @error('assunto') border-bottom border-danger @enderror"
                            value="{{ old('assunto') }}" id="campoAssunto" placeholder="&#xf02d; Assunto" />
                        @error('assunto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mequie">
                        <textarea type="text"
                            class="form-control bruv @error('mensagem') border-bottom border-danger @enderror"
                            name="mensagem" rows="5" id="campoMensagem"
                            placeholder="&#xf0e0; Mensagem">{{ Request::old('mensagem') }}</textarea>
                        @error('mensagem')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button class="form-btn dx button" type="submit">Submeter</button>
                        @if (!empty(session('success')))
                            <script>
                                $('body')
                                    .toast({
                                        title: 'Obrigado por submeter a sua dúvida',
                                        message: 'Um administrador irá responder em breve',
                                        showProgress: 'bottom',
                                        displayTime: '4000',
                                        class: 'success',
                                        classProgress: 'red'
                                    });

                            </script>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>



@section('javascript')
    <script src="{{ URL::asset('assets/js/paginas/frontend/contactos.js') }}"></script>


@endsection
@endsection
