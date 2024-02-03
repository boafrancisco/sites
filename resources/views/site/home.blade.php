@extends('site.layout')
@section('title', 'Página Home')
@section('content')

    <div class="row container">

        <div class="col s12 center-align">
            <p class="flow-text">Lorem ipsum dolor sit amet.</p>

        </div>

        <div class="col s12 divider"></div>
        <p>&nbsp;</p>

        {{-- card 1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="class card-image">
                    <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[imagem]" title="GestaOnline"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsum!
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="class card-image">
                    <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[imagem]" title="GestaOnline"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsum!
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="col s12 l4">
            <div class="card">
                <div class="class card-image">
                    <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[imagem]" title="GestaOnline"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsum!
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">

        <section class="col s12">
            <h1 class="flow-text light">Lorem ipsum dolor sit.</h1>

            <p class="flow-text light justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum vel eaque repudiandae
                doloribus deserunt.
                Placeat ad rem tenetur est explicabo, a quaerat odit omnis pariatur animi ab corrupti excepturi debitis
                deleniti, adipisci cum velit unde, laudantium earum vitae nulla consequuntur distinctio tempore! Itaque
                facilis totam pariatur culpa enim doloremque. Commodi?
            </p>

            <p class="flow-text justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sint earum cumque perferendis officiis eveniet
                recusandae hic dignissimos non officia. Blanditiis dolor voluptate deleniti facere distinctio similique enim
                nam nesciunt.
            </p>

            <p>
                <a href="#" class="waves-effect waves-light btn btn-small blue">saiba mais</a>
                <a href="#" class="waves-effect waves-light btn btn-small purple">cadastra-se</a>
            </p>
        </section>

    </div>


        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('images/parallax.jpg')}}" alt="[imagem]" title="GestaOnline" class="responsive-img">
            </div>
        </div>

            <p>&nbsp;</p>
            <div class="row container">

                <div class="col s12 m6 l4 center-align">
                    <img src="{{ asset('images/teams/team-1.jpg') }}" alt="[imagem]" title="GestaOnline" class="responsive-img circle">
                    <p class="flow-text">Marcos</p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, aperiam.
                    </p>
                    <p>
                        <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
                        <a href="#!"><i class="small fa-brands fa-instagram"></i></a>

                    </p>
                </div>

                <div class="col s12 m6 l4 center-align">
                    <img src="{{ asset('images/teams/team-2.jpg') }}" alt="[imagem]" title="GestaOnline" class="responsive-img circle">
                    <p class="flow-text">Carlos</p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, aperiam.
                    </p>
                    <p>
                        <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
                        <a href="#!"><i class="small fa-brands fa-instagram"></i></a>
                    </p>
                </div>

                <div class="col s12 m6 l4 center-align">
                    <img src="{{ asset('images/teams/team-3.jpg') }}" alt="[imagem]" title="GestaOnline" class="responsive-img circle">
                    <p class="flow-text">António</p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, aperiam.
                    </p>
                    <p>
                        <a href="#!"><i class="small fa-brands fa-facebook"></i></a>
                        <a href="#!"><i class="small fa-brands fa-instagram"></i></a>
                    </p>
                </div>
            </div>


@endsection
