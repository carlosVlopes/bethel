<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bethel Consultoria — Identificamos o problema. Entregamos a solução.">
    <title>Bethel Consultoria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('images/bethel-logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#F5F3EE] font-sans text-[#1A2B3C]">

    {{-- 1. NAVBAR --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#1A2B3C] py-5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">

            <div class="flex items-center gap-2">
                <img src="{{ asset('images/bethel-logo.png') }}" alt="Bethel" class="h-10 w-auto mix-blend-screen">
                <div class="flex flex-col leading-none">
                    <span class="text-white font-['Plus_Jakarta_Sans'] font-bold tracking-[0.12em] text-[17px] uppercase">BETHEL</span>
                    <span class="text-[#F5A623] font-['Plus_Jakarta_Sans'] font-medium tracking-[0.18em] text-[9px] uppercase">Consultoria</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8">
                <a href="#sobre" class="text-white/75 hover:text-[#F5A623] transition-colors text-sm font-medium tracking-wide">Sobre</a>
                <a href="#servicos" class="text-white/75 hover:text-[#F5A623] transition-colors text-sm font-medium tracking-wide">Serviços</a>
                <a href="#diferencial" class="text-white/75 hover:text-[#F5A623] transition-colors text-sm font-medium tracking-wide">Por que Bethel</a>
                <a href="#contato" class="text-white/75 hover:text-[#F5A623] transition-colors text-sm font-medium tracking-wide">Contato</a>
            </div>

            <div class="hidden md:block">
                <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
                   class="bg-[#F5A623] hover:bg-[#E08C0C] text-[#1A2B3C] font-bold py-2 px-5 rounded-full transition-all duration-200 text-xs tracking-wide transform hover:-translate-y-0.5 shadow-[0_2px_12px_rgba(245,166,35,0.35)] inline-block">
                    Fale com um consultor
                </a>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-white" aria-label="Menu">
                <span id="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/>
                    </svg>
                </span>
                <span id="close-icon" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                    </svg>
                </span>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-[#0F1D2B] border-t border-white/10 p-6 flex flex-col gap-4 shadow-xl">
            <a href="#sobre" class="mobile-nav-link text-white/90 hover:text-[#F5A623] transition-colors font-medium text-lg">Sobre</a>
            <a href="#servicos" class="mobile-nav-link text-white/90 hover:text-[#F5A623] transition-colors font-medium text-lg">Serviços</a>
            <a href="#diferencial" class="mobile-nav-link text-white/90 hover:text-[#F5A623] transition-colors font-medium text-lg">Por que Bethel</a>
            <a href="#contato" class="mobile-nav-link text-white/90 hover:text-[#F5A623] transition-colors font-medium text-lg">Contato</a>
            <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
               class="mobile-nav-link bg-[#F5A623] hover:bg-[#E08C0C] text-[#1A2B3C] font-bold py-2.5 px-6 rounded-full mt-4 text-sm tracking-wide text-center">
                Fale com um consultor
            </a>
        </div>
    </nav>

    {{-- 2. HERO --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 bg-[#1A2B3C] overflow-x-clip">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                <div class="relative z-10">
                    <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-6">
                        Consultoria &amp; Gestão Empresarial
                    </p>
                    <h1 class="font-['Plus_Jakarta_Sans'] font-bold text-4xl sm:text-5xl lg:text-[52px] text-white leading-[1.15] mb-6">
                        Identificamos o problema.<br>Entregamos a solução.
                    </h1>
                    <p class="text-white/80 text-lg leading-[1.7] mb-10 max-w-xl">
                        A Bethel Consultoria analisa o seu negócio com profundidade, identifica o que está travando seus resultados e entrega um plano de ação concreto — sem diagnósticos genéricos, sem soluções de prateleira.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
                           class="bg-[#F5A623] hover:bg-[#E08C0C] text-[#1A2B3C] font-bold py-3 px-7 rounded-full transition-all duration-200 text-sm text-center transform hover:-translate-y-0.5 shadow-[0_4px_18px_rgba(245,166,35,0.4)]">
                            Agendar diagnóstico gratuito →
                        </a>
                        <a href="#servicos"
                           class="bg-transparent border-2 border-[#F5A623] text-[#F5A623] hover:bg-[#F5A623]/10 font-semibold py-3 px-7 rounded-full transition-all duration-200 text-sm text-center">
                            Conheça nossos serviços
                        </a>
                    </div>

                    <div class="text-white/50 text-sm font-medium flex flex-wrap gap-2 items-center">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg> Londrina, PR</span>
                        <span>&middot;</span>
                        <span>+10 anos de experiência</span>
                        <span>&middot;</span>
                        <span>Empresas de todos os portes</span>
                    </div>
                </div>

                {{-- Image + Floating Cards --}}
                <div class="relative h-[460px] lg:h-[540px]">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1A2B3C] via-[#1A2B3C]/30 to-transparent z-10 pointer-events-none"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1A2B3C]/60 via-transparent to-transparent z-10 pointer-events-none"></div>
                        <img src="{{ asset('images/bethel-hero-office.png') }}" alt="Escritório Bethel Consultoria"
                             class="w-full h-full object-cover object-center scale-105">
                    </div>

                    {{-- Floating Card 1 — Clientes Atendidos --}}
                    <div class="absolute top-10 left-2 sm:-left-10 z-30">
                        <div class="rounded-xl px-5 py-4 shadow-2xl border border-white/15"
                             style="background: rgba(15,29,43,0.85); backdrop-filter: blur(16px); animation: cardSlideLeft 0.7s 0.1s cubic-bezier(0.22,1,0.36,1) both, floatY1 3.8s 0.8s ease-in-out infinite">
                            <p class="text-[#F5A623] text-[10px] font-bold uppercase tracking-widest mb-1">Clientes Atendidos</p>
                            <div class="flex items-end gap-2">
                                <span class="text-white font-['Plus_Jakarta_Sans'] font-bold text-[30px] leading-none">150+</span>
                                <span class="text-emerald-400 text-[11px] font-bold mb-0.5 flex items-center gap-0.5">
                                    <svg width="9" height="9" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 1L9 5H6V9H4V5H1L5 1Z" fill="currentColor"/>
                                    </svg>
                                    +24% este ano
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Card 2 — Satisfação --}}
                    <div class="absolute top-1/2 right-2 sm:-right-8 z-30" style="transform: translateY(-50%)">
                        <div class="rounded-xl px-5 py-4 shadow-2xl border border-white/15 w-[178px]"
                             style="background: rgba(15,29,43,0.85); backdrop-filter: blur(16px); animation: cardSlideRight 0.7s 0.35s cubic-bezier(0.22,1,0.36,1) both, floatY2 4.2s 1.2s ease-in-out infinite">
                            <p class="text-[#F5A623] text-[10px] font-bold uppercase tracking-widest mb-2">Satisfação</p>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-white font-['Plus_Jakarta_Sans'] font-bold text-[28px] leading-none">98%</span>
                                <span class="text-[#F5A623] text-lg">★</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-1.5 mb-1.5">
                                <div class="bg-[#F5A623] h-1.5 rounded-full"
                                     style="width: 0%; animation: fillBar 1.2s 1.2s ease-out forwards"></div>
                            </div>
                            <p class="text-white/50 text-[10px]">de aprovação dos clientes</p>
                        </div>
                    </div>

                    {{-- Floating Card 3 — Crescimento --}}
                    <div class="absolute -bottom-7 left-1/2 z-30" style="transform: translateX(-50%)">
                        <div class="rounded-xl px-5 py-3.5 shadow-2xl border border-[#F5A623]/35 flex items-center gap-4 whitespace-nowrap"
                             style="background: rgba(15,29,43,0.88); backdrop-filter: blur(16px); animation: cardSlideUp 0.7s 0.55s cubic-bezier(0.22,1,0.36,1) both, floatY3 3.5s 1.6s ease-in-out infinite">
                            <div class="w-8 h-8 rounded-full bg-[#F5A623]/20 border border-[#F5A623]/50 flex items-center justify-center shrink-0">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Crescimento médio de <span class="text-[#F5A623] font-bold">32%</span></p>
                                <p class="text-white/50 text-[10px]">nos primeiros 6 meses de consultoria</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3. POR QUE BETHEL? --}}
    <section id="diferencial" class="py-24 bg-[#F5F3EE]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-4">Nosso Diferencial</p>
            <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[46px] text-[#1A2B3C] mb-6">
                Por que escolher a Bethel?
            </h2>
            <div class="w-12 h-[3px] bg-[#F5A623] mx-auto mb-16"></div>

            <div class="swiper swiper-diferencial">
                <div class="swiper-wrapper text-left">
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="m16 16-1.9-1.9"/>
                                </svg>
                            </div>
                            <h3 class="text-[22px] font-semibold text-[#1A2B3C] mb-4">Diagnóstico Real</h3>
                            <p class="text-[#4A5568] leading-relaxed">Mergulhamos no seu negócio para entender os bastidores — processos, finanças, pessoas e estratégia. Nada passa despercebido.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>
                                </svg>
                            </div>
                            <h3 class="text-[22px] font-semibold text-[#1A2B3C] mb-4">Soluções Personalizadas</h3>
                            <p class="text-[#4A5568] leading-relaxed">Nenhum negócio é igual ao outro. Desenvolvemos estratégias sob medida para a sua realidade, porte e setor.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
                                </svg>
                            </div>
                            <h3 class="text-[22px] font-semibold text-[#1A2B3C] mb-4">Resultados Mensuráveis</h3>
                            <p class="text-[#4A5568] leading-relaxed">Acompanhamos a implementação e medimos os resultados. Nosso compromisso é com a transformação real, não com relatórios bonitos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-diferencial mt-8 text-center md:hidden"></div>
        </div>
    </section>

    {{-- 4. NOSSOS SERVIÇOS --}}
    <section id="servicos" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-4">O que fazemos</p>
            <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[46px] text-[#1A2B3C] mb-6">
                Consultoria que cobre toda a sua operação
            </h2>
            <div class="w-12 h-[3px] bg-[#F5A623] mx-auto mb-16"></div>

            <div class="swiper swiper-servicos">
                <div class="swiper-wrapper text-left">
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" x2="18" y1="20" y2="10"/><line x1="12" x2="12" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="14"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Gestão Financeira</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Controle de fluxo de caixa, redução de custos, planejamento financeiro e análise de rentabilidade por produto ou serviço.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Gestão de Pessoas</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Estruturação de equipes, definição de cargos e salários, cultura organizacional e processos de contratação.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="6" x2="6" y1="3" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Processos e Operações</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Mapeamento, redesenho e padronização de processos para eliminar retrabalho e ganhar eficiência operacional.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Planejamento Estratégico</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Definição de metas, OKRs, análise de mercado e construção de um plano de crescimento sustentável.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Gestão Comercial</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Estruturação do funil de vendas, treinamento de equipe comercial e estratégias para aumento de receita.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white border border-[#E2E0D8] rounded-lg p-8 shadow-[0_2px_12px_rgba(26,43,60,0.06)] hover:shadow-[0_8px_32px_rgba(26,43,60,0.12)] hover:border-[#F5A623] transition-all duration-300 group">
                            <div class="w-[52px] h-[52px] rounded-lg bg-[#F5A623]/10 border border-[#F5A623]/30 flex items-center justify-center text-[#F5A623] mb-6 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                                </svg>
                            </div>
                            <h3 class="text-[20px] font-semibold text-[#1A2B3C] mb-3">Reestruturação Empresarial</h3>
                            <p class="text-[#4A5568] leading-relaxed text-[15px]">Para negócios em crise ou momento de transição: diagnóstico completo e plano de reestruturação para retomar o crescimento.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-servicos mt-8 text-center md:hidden"></div>
        </div>
    </section>

    {{-- 5. PROCESSO --}}
    <section class="py-24 bg-[#1A2B3C] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-4">Como trabalhamos</p>
            <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[46px] text-white mb-6">
                Da análise ao resultado em 4 etapas
            </h2>
            <div class="w-12 h-[3px] bg-[#F5A623] mb-16"></div>

            <div class="relative">
                <div class="hidden lg:block absolute top-[28px] left-[28px] right-[28px] h-[2px] bg-[#F5A623]/30 z-0"></div>
                <div class="swiper swiper-processo relative z-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="relative bg-[#243548] lg:bg-transparent lg:p-0 p-6 rounded-lg border lg:border-none border-[#F5A623]/20 flex flex-col">
                                <div class="w-14 h-14 rounded-full bg-[#F5A623] text-[#1A2B3C] flex items-center justify-center font-bold text-xl mb-6 shadow-[0_0_15px_rgba(245,166,35,0.3)] mx-auto lg:mx-0 shrink-0">01</div>
                                <h3 class="text-[22px] font-semibold text-white mb-3 text-center lg:text-left">Diagnóstico</h3>
                                <p class="text-white/70 leading-relaxed text-center lg:text-left">Análise completa do negócio — financeiro, operacional, comercial e de pessoas.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative bg-[#243548] lg:bg-transparent lg:p-0 p-6 rounded-lg border lg:border-none border-[#F5A623]/20 flex flex-col">
                                <div class="w-14 h-14 rounded-full bg-[#F5A623] text-[#1A2B3C] flex items-center justify-center font-bold text-xl mb-6 shadow-[0_0_15px_rgba(245,166,35,0.3)] mx-auto lg:mx-0 shrink-0">02</div>
                                <h3 class="text-[22px] font-semibold text-white mb-3 text-center lg:text-left">Plano de Ação</h3>
                                <p class="text-white/70 leading-relaxed text-center lg:text-left">Entregamos um plano detalhado com prioridades claras, responsáveis e prazos definidos.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative bg-[#243548] lg:bg-transparent lg:p-0 p-6 rounded-lg border lg:border-none border-[#F5A623]/20 flex flex-col">
                                <div class="w-14 h-14 rounded-full bg-[#F5A623] text-[#1A2B3C] flex items-center justify-center font-bold text-xl mb-6 shadow-[0_0_15px_rgba(245,166,35,0.3)] mx-auto lg:mx-0 shrink-0">03</div>
                                <h3 class="text-[22px] font-semibold text-white mb-3 text-center lg:text-left">Implementação</h3>
                                <p class="text-white/70 leading-relaxed text-center lg:text-left">Trabalhamos lado a lado com sua equipe para executar as mudanças necessárias.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative bg-[#243548] lg:bg-transparent lg:p-0 p-6 rounded-lg border lg:border-none border-[#F5A623]/20 flex flex-col">
                                <div class="w-14 h-14 rounded-full bg-[#F5A623] text-[#1A2B3C] flex items-center justify-center font-bold text-xl mb-6 shadow-[0_0_15px_rgba(245,166,35,0.3)] mx-auto lg:mx-0 shrink-0">04</div>
                                <h3 class="text-[22px] font-semibold text-white mb-3 text-center lg:text-left">Acompanhamento</h3>
                                <p class="text-white/70 leading-relaxed text-center lg:text-left">Monitoramos os resultados e ajustamos a rota conforme necessário para garantir o impacto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-processo mt-8 text-center lg:hidden"></div>
            </div>
        </div>
    </section>

    {{-- 6. DEPOIMENTOS --}}
    <section class="py-24 bg-[#F5F3EE]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-4">Clientes</p>
            <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[46px] text-[#1A2B3C] mb-6">
                Resultados que falam por si
            </h2>
            <div class="w-12 h-[3px] bg-[#F5A623] mx-auto mb-16"></div>

            <div class="swiper swiper-depoimentos">
                <div class="swiper-wrapper text-left">
                    <div class="swiper-slide">
                        <div class="bg-[#243548] border border-[#F5A623]/30 rounded-lg p-8 shadow-lg flex flex-col justify-between">
                            <div>
                                <div class="flex text-[#F5A623] mb-6">
                                    <span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                                </div>
                                <p class="text-white text-lg font-['Plus_Jakarta_Sans'] italic leading-relaxed mb-8">"A Bethel enxergou problemas no nosso fluxo de caixa que a gente nunca teria identificado sozinho. Em 3 meses, nossa margem melhorou 18%."</p>
                            </div>
                            <div>
                                <p class="text-[#F5A623] font-bold">Carlos M.</p>
                                <p class="text-white/60 text-sm mt-1">Diretor, Empresa de Distribuição · Londrina, PR</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#243548] border border-[#F5A623]/30 rounded-lg p-8 shadow-lg flex flex-col justify-between">
                            <div>
                                <div class="flex text-[#F5A623] mb-6">
                                    <span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                                </div>
                                <p class="text-white text-lg font-['Plus_Jakarta_Sans'] italic leading-relaxed mb-8">"O planejamento estratégico que desenvolvemos juntos nos deu clareza para tomar decisões que estávamos evitando há anos."</p>
                            </div>
                            <div>
                                <p class="text-[#F5A623] font-bold">Ana P.</p>
                                <p class="text-white/60 text-sm mt-1">Sócia-fundadora, Clínica de Saúde · Londrina, PR</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#243548] border border-[#F5A623]/30 rounded-lg p-8 shadow-lg flex flex-col justify-between">
                            <div>
                                <div class="flex text-[#F5A623] mb-6">
                                    <span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                                </div>
                                <p class="text-white text-lg font-['Plus_Jakarta_Sans'] italic leading-relaxed mb-8">"Reestruturamos nossa equipe comercial com a Bethel e dobramos o faturamento no semestre seguinte. Investimento que se paga."</p>
                            </div>
                            <div>
                                <p class="text-[#F5A623] font-bold">Roberto L.</p>
                                <p class="text-white/60 text-sm mt-1">CEO, Indústria de Médio Porte · PR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-depoimentos mt-8 text-center md:hidden"></div>
        </div>
    </section>

    {{-- 7. COMPROMISSO --}}
    <section id="sobre" class="py-24 bg-white border-t border-[#E2E0D8]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>
                    <p class="text-[#F5A623] text-[13px] font-bold uppercase tracking-[0.08em] mb-4">Nosso Compromisso</p>
                    <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[46px] text-[#1A2B3C] mb-6">
                        Sua empresa em boas mãos
                    </h2>
                    <p class="text-[#4A5568] text-lg leading-relaxed">
                        Trabalhamos com ética, transparência e sigilo absoluto. Cada projeto é tratado com a seriedade que o seu negócio merece.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="text-[#1A2B3C] font-medium text-lg">Confidencialidade total das informações</span>
                    </div>
                    <div class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="text-[#1A2B3C] font-medium text-lg">Metodologia testada em empresas de todos os portes</span>
                    </div>
                    <div class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="text-[#1A2B3C] font-medium text-lg">Sem contratos longos — você decide o ritmo</span>
                    </div>
                    <div class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 mt-0.5">
                            <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                        </svg>
                        <span class="text-[#1A2B3C] font-medium text-lg">Baseados em Londrina, atendemos todo o Brasil</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 8. CTA --}}
    <section id="contato" class="py-24 bg-[#1A2B3C] text-center">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <h2 class="font-['Plus_Jakarta_Sans'] font-extrabold text-4xl md:text-[48px] text-white mb-6">
                Pronto para transformar o seu negócio?
            </h2>
            <p class="text-white/80 text-xl mb-10 max-w-2xl mx-auto">
                Agende uma conversa gratuita com nossos consultores e descubra o que está impedindo o crescimento da sua empresa.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-6 mb-12 text-left sm:text-center">
                <div class="flex items-center sm:justify-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    <span class="text-white/90 text-sm font-medium">Diagnóstico inicial gratuito — sem compromisso</span>
                </div>
                <div class="flex items-center sm:justify-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    <span class="text-white/90 text-sm font-medium">Atendimento em Londrina e remoto para todo o Brasil</span>
                </div>
                <div class="flex items-center sm:justify-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    <span class="text-white/90 text-sm font-medium">Consultores com experiência em múltiplos setores</span>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
                   class="bg-[#F5A623] hover:bg-[#E08C0C] text-[#1A2B3C] font-bold py-3.5 px-10 rounded-full transition-all duration-200 text-sm tracking-wide transform hover:-translate-y-1 shadow-[0_4px_24px_rgba(245,166,35,0.45)] mb-6 inline-block">
                    Agendar conversa gratuita →
                </a>
                <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
                   class="text-white/70 hover:text-[#F5A623] transition-colors flex items-center gap-2">
                    📱 Ou fale pelo WhatsApp: (43) 99671-7747
                </a>
            </div>
        </div>
    </section>

    {{-- 9. FOOTER --}}
    <footer class="bg-[#0F1D2B] pt-20 pb-8 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12 mb-16">

                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <img src="{{ asset('images/bethel-logo.png') }}" alt="Bethel" class="h-10 w-auto mix-blend-screen">
                        <div class="flex flex-col leading-none">
                            <span class="text-white font-['Plus_Jakarta_Sans'] font-bold tracking-[0.12em] text-[17px] uppercase">BETHEL</span>
                            <span class="text-[#F5A623] font-['Plus_Jakarta_Sans'] font-medium tracking-[0.18em] text-[9px] uppercase">Consultoria</span>
                        </div>
                    </div>
                    <p class="text-white/60 mb-6 max-w-xs">
                        Detectamos problemas e entregamos soluções. Consultoria e gestão empresarial focada em resultados.
                    </p>
                    <p class="text-white/40 text-sm flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg> Londrina, PR</p>
                </div>

                <div>
                    <h4 class="text-white font-bold tracking-wider uppercase text-sm mb-6">Navegação</h4>
                    <ul class="space-y-4">
                        <li><a href="#sobre" class="text-white/60 hover:text-[#F5A623] transition-colors">Sobre</a></li>
                        <li><a href="#servicos" class="text-white/60 hover:text-[#F5A623] transition-colors">Serviços</a></li>
                        <li><a href="#diferencial" class="text-white/60 hover:text-[#F5A623] transition-colors">Por que Bethel</a></li>
                        <li><a href="#contato" class="text-white/60 hover:text-[#F5A623] transition-colors">Contato</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold tracking-wider uppercase text-sm mb-6">Contato</h4>
                    <ul class="space-y-4 text-white/60">
                        <li><a href="https://wa.me/5543996717747" class="hover:text-[#F5A623] transition-colors">WhatsApp: (43) 99671-7747</a></li>
                        <li><a href="#" class="hover:text-[#F5A623] transition-colors">Instagram: @bethel_consultoria</a></li>
                        <li><a href="mailto:contato@bethelconsultoria.com.br" class="hover:text-[#F5A623] transition-colors">contato@bethelconsultoria.com.br</a></li>
                    </ul>
                </div>

            </div>

            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-white/40 text-sm text-center md:text-left">
                    &copy; 2025 Bethel Consultoria. Todos os direitos reservados.
                </p>
                <div class="flex gap-6 text-sm text-white/40">
                    <a href="#" class="hover:text-white transition-colors">Política de Privacidade</a>
                    <a href="#" class="hover:text-white transition-colors">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- FLOATING WHATSAPP --}}
    <a href="https://wa.me/5543996717747" target="_blank" rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] rounded-full shadow-[0_4px_12px_rgba(37,211,102,0.4)] flex items-center justify-center hover:scale-110 transition-transform duration-300"
       aria-label="Fale conosco no WhatsApp"
       style="animation: pulseSlow 3s infinite">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
    </a>

    <script>
        // Navbar scroll effect
        var navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                navbar.classList.remove('py-5');
                navbar.classList.add('py-3', 'shadow-lg');
            } else {
                navbar.classList.remove('py-3', 'shadow-lg');
                navbar.classList.add('py-5');
            }
        });

        // Mobile menu toggle
        var menuBtn = document.getElementById('mobile-menu-btn');
        var mobileMenu = document.getElementById('mobile-menu');
        var menuIcon = document.getElementById('menu-icon');
        var closeIcon = document.getElementById('close-icon');
        var isOpen = false;

        menuBtn.addEventListener('click', function () {
            isOpen = !isOpen;
            mobileMenu.classList.toggle('hidden', !isOpen);
            menuIcon.classList.toggle('hidden', isOpen);
            closeIcon.classList.toggle('hidden', !isOpen);
        });

        document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                isOpen = false;
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        // Swiper — mobile carousels
        new Swiper('.swiper-diferencial', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            grabCursor: true,
            pagination: { el: '.swiper-pagination-diferencial', clickable: true },
            breakpoints: { 768: { enabled: false } }
        });

        new Swiper('.swiper-servicos', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            grabCursor: true,
            pagination: { el: '.swiper-pagination-servicos', clickable: true },
            breakpoints: { 768: { enabled: false } }
        });

        new Swiper('.swiper-processo', {
            slidesPerView: 1.2,
            spaceBetween: 16,
            grabCursor: true,
            pagination: { el: '.swiper-pagination-processo', clickable: true },
            breakpoints: { 1024: { enabled: false } }
        });

        new Swiper('.swiper-depoimentos', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            grabCursor: true,
            pagination: { el: '.swiper-pagination-depoimentos', clickable: true },
            breakpoints: { 768: { enabled: false } }
        });
    </script>

</body>
</html>
