@extends('site.layout')
@section('title', 'Página Serviços')
@section('content')

    <div class="row container">
        <div class="col 12 l6 push-l3 center-align">
            <h1 class="flow-text  blue-text">Nossos Serviços</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quisquam laboriosam nisi error facere sequi
                quos dolorem mollitia velit autem.</p>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 l6">

            <div class="row">

                <div class="col s12 l6 center-align grey lighten-4 hoverable">
                    <i class="medium fa-solid fa-truck blue-text text-lighten-2"></i>
                    <p class="flow-text">Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, molestiae.</p>
                </div>

                <div class="col s12 l6 center-align hoverable">
                    <i class="medium fa-solid fa-truck-field blue-text text-lighten-2"></i>
                    <p class="flow-text">Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, molestiae.</p>
                </div>

                <div class="col s12 l6 center-align hoverable">
                    <i class="medium fa-solid fa-truck-pickup blue-text text-lighten-2"></i>
                    <p class="flow-text">Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, molestiae.</p>
                </div>

                <div class="col s12 l6 center-align grey lighten-4 hoverable">
                    <i class="medium fa-solid fa-truck-moving blue-text text-lighten-2"></i>
                    <p class="flow-text">Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, molestiae.</p>
                </div>


            </div> {{--  final da linha --}}
        </div>

        <div class="col s12 l6">
            <img src="{{ asset('images/team.jpg') }}" alt="[imagem]" class="responsive-img materialboxed"
                title="GestaOnline">
        </div>

    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 center-align">
            <h1 class="flow-text blue-text">Planos</h1>
        </div>

        <p>&nbsp;</p>

        {{--  Card 1 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="medium fa-solid fa-sack-dollar"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Básico 500.00 MT</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At aliquid pariatur distinctio cupiditate
                        laudantium voluptas.</p>
                </div>
                <div class="card-action">
                    <a href="#!">saiba mais</a>
                </div>

            </div>
        </div> {{-- Fim Card 1 --}}

        {{--  Card 2 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="medium fa-solid fa-hand-holding-dollar purple-text text-lighten-2"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Prata 1,000.00 MT</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At aliquid pariatur distinctio cupiditate
                        laudantium voluptas.</p>
                </div>
                <div class="card-action">
                    <a href="#!">saiba mais</a>
                </div>

            </div>
        </div> {{-- Fim Card 2 --}}

        {{--  Card 3 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="medium fa-brands fa-btc green-text text-lighten-2"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Diamante 3,000.00 MT</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At aliquid pariatur distinctio cupiditate
                        laudantium voluptas.</p>
                </div>
                <div class="card-action">
                    <a href="#!">saiba mais</a>
                </div>

            </div>
        </div> {{-- Fim Card 3 --}}

    </div>


@endsection
