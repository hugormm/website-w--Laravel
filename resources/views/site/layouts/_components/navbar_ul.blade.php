<ul class="navbar-nav d-flex gap-3">
    <li class="nav-item">
        <a class="nav-link py-0 {{ (Request::is('/')) ? "active" : "" }}" aria-current="page" href="{{ route('site.home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a onclick="scroll('#main')" class="nav-link py-0 {{ (Request::is('autor')) ? "active" : "" }}" href="{{ route('site.autor') }}">Autor</a>
    </li>
    <li class="nav-item dropdown">
        <a id="book_menu" class="nav-link py-0 {{ (Request::is('livros')) ? "active" : "" }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
        </a>
        <!--
        <ul class="dropdown-menu">
            foreach($livros as $l): ?>
                <li><a class="dropdown-item" href=" $url_base . "livros/" . $l["id"]; ?>"> $l["titulo"] ?></a></li>
            endforeach; ?>
        </ul>
        -->
    </li>
    <li class="nav-item">
        <a class="nav-link py-0 {{ (Request::is('imprensa')) ? "active" : "" }}" href="{{ route('site.imprensa') }}">Imprensa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link py-0 {{ (Request::is('contactos')) ? "active" : "" }}" href="{{ route('site.contactos') }}">Contactos</a>
    </li>
</ul>