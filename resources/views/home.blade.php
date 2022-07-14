@extends('layout.app')

@section('content')
    {{-- banner top --}}
    <x-banner>
        @slot('logo')
            {{ asset('assets/images/logo.webp') }}
        @endslot
    </x-banner>

    {{-- about --}}
    <section class="about" id="about">
        <h3 class="title">Sobre</h3>
        <div class="text">{{$about}}</div>
    </section>
    {{-- end about --}}

    {{-- services --}}
    <section class="service" id="service" style="background-image: url({{'assets/images/service.jpg'}});">
        <h3 class="title">Serviços</h3>

        <div class="list-services">
            @foreach ($service as $item)
                <x-services>
                    @slot('title')
                        {{$item['title']}}
                    @endslot
                    @slot('image')
                        {{$item['image']}}
                    @endslot
                    @slot('description')
                        {{$item['description']}}
                    @endslot
                </x-services>
            @endforeach
        </div>
    </section>
    {{-- end services --}}

    {{-- text efect - social media --}}
    <section class="text-efect">
        <h3 class="title">A Tecnologia é o Futuro!</h3>
        <p class="text">#Vem ser <a href="#" class="link">LT Developer</a></p>

        <div class="social">
            <a href="" class="link" target="_blank">
                <i class="fa-brands fa-facebook-square" title="Facebook"></i>
            </a>
            <a href="" class="link" target="_blank">
                <i class="fa-brands fa-instagram" title="Instagram"></i>
            </a>
            <a href="" class="link" target="_blank">
                <i class="fa-brands fa-linkedin" title="Linkedin"></i>
            </a>
            <a href="tel:47992800841" class="link">
                <i class="fa-solid fa-phone" title="Phone"></i>
            </a>
            <a href="" class="link" target="_blank">
                <i class="fa-solid fa-map-location" title="Location"></i>
            </a>
        </div>
    </section>
    {{-- end text efect --}}

    {{-- custmomers --}}
    <section id="customers" style="background-image: url({{'assets/images/banner.jpg'}});">
        <div class="customers-list">
            <h3 class="title">Clientes</h3>
            {{-- slick --}}
            <div class="carousel">
                @foreach ($customers as $item)
                    <x-customers>
                        @slot('title')
                            {{$item['title']}}
                        @endslot
                        @slot('image')
                            {{$item['image']}}
                        @endslot
                        @slot('link')
                            {{$item['link']}}
                        @endslot
                    </x-customers>
                @endforeach
            </div>

            <script defer>
                $('.carousel').slick({
                    arrows: false,
                    infinite: true,
                    speed: 3000,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 100,
                    centerPadding: '60px',
                    centerMode: true,
                    responsive: [
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1,
                                autoplay: false
                            }
                        }
                    ]
                });
            </script>
        </div>
    </section>
    {{-- end customers --}}

    {{-- projects --}}

    {{-- end projects --}}
@endsection
