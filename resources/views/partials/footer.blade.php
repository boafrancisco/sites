<div class="page-footer"> <!-- É só adicionar o blue e muda para cor AZUL-->
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <p class="flow-text">Lorem ipsum dolor sit.</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores aspernatur sunt nobis, facere odio
                    sint illum iure voluptatem odit mollitia!
                </p>
            </div>
            <div class="col12 m6 l4 push-l2">
                <ul>
                    <li><a href="{{ route('home') }}" class="white-text">Home</a></li>
                    <li><a href="{{ route('servicos') }}" class="white-text">Serviços</a></li>
                    <li><a href="{{ route('galeria') }}" class="white-text">Galeria</a></li>
                    <li><a href="{{ route('contacto') }}" class="white-text">Contacto</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            <p>STICON LDA {{ date('Y') }} - &copy; Todos os direitos reservados!</p>
        </div>
    </div>
</div>
