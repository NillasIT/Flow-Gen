<nav class="navbar">
    <div class="container-navbar">
        <a href="{{ url('/') }}" class="navbar-brand">FlowGen</a>

        <div class="navbar-menu">
            @if (Request::is('/register'))
                <a href="{{ route('login.show') }}" class="btn-primary">Entrar</a>
            @else
                <a href="{{ route('login.show') }}" class="btn-primary">Entrar</a>
                <a href="{{ route('register.show') }}" class="btn-secondary">Registrar</a>
            @endif
        </div>
    </div>
</nav>
