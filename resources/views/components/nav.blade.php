<nav class="navbar">
    <div class="filter"></div>
    <div class="container desktop">
        <div class="nav-link logo">
            <a href="{{ route('home') }}" class="link">
                {{-- Home --}}
                <img class="img-logo" width="140" height="100%" src="{{ asset('assets/images/logo.webp') }}" alt="Logo da empresa">
            </a>
            <div class="text">Bem-vindo :)</div>
        </div>

        <div class="nav-link"><a href="#about" class="link">Sobre</a></div>
        <div class="nav-link"><a href="#service" class="link">Serviços</a></div>
        <div class="nav-link"><a href="#customers" class="link">Clientes</a></div>
        <div class="nav-link"><a href="#projects" class="link">Projetos</a></div>
        <div class="nav-link"><a href="#contact" class="link">Contato</a></div>

        <div class="fas fa-ellipsis-v mob-bar" onclick="showMenu(this)">|||</div>
    </div>

    <div class="mobile">
        <i class="close" onclick="closeMenu(this)">X</i>
        <a href="#about" class="nav-link-mobile">Sobre</a>
        <a href="#service" class="nav-link-mobile">Serviços</a>
        <a href="#customers" class="nav-link-mobile">Clientes</a>
        <a href="#projects" class="nav-link-mobile">Projetos</a>
        <a href="#contact" class="nav-link-mobile">Contato</a>
    </div>
</nav>
