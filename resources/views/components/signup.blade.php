<div class="container">
    <div class="signup-form">
        <div class="form-box">
            <h1 class="title">Crie sua conta</h1>
            <p>Registre-se para começar a criar conteúdos incríveis</p>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <img src="{{ asset('assets/icons/signup/user.png') }}" alt="" class="input-icon">
                    <input type="text" name="name" placeholder="Seu nome completo" required />
                </div>
                <div class="input-group">
                    <img src="{{ asset('assets/icons/signup/mail.png') }}" alt="" class="input-icon">
                    <input type="email" name="email" placeholder="seu@email.com" required />
                </div>
                <div class="input-group">
                    <img src="{{ asset('assets/icons/signup/password.png') }}" alt="" class="input-icon">
                    <input type="password" name="password" placeholder="Insira a sua senha" required />
                </div>
                <div class="input-group">
                    <img src="{{ asset('assets/icons/signup/password.png') }}" alt="" class="input-icon">
                    <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required />
                </div>
                <button type="submit" class="btn-criar">Criar conta</button>
                <p class="login-link">Já tem uma conta? <a href="#">Entrar</a></p>
            </form>
        </div>
    </div>
    <div class="animation">
        <h2 class="gradient-text">Junte-se a nós</h2>
        <p class="non-gradient-text">Crie conteúdos de alta qualidade para o seu negócio com a ajuda da nossa plataforma
            de IA.</p>
        @include('components.carousel')
    </div>
</div>
