@extends('layouts.app')

@section('title', 'Welcome Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/footer.css') }}">
@endsection

@section('content')
    {{-- Navbar --}}
    <nav class="navbar">
        <div class="container-navbar">
            <a href="{{ url('/') }}" class="navbar-brand">FlowGen</a>

            <div class="navbar-menu">
                <button class="btn-primary">Entrar</button>
                <button class="btn-secondary">Registrar</button>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="hero-title">
            <span class="gradient-text">Create Content</span>
            <br />
            <span class="non-gradient-text">That Connects</span>
        </h1>

        <p class="hero-description">
            Transform your business communication with AI-powered content generation.
            Perfect for small and medium businesses looking to make an impact.
        </p>

        <div class="buttons">
            <button class="btn-secondary">Get Started</button>
            <button class="btn-primary">Learn More</button>
        </div>

        <div class="stats">
            <div class="stats-column">
                <h2 class="stats-title">100+</h2>
                <p class="stats-description">Content types</p>
            </div>

            <div class="stats-column">
                <h2 class="stats-title">2K+</h2>
                <p class="stats-description">Post Created</p>
            </div>

            <div class="stats-column">
                <h2 class="stats-title">5+</h2>
                <p class="stats-description">AI Models</p>
            </div>

            <div class="stats-column">
                <h2 class="stats-title">24/7</h2>
                <p class="stats-description">Availability</p>
            </div>
        </div>

        <div class="cta">
            <h2 class="cta-title">Comece a Criar <span class="gradient-text">Conteúdo de Qualidade</span> Hoje</h2>

            <p class="cta-description">Transforme a maneira como sua empresa se comunica com seu público. Registre-se agora
                e comece a gerar conteúdos personalizados em minutos.</p>
        </div>

        <div class="buttons">
            <button class="btn-secondary">Criar Conta Gratuita</button>
            <button class="btn-primary">Entrar</button>
        </div>

        <div class="features">
            <div class="features-content">
                <h2 class="features-title">How FlowGen Works</h2>
                <p class="features-description">Our platform combines creativity, strategy, and AI to deliver personalized
                    content that helps your business grow.</p>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('assets/icons/settings.png') }}" alt="">
                </div>
                <p class="cards-title">Smart Generation</p>
                <p class="cards-description">Fill in a simple form with your business details, audience, and content goals.
                </p>
            </div>

            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('assets/icons/copywriting.png') }}" alt="">
                </div>
                <p class="cards-title">AI Copywriting</p>
                <p class="cards-description">Our AI analyzes your input and creates optimized copy tailored to your brand's
                    voice..</p>
            </div>

            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('assets/icons/image.png') }}" alt="">
                </div>
                <p class="cards-title">Carousel Posts</p>
                <p class="cards-description">Create multi-slide content that educates and engages your audience effectively.
                </p>
            </div>

            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('assets/icons/search.png') }}" alt="">
                </div>
                <p class="cards-title">Content Library</p>
                <p class="cards-description">Access your content history, save favorites, and request variations with a
                    click.</p>
            </div>
        </div>

        <div class="divider"></div>

        <div class="footer">
            <div class="footer-flow">
                <h2 class="footer-flow-title">FlowGen</h2>
                <p class="footer-flow-description">Transforming how small and medium businesses communicate with their
                    audience through AI-powered content creation.</p>
            </div>

            <div class="footer-links">
                <h2 class="footer-links-title">Platform</h2>
                <a href="#" class="footer-link">Dashboard</a>
                <a href="#" class="footer-link">Content Creation</a>
                <a href="#" class="footer-link">History</a>
            </div>

            <div class="footer-links">
                <h2 class="footer-links-title">Company</h2>
                <a href="#" class="footer-link">About</a>
                <a href="#" class="footer-link">Contact</a>
                <a href="#" class="footer-link">Privacy Policy</a>
            </div>
        </div>
        
        <div class="divider"></div>

        <div class="copyright">
            <p class="copyright-text">© 2025 FlowGen. All rights reserved.</p>
        </div>
    </div>
@endsection
