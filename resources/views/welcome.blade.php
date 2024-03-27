<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#"></a>
                <br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Objetivo">Preço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Segmentos">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Novidades">Novidades</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="logoBanner">

        </div>
    </header>
    <main>
        {{-- explicação dos tipos de intro  --}}
        <section class="intro">
            <figure class="logo">
                <img class="section-logo" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
            </figure>
            <h1><strong>Tudo que vocẽ precisa em um só lugar</strong></h1>
            <p>Você está pronto para uma jornada de aprendizado de inglês como nunca antes? Prepare-se para explorar um
                mundo de conteúdo exclusivo e de alta qualidade, projetado especialmente para você pela CXM!</p>
            <p>Com a CXM, você terá acesso a uma vasta gama de recursos educacionais, desde lições interativas até
                exercícios envolventes, tudo cuidadosamente elaborado para impulsionar seu domínio do inglês.</p>
            <p> Descubra o inglês de uma maneira totalmente nova, mergulhando em vídeos, áudios e materiais escritos que
                vão desde o básico até o avançado. Na CXM, estamos comprometidos em proporcionar a você uma experiência
                de aprendizado enriquecedora e gratificante..</p>
            <p>Não espere mais! Junte-se à comunidade da CXM e transforme suas habilidades linguísticas hoje mesmo. O
                inglês está ao seu alcance, e a CXM está aqui para guiá-lo em cada passo do caminho. Vamos começar essa
                jornada incrível juntos! Acesse agora mesmo a plataforma CXM e comece a sua jornada rumo à fluência!</p>
        </section>
        {{-- explicação dos tipos de serviço  --}}
        <section class="servicos">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('arquivos/imagens/online.jpg') }}" class="img-fluid" alt="Imagem de exemplo">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column justify-content-center align-items-left h-100">
                            <h2>Acompanhamento Personalizado </h2>
                            <div class="d-flex justify-content-between">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <i class="fas fa-check"></i>
                                        <span>Feedback Preciso e Contínuo</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check"></i>
                                        <span>Personalização do Plano de Estudos</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check"></i>
                                        <span>Acompanhamento do Progresso em Tempo Real</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-2">
                <div class="row">
                    <div class="col-md-6">
                        <figure class="imagem1">
                            <img class="imagem1" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <figure class="imagem2">
                            <img class="imagem2" src="{{ asset('arquivos/imagens/banner.jpeg') }}" alt="cxm">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        {{-- vantagens  --}}
        <section class="vantagens">
            <h1><strong>Vantagens e serviços que oferecemos </strong></h1>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Monitoramento de Progresso</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Implementação de ferramentas de avaliação e
                                    acompanhamento do progresso do aluno, fornecendo feedback detalhado sobre o
                                    desempenho e identificando áreas de melhoria para um aprendizado mais eficaz</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Suporte Integrado2</h5>
                                <h6 class="card-subtitle mb-2 text-muted"> A CXM oferece suporte individualizado, com
                                    tutores disponíveis para fornecer orientação e feedback personalizado, ajudando os
                                    alunos a superar desafios específicos e a alcançar seus objetivos linguísticos.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Conteúdo Dinâmico e Relevante</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Compromisso com a atualização constante do
                                    conteúdo do curso para refletir as mudanças no idioma, nas tendências educacionais e
                                    nas demandas do mercado de trabalho, garantindo que os alunos estejam sempre
                                    atualizados e preparados para os desafios futuros</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Técnica e Pedagógica</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Além dos recursos de aprendizado, a
                                    plataforma também oferece suporte técnico e orientação pedagógica, garantindo que os
                                    alunos tenham acesso a assistência abrangente sempre que necessário</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Flexibilidade de Horário</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Estude no seu próprio ritmo, sem restrições
                                    de horário, permitindo que você se adapte facilmente à sua agenda ocupada</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 card-vantagens">
                            <i class="fas fa-check"></i>
                            <div class="card-body">
                                <h5 class="card-title">Interação Social</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Criação de uma comunidade online onde os
                                    alunos podem interagir entre si, trocar experiências, praticar habilidades de
                                    conversação e receber feedback construtivo, fomentando um ambiente de aprendizado
                                    colaborativo e motivador</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- depoimentos  --}}
        <article class="depoimentos">
            <h1 class="titulo-depoimentos"><strong>Depoimentos</strong></h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 card-depoimentos">
                        <h6 class="card-subtitle mb-2 text-white">“ Essa plataforma de inglês transformou minha visão
                            sobre aprender um novo idioma, tornando-o divertido e envolvente com aulas dinâmicas e
                            recursos interativos. Agora me sinto mais confiante na comunicação em inglês, percebendo uma
                            melhoria significativa. Recomendo fortemente para quem busca dominar o inglês de forma
                            eficaz e prática. “
                        </h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-depoimentos">
                        <h6 class="card-subtitle mb-2 text-white">“ Essa plataforma de inglês transformou minha visão
                            sobre aprender um novo idioma, tornando-o divertido e envolvente com aulas dinâmicas e
                            recursos interativos. Agora me sinto mais confiante na comunicação em inglês, percebendo uma
                            melhoria significativa. Recomendo fortemente para quem busca dominar o inglês de forma
                            eficaz e prática. “
                        </h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-depoimentos">
                        <h6 class="card-subtitle mb-2 text-white">“ Essa plataforma de inglês transformou minha visão
                            sobre aprender um novo idioma, tornando-o divertido e envolvente com aulas dinâmicas e
                            recursos interativos. Agora me sinto mais confiante na comunicação em inglês, percebendo uma
                            melhoria significativa. Recomendo fortemente para quem busca dominar o inglês de forma
                            eficaz e prática. “
                        </h6>
                    </div>
                </div>
            </div>
            </div>
        </article>
        {{-- explicação  professor  --}}
        <section class="professor">
            <figure class="logo">
                <img class="section-logo" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
            </figure>

            <br>

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <figure class="imagem3">
                <img class="imagem3" src="{{ asset('arquivos/imagens/copo.jpeg') }}" alt="cxm">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 card-professor">
                        <h6 class="card-subtitle mb-2 text-white">“ Olá a todos, sou Leonardo Albuquerque, professor de inglês na plataforma CXM. Com uma vasta experiência no ensino de inglês como segunda língua, estou comprometido em proporcionar uma experiência de aprendizado dinâmica e personalizada para cada aluno. Na plataforma CXM, estou disponível para oferecer suporte, feedback e orientação em todas as etapas do seu caminho de aprendizado. Estou ansioso para compartilhar meus conhecimentos, explorar novas habilidades linguísticas e, juntos, alcançarmos sucesso no mundo do inglês. Sejam bem-vindos à nossa comunidade de aprendizado! “
                        </h6>
                    </div>
                </div>
            </div>
        </section>
        {{-- novidades  --}}
        <section class="novidades" id="Novidades">
            <figure class="logo">
                <img class="section-logo" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
            </figure>

            <div class="newsletter">
                <p>Não perca as novidades! Assine nossa newsletter para receber conteúdos exclusivos, dicas de aprendizado e atualizações sobre nossos cursos de inglês diretamente na sua caixa de entrada. Mantenha-se informado e motivado em sua jornada de aprendizado. Inscreva-se agora mesmo!</p>
                <form action="/inscrever" method="POST">
                    @csrf <!-- Adiciona o token CSRF para proteção contra CSRF -->
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </form>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="section-logo-footer" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
                    </div>
                    <div class="col-md-3">
                        <h5>Links Úteis</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Página Inicial</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Artigos Recentes</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Como melhorar suas habilidades de programação</a></li>
                            <li><a href="#">Dicas para uma entrevista de emprego bem-sucedida</a></li>
                            <li><a href="#">Os benefícios do aprendizado contínuo</a></li>
                            <li><a href="#">Como se manter motivado ao aprender algo novo</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Redes Sociais</h5>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="text-center">&copy; 2024. Todos os direitos reservados.</p>
            </div>
        </footer>
        
    </main>
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

</html>
