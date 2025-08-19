@extends('layouts.MainLayout')

@section('content')
<div class="d-flex bg-black text-white vh-100" id="wrapper">
    <nav id="sidebar" class="bg-dark border-end border-secondary d-flex flex-column" style="width: 250px;">
        <div class="p-4 border-bottom border-secondary">
            <h5 class="mb-0 text-white">
                <i class="fas fa-cut text-secondary me-2"></i>
                Dashboard
            </h5>
        </div>
        <div class="p-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white bg-secondary" href="#">
                        <i class="fas fa-home me-2"></i>Início
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-calendar-alt me-2"></i>Agendamentos
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-users me-2"></i>Clientes
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-briefcase me-2"></i>Serviços
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-chart-line me-2"></i>Relatórios
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-cog me-2"></i>Configurações
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-auto p-3 border-top border-secondary">
            <a href="{{ route('logout') }}" class="nav-link text-danger">
                <i class="fas fa-sign-out-alt me-2"></i>Sair
            </a>
        </div>
    </nav>
    <div class="flex-fill d-flex flex-column">
        <nav class="navbar navbar-dark bg-dark border-bottom border-secondary">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary d-lg-none" type="button" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h4 class="mb-0 ms-3 text-white">Painel Principal</h4>
                <div class="ms-auto">
                    <span class="text-white">
                        <i class="fas fa-user-circle text-secondary me-2"></i>
                        Admin
                    </span>
                </div>
            </div>
        </nav>
        <div class="container-fluid p-4 overflow-auto">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-secondary border-0">
                        <div class="card-body">
                            <h4 class="text-white mb-2">
                                <i class="fas fa-cut me-2"></i>
                                Bem-vindo ao Dashboard!
                            </h4>
                            <p class="text-white-50 mb-0">Gerencie seu negócio de forma simples e moderna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-dark text-white border-secondary">
                        <div class="card-body text-center">
                            <i class="fas fa-calendar-check fa-3x mb-3 text-white-50"></i>
                            <h2 class="fw-bold">24</h2>
                            <p class="mb-0 fw-semibold">Agendamentos Hoje</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-dark text-white border-secondary">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x mb-3 text-white-50"></i>
                            <h2 class="fw-bold">156</h2>
                            <p class="mb-0 fw-semibold">Clientes Ativos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-dark text-white border-secondary">
                        <div class="card-body text-center">
                            <i class="fas fa-dollar-sign fa-3x mb-3 text-white-50"></i>
                            <h2 class="fw-bold">R$ 2.340</h2>
                            <p class="mb-0 fw-semibold">Receita Mensal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-dark text-white border-secondary">
                        <div class="card-body text-center">
                            <i class="fas fa-briefcase fa-3x mb-3 text-white-50"></i>
                            <h2 class="fw-bold">8</h2>
                            <p class="mb-0 fw-semibold">Serviços Ativos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <h5 class="text-secondary">Ações Rápidas</h5>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card bg-dark border-secondary h-100">
                        <div class="card-body text-center">
                            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-plus fa-2x"></i>
                            </div>
                            <h5 class="text-white mb-3">Novo Agendamento</h5>
                            <p class="text-white-50 mb-4">Criar um novo agendamento para cliente</p>
                            <a href="#" class="btn btn-secondary text-white fw-semibold">Criar Agendamento</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-dark border-secondary h-100">
                        <div class="card-body text-center">
                            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-user-plus fa-2x"></i>
                            </div>
                            <h5 class="text-white mb-3">Novo Cliente</h5>
                            <p class="text-white-50 mb-4">Cadastrar novo cliente no sistema</p>
                            <a href="#" class="btn btn-secondary text-white fw-semibold">Adicionar Cliente</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-dark border-secondary h-100">
                        <div class="card-body text-center">
                            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h5 class="text-white mb-3">Ver Relatórios</h5>
                            <p class="text-white-50 mb-4">Análise detalhada do seu negócio</p>
                            <a href="#" class="btn btn-secondary text-white fw-semibold">Ver Relatórios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');

        if (toggle && sidebar) {
            // Mobile: esconde a sidebar por padrão e usa position fixed
            const handleMobile = () => {
                const isMobile = window.innerWidth <= 991.98;
                if (isMobile) {
                    sidebar.classList.add('position-fixed', 'vh-100', 'start-0');
                    sidebar.style.transform = 'translateX(-100%)';
                } else {
                    sidebar.classList.remove('position-fixed', 'vh-100', 'start-0');
                    sidebar.style.transform = 'translateX(0)';
                }
            };
            handleMobile();
            window.addEventListener('resize', handleMobile);

            // Toggle sidebar
            toggle.addEventListener('click', () => {
                const isHidden = sidebar.style.transform === 'translateX(-100%)';
                sidebar.style.transform = isHidden ? 'translateX(0)' : 'translateX(-100%)';
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 991.98 && !sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    sidebar.style.transform = 'translateX(-100%)';
                }
            });
        }
    });
</script>
@endsection
