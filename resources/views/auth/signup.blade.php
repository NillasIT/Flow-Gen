@extends('layouts.sign')

@section('title', 'Sign Up')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    @include('components.navbar')

    <div class="container">
        <div class="signin-form">
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

        <div class="animation-in">
            <h2 class="gradient-text">Bem-vindo de volta</h2>
            <p class="non-gradient-text">Entre na sua conta para continuar criando conteúdos incríveis para o seu negócio.
            </p>
            @include('components.carousel')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.carousel-item');
            const dots = document.querySelectorAll('.dot');
            let index = 0;

            setInterval(() => {
                items[index].classList.remove('active');
                dots[index].classList.remove('active');
                index = (index + 1) % items.length;
                items[index].classList.add('active');
                dots[index].classList.add('active');
            }, 4000);
        });
    </script>

@endsection
