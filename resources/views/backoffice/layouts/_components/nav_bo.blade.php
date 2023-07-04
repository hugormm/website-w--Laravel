<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/inicio')) ? "active" : "" }}" aria-current="page" href="{{ route('backoffice.inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/caroussel')) ? "active" : "" }}" href="{{ route('backoffice.caroussel') }}">Caroussel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/home')) ? "active" : "" }}" href="{{ route('backoffice.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/autor')) ? "active" : "" }}" href="{{ route('backoffice.autor') }}">Autor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/livros')) ? "active" : "" }}" href="{{ route('backoffice.livros') }}">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/destaques')) ? "active" : "" }}" href="{{ route('backoffice.destaques') }}">Destaques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/imprensa')) ? "active" : "" }}" href="{{ route('backoffice.imprensa') }}">Imprensa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/contactos')) ? "active" : "" }}" href="{{ route('backoffice.contactos') }}">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/redes')) ? "active" : "" }}" href="{{ route('backoffice.redes') }}">Redes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/configuracoes')) ? "active" : "" }}" href="{{ route('backoffice.configuracoes') }}">Configurações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('/backoffice/logoff')) ? "active" : "" }}" href="{{ route('backoffice.logoff') }}">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>