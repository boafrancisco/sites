<nav>
    <div class="nav-wrappe container">
        {{-- Menu Hamburguer --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="{{ route('home') }}" class="brand-logo light">GestaOnline</a>

    {{-- Menu para Desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>

        </ul>

        {{-- Menu Mobile --}}

        <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
        <div class="background">
        <img src="{{ asset('images/sidenav-image.jpg') }}" alt="[imagem]" title="GestaOnline">
        </div>
       {{--   <a href="#user"><img class="circle" src="images/yuna.jpg"></a> --}}
        <a href="#name"><span class="white-text name">GestaOnline</span></a>
        <a href="#email"><span class="white-text email">contacto@gestaonline.co.mz</span></a>
        </div></li>
        {{-- <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li> --}}
        <li><a href="#!">Menu</a></li>
        <li><div class="divider"></div></li>
        <li><a href="{{ route('home') }}"><i class="material-icons blue-text text-lighten-2">home</i> Home</a></li>
        <li><a href="{{ route('servicos') }}"><i class="material-icons blue-text text-lighten-2">engineering</i>Serviços</a></li>
        <li><a href="{{ route('galeria') }}"><i class="material-icons blue-text text-lighten-2">photo_camera</i>Galeria</a></li>
        <li><a href="{{ route('contacto') }}"><i class="material-icons blue-text text-lighten-2">contact_phone</i>Contacto</a></li>

    </ul>

    </div>
</nav>
