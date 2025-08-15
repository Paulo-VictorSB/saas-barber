@extends('layouts.MainLayout')
@section('content')
    <div class="container-fluid text-dark">
        <div class="row">

            <div
                class="col-12 col-md-6 login-img d-flex flex-column justify-content-center align-items-center text-center fw-bold position-relative shadow">
                <h1 class="text-white">Sua Barbearia, no Controle da Navalha Digital</h1>
                <p class="text-white">Gerencie agendamentos, clientes e finanças em um só lugar. Mais tempo para cortar,
                    menos tempo para papelada. Seu negócio, afiado como nunca.</p>

                <a href="#login" class="d-md-none cta-down">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>


            <div class="col-12 col-md-6 bg-white login-form" id="login">
                <div class="w-75">
                    <h2 class="mb-4 text-center">Login</h2>
                    <form method="POST" action="{{ route('loginSubmit') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="text-user">
                                <i class="fa-solid fa-user me-2"></i>Usuário
                            </label>
                            <input type="text" class="form-control" placeholder="Digite seu usuário" name="text-user"
                                id="text-user" value="{{ old('text-user') }}">
                            @error('text-user')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="text-password">
                                <i class="fa-solid fa-lock me-2"></i>Senha
                            </label>
                            <input type="password" class="form-control" placeholder="Digite sua senha" name="text-password"
                                id="text-password" value="{{ old('text-password') }}">
                            @error('text-password')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <small>Não tem uma conta? <a href="" class="text-primary">cadastre-se</a>.</small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fa-solid fa-right-to-bracket me-2"></i>Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
