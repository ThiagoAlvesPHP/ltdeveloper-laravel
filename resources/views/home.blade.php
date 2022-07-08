@extends('layout.app')

@section('content')
    {{-- banner top --}}
    <x-banner>
        @slot('logo')
            {{ asset('assets/images/logo.webp') }}
        @endslot
        @slot('banner')
            {{ asset('assets/images/banner.jpg') }}
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

    {{-- text efect --}}
    <section class="text-efect">
        <h3 class="title">A Tecnologia é o Futuro!</h3>
        <p class="text">#Vem ser <a href="#" class="link">LT Developer</a></p>
    </section>
    {{-- end text efect --}}

    {{-- custmomers --}}
    <section class="customers-list">
        <h3 class="title">Clientes</h3>
    </section>
    {{-- end customers --}}

@endsection
