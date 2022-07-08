<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LT Developer</title>

    <link rel="stylesheet/less" type="text/css" href="{{ asset('assets/css/styles.less') }}" />
    <script defer src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.js') }}"></script>


    {{-- slick --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/slick-1.8.1/slick/slick-theme.css') }}">
    <script src="{{ asset('assets/libs/slick-1.8.1/slick/slick.js') }}"></script>
    {{-- end slick --}}

</head>

<body>
    <div class="loading">
        <div class="loader"></div>
    </div>
    <x-nav></x-nav>

    <div class="main">
        @yield('content')

        <x-footer></x-footer>
    </div>

    {{-- whatsapp --}}
    <div class="zap-a">
        <img class="img" src="{{asset('assets/images/zap-a.png')}}" alt="">
    </div>
    <div class="zap-a-content">
        <div class="title">
            <div class="row">
                <div class="col">
                    <img class="img" src="{{asset('assets/images/zap-a.png')}}" alt="">
                    <span>WhatsApp</span>
                </div>
                <div class="col">
                    <div class="zap-close">
                        X
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="whatsappme__message">
                Possui alguma dúvida ou está interessado em nossos serviços? Fale conosco agora!
            </div>
            <a href="https://api.whatsapp.com/send?phone=5573999412514&text=Estou interessados em saber mais sobre seus serviços" target="_blank" class="btn-whatsapp zap-close">
                Enviar WhatsApp
            </a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
</body>
</html>
