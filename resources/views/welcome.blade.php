<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('arquivos/imagens/logo.png') }}">
    <title>Clever XM</title>
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-four.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-three.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-two.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>

<!--// Main Wrapper \\-->
<div class="wm-main-wrapper">
@include('header')


    @include('main')

    <!--// Main Content \\-->
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="wm-search-course">
                            <h3 class="wm-short-title wm-color">Encontre Seu Curso</h3>
                            <p>Preencha o formulário abaixo para encontrar seu curso:</p>
                            <form>
                                <ul>
                                    <li>
                                        <div class="wm-radio">
                                            <div class="wm-radio-partition">
                                                <input id="by-id" type="radio" name="search_by" value="id">
                                                <label for="by-id">Por ID</label>
                                            </div>
                                            <div class="wm-radio-partition">
                                                <input id="by-name" type="radio" name="search_by" value="name">
                                                <label for="by-name">Por nome</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <input type="text" value="Nome do Curso" onblur="if(this.value == '') { this.value ='Nome do Curso'; }" onfocus="if(this.value =='Nome do Curso') { this.value = ''; }">
                                        <i class="wmicon-search"></i>
                                    </li>
                                    <li>
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>Categoria</option>
                                                <option>Categoria</option>
                                                <option>Categoria</option>
                                                <option>Categoria</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <input type="submit" value="Buscar Curso">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="wm-service wm-box-service">
                            <ul>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-user"></i>
                                        <h6><a href="#">Desenvolvimento Pessoal</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-book-open"></i>
                                        <h6><a href="#">Aprendizado Acadêmico</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-clipboard-check"></i>
                                        <h6><a href="#">Preparação para Vestibular</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-globe-americas"></i>
                                        <h6><a href="#">Aprendizado para Viagens</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-microphone"></i>
                                        <h6><a href="#">Melhora da Oratória</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-lightbulb"></i>
                                        <h6><a href="#">Criatividade</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-users"></i>
                                        <h6><a href="#">Trabalho em Equipe</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="fas fa-calendar-alt"></i>
                                        <h6><a href="#">Gestão do Tempo</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-courses-popular-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-fancy-title"> <h2>Cursos <span>Populares</span></h2> </div>
                        <div class="wm-courses wm-courses-popular">
                            <ul class="row">
                                <li class="col-md-3">
                                    <div class="wm-courses-popular-wrap">
                                        <figure>
                                            <a href="#"><img src="extra-images/papular-courses-1.jpg" alt="Curso de Pesquisa Avançada">
                                                <span class="wm-popular-hover"> <small>ver curso</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-1.jpg" alt="Instrutor: Shelly T. Forrester">
                                                <h6><a href="#">Pesquisa Avançada em Arquitetura</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="#">Pesquisa Avançada em Arquitetura</a></h6>
                                            <div class="wm-courses-price"> <span>$32</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342 alunos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10 avaliações</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-courses-popular-wrap">
                                        <figure>
                                            <a href="#"><img src="extra-images/papular-courses-2.jpg" alt="Curso de Paisagismo e Urbanismo Avançado">
                                                <span class="wm-popular-hover"> <small>ver curso</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-2.jpg" alt="Instrutor: Sam K. Harrington">
                                                <h6><a href="#">Paisagismo e Urbanismo Avançado</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="#">Paisagismo e Urbanismo Avançado</a></h6>
                                            <div class="wm-courses-price"> <span>Gratuito</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 438 alunos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 28 avaliações</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-courses-popular-wrap">
                                        <figure>
                                            <a href="#"><img src="extra-images/papular-courses-3.jpg" alt="Curso de Design Transdisciplinar">
                                                <span class="wm-popular-hover"> <small>ver curso</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-3.jpg" alt="Instrutor: Sara A. Shirley">
                                                <h6><a href="#">Design Transdisciplinar</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="#">Design Transdisciplinar</a></h6>
                                            <div class="wm-courses-price"> <span>$79</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309 alunos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19 avaliações</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-courses-popular-wrap">
                                        <figure>
                                            <a href="#"><img src="extra-images/papular-courses-4.jpg" alt="Curso de Sistemas de Informação Financeira">
                                                <span class="wm-popular-hover"> <small>ver curso</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-4.jpg" alt="Instrutor: Julius M. Lepage">
                                                <h6><a href="#">Sistemas de Informação Financeira</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="#">Sistemas de Informação Financeira</a></h6>
                                            <div class="wm-courses-price"> <span>$50</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298 alunos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11 avaliações</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->


        <!--// Main Section \\-->
        <div class="wm-main-section wm-whychooseus-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="whychooseus-list">
                            <div class="wm-fancy-title"> <h2>Por que <span>Escolher a Clever Xm</span></h2> </div>
                            <ul class="row">
                                <li class="col-md-4">
                                    <span>95%</span>
                                    <h6>dos nossos alunos obtiveram aprovação no vestibular com alta pontuação</h6>
                                </li>
                                <li class="col-md-4">
                                    <span>89%</span>
                                    <h6>dos alunos melhoraram suas notas no ENEM</h6>
                                </li>
                                <li class="col-md-4">
                                    <span>80%</span>
                                    <h6>relataram avanços significativos no aprendizado de inglês</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wm-questions-studying">
                            <img src="extra-images/ask-questoin-bg.png" alt="Perguntas sobre estudo">
                            <h3 class="wm-color">Dúvidas sobre estudar conosco?</h3>
                            <p>Nossa equipe de consultores e orientadores está pronta para responder a todas as suas perguntas:</p>
                            <a class="wm-banner-btn" href="#">Pergunte agora</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->


        <!--// Main Section \\-->
        <div class="wm-main-section wm-learn-listing-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-fancy-title"> <h2>Você Pode <span>Aprender</span></h2> </div>
                        <div class="wm-learn-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <figure>
                                        <a href="#"><img src="extra-images/learn-listing-1.png" alt="Pesquisa"></a>
                                        <figcaption>
                                            <h2>Pesquisa</h2>
                                            <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <figure>
                                        <a href="#"><img src="extra-images/learn-listing-2.png" alt="Acadêmico"></a>
                                        <figcaption>
                                            <h2>Acadêmico</h2>
                                            <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <figure>
                                        <a href="#"><img src="extra-images/learn-listing-3.png" alt="Admissão"></a>
                                        <figcaption>
                                            <h2>Admissão</h2>
                                            <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <figure>
                                        <a href="#"><img src="extra-images/learn-listing-4.png" alt="Vida Estudantil"></a>
                                        <figcaption>
                                            <h2>Vida Estudantil</h2>
                                            <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->


        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="wm-main-section wm-latestevents-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 wm-top-spacer">
                        <h2 class="wm-simple-title">Nossos Últimos Eventos</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="wm-event-latest-slider">
                                    <div class="wm-event-latest-layer">
                                        <h6 class="wm-color">Descubra como a Clever Xm pode transformar sua preparação para vestibulares e ENEM com métodos de estudo inovadores e flexíveis.</h6>
                                        <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                    </div>
                                    <div class="wm-event-latest-layer">
                                        <h6 class="wm-color">Aproveite nossos cursos online para aprimorar seu inglês e potencializar suas chances de sucesso em exames e no mercado de trabalho.</h6>
                                        <a href="#" class="wm-banner-btn">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wm-event wm-latest-event">
                                    <ul class="row">
                                        <li class="col-md-12">
                                            <figure><a href="#"><img src="extra-images/latest-event-1.png" alt="Evento 1"></a></figure>
                                            <div class="wm-latest-event-text">
                                                <h6><a href="#" class="wm-color">Transforme sua Preparação: Dicas e Estratégias Online</a></h6>
                                                <time datetime="2024-04-21 20:00">21/04/2024</time>
                                                <p>Participe de nossos webinars sobre como utilizar a plataforma Clever Xm para obter os melhores resultados em vestibulares e ENEM.</p>
                                                <a href="#" class="wm-banner-btn">Ver Evento</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wm-event wm-latest-event">
                                    <ul class="row">
                                        <li class="col-md-12">
                                            <figure><a href="#"><img src="extra-images/latest-event-2.png" alt="Evento 2"></a></figure>
                                            <div class="wm-latest-event-text">
                                                <h6><a href="#" class="wm-color">Aprimorando o Inglês: Estratégias de Ensino Eficazes</a></h6>
                                                <time datetime="2024-04-19 20:00">19/04/2024</time>
                                                <p>Descubra como nossos cursos de inglês online podem acelerar seu aprendizado e prepará-lo para um futuro brilhante.</p>
                                                <a href="#" class="wm-banner-btn">Ver Evento</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wm-counter wm-counter-simple">
                            <ul class="row">
                                <li class="col-md-12">
                                    <span class="word-count">5</span>
                                    <h6>Curso online mais recomendado para preparação para vestibulares e ENEM</h6>
                                </li>
                                <li class="col-md-12">
                                    <span class="word-count">68</span>
                                    <h6>% de alunos satisfeitos com a flexibilidade e qualidade dos nossos cursos</h6>
                                </li>
                                <li class="col-md-12">
                                    <span class="word-count">91</span>
                                    <h6>Países com alunos utilizando a Clever Xm</h6>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->


        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="wm-main-section wm-testimonial-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-fancy-title">
                            <h2>O que <span>Nossos Alunos Dizem</span></h2>
                            <p>Veja o que nossos incríveis alunos têm a dizer.</p>
                        </div>
                        <div class="wm-testimonial-slider">
                            <div class="wm-testimonial-slider-wrap">
                                <p>A Clever Xm foi fundamental para minha aprovação no vestibular. Os simulados e as estratégias de estudo fornecidas foram precisos e me ajudaram a entender melhor os conceitos, resultando em uma nota muito acima da média.</p>
                                <figure>
                                    <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-1.png" alt="Depoimento 1"></a>
                                    <figcaption>
                                        <h5><a href="#">João Pedro Silva</a></h5>
                                        <span>São Paulo, Brasil</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="wm-testimonial-slider-wrap">
                                <p>Com a ajuda da Clever Xm, minha preparação para o ENEM foi muito mais eficaz. Os cursos de revisão e as dicas de técnicas de estudo me proporcionaram um desempenho excelente no exame, me garantindo uma vaga no curso dos meus sonhos.</p>
                                <figure>
                                    <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-2.png" alt="Depoimento 2"></a>
                                    <figcaption>
                                        <h5><a href="#">Maria Clara Souza</a></h5>
                                        <span>Rio de Janeiro, Brasil</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="wm-testimonial-slider-wrap">
                                <p>Eu sou muito grato à Clever Xm pelo suporte no aprendizado de inglês. As aulas e os recursos oferecidos foram essenciais para minha fluência. O curso de inglês realmente fez a diferença para minha carreira acadêmica e profissional.</p>
                                <figure>
                                    <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-3.png" alt="Depoimento 3"></a>
                                    <figcaption>
                                        <h5><a href="#">Ana Beatriz Costa</a></h5>
                                        <span>Belo Horizonte, Brasil</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="wm-testimonial-slider-wrap">
                                <p>Os recursos e suporte oferecidos pela Clever Xm me ajudaram a alcançar meus objetivos acadêmicos com muito mais facilidade. A plataforma realmente facilita a preparação para exames e o aprendizado de novas habilidades.</p>
                                <figure>
                                    <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-4.png" alt="Depoimento 4"></a>
                                    <figcaption>
                                        <h5><a href="#">Carlos Eduardo Lima</a></h5>
                                        <span>Curitiba, Brasil</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->



        <!--// Main Section \\-->
        <div class="wm-main-section wm-news-grid-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-fancy-title">
                            <h2>Blog <span>Notícias</span></h2>
                            <p>Trouxemos para você todas as informações úteis sobre como a nossa plataforma pode transformar sua preparação para exames.</p>
                        </div>
                        <div class="wm-news wm-news-grid">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="extra-images/news-grid-1.png" alt="Notícia 1"></a>
                                        <figcaption class="wm-bgcolor">
                                            <img src="extra-images/news-grid-thumb-1.png" alt="Thumbnail 1">
                                            <h6>Postado por: <a href="#">Lucas Oliveira</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-newsgrid-text">
                                        <ul class="wm-post-options">
                                            <li>07/04/2024</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i> 15 comentários</a></li>
                                            <li><a href="#"><i class="wmicon-folder2"></i> vestibular</a></li>
                                        </ul>
                                        <h5><a href="#" class="wm-color">Estudos mostram: usuários da nossa plataforma têm 30% mais chances de aprovação no vestibular</a></h5>
                                        <p>Recentes pesquisas demonstram que estudantes que utilizaram nossa plataforma de preparação tiveram uma taxa de aprovação 30% superior em vestibulares. A plataforma oferece materiais exclusivos e simulados que preparam melhor os alunos para os desafios reais.</p>
                                        <a class="wm-banner-btn" href="#">ler artigo</a>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="extra-images/news-grid-2.png" alt="Notícia 2"></a>
                                        <figcaption class="wm-bgcolor">
                                            <img src="extra-images/news-grid-thumb-2.png" alt="Thumbnail 2">
                                            <h6>Postado por: Mariana Santos</h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-newsgrid-text">
                                        <ul class="wm-post-options">
                                            <li>06/04/2024</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i> 22 comentários</a></li>
                                            <li><a href="#"><i class="wmicon-folder2"></i> ENEM</a></li>
                                        </ul>
                                        <h5><a href="#" class="wm-color">Como nossa plataforma pode aumentar suas chances no ENEM</a></h5>
                                        <p>Através de métodos comprovados e ferramentas interativas, nossa plataforma ajuda os alunos a entender e aplicar conceitos cruciais para o ENEM. Estudos indicam que usuários dedicados têm uma probabilidade 40% maior de alcançar notas superiores.</p>
                                        <a class="wm-banner-btn" href="#">ler artigo</a>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="extra-images/news-grid-3.png" alt="Notícia 3"></a>
                                        <figcaption class="wm-bgcolor">
                                            <img src="extra-images/news-grid-thumb-3.png" alt="Thumbnail 3">
                                            <h6>Postado por: Ana Costa</h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-newsgrid-text">
                                        <ul class="wm-post-options">
                                            <li>05/04/2024</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i> 19 comentários</a></li>
                                            <li><a href="#"><i class="wmicon-folder2"></i> sucesso acadêmico</a></li>
                                        </ul>
                                        <h5><a href="#" class="wm-color">Histórias de sucesso: Alunos que transformaram suas vidas com nossa plataforma</a></h5>
                                        <p>Leia histórias inspiradoras de alunos que utilizaram nossa plataforma e alcançaram sucesso acadêmico notável. Desde o aumento das notas em exames até a conquista de bolsas de estudo, nossa plataforma tem sido uma ferramenta chave na realização de sonhos acadêmicos.</p>
                                        <a class="wm-banner-btn" href="#">ler artigo</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--// Main Section \\-->

        <!--// Main Section \\-->
{{--        <div class="wm-main-section">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-md-12">--}}
{{--                        <div class="wm-simple-section-title wm-partners-title"> <h2>University <span>Partners</span></h2> </div>--}}
{{--                        <div class="wm-partners-slider gallery">--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="extra-images/university-partners-1.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-2.png"> <img src="extra-images/university-partners-2.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-3.png"> <img src="extra-images/university-partners-3.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-4.png"> <img src="extra-images/university-partners-4.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-5.png"> <img src="extra-images/university-partners-5.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-6.png"> <img src="extra-images/university-partners-6.png" alt=""> </a> </div>--}}
{{--                            <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="extra-images/university-partners-1.png" alt=""> </a> </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-contact-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <div class="wm-contact-tab">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Fale conosco</a></li>
                                <li><a href="#profile" aria-controls="profile" data-toggle="tab">Detalhes</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <span>Contate-nos para mais informações</span>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" value="Nome" onblur="if(this.value == '') { this.value ='Nome'; }" onfocus="if(this.value =='Nome') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-symbol3"></i>
                                                            <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-technology4"></i>
                                                            <input type="text" value="Telefone" onblur="if(this.value == '') { this.value ='Telefone'; }" onfocus="if(this.value =='Telefone') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="Mensagem"></textarea>
                                                        </li>
                                                        <li>
                                                            <input type="submit" value="Enviar Mensagem">
                                                        </li>
                                                    </ul>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p>+1 505-753-5656 +1 505-753-4437</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    @include('footer')
    <div class="clearfix"></div>
</div>
<!--// Main Wrapper \\-->

<!-- ModalLogin Box -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="wm-modallogin-form wm-login-popup">
                    <span class="wm-color">Login to Your Account</span>
                    <form>
                        <ul>
                            <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                            <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                            <li> <input type="submit" value="Sign In"> </li>
                        </ul>
                    </form>
                    <span class="wm-color">or try our socials</span>
                    <ul class="wm-login-social-media">
                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                    </ul>
                    <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                </div>
                <div class="wm-modallogin-form wm-register-popup">
                    <span class="wm-color">create Your Account today</span>
                    <form>
                        <ul>
                            <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                            <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                            <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                            <li> <input type="submit" value="Create Account"> </li>
                        </ul>
                    </form>
                    <span class="wm-color">or signup with your socials:</span>
                    <ul class="wm-login-social-media">
                        <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                        <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                    </ul>
                    <p>Already a member? <a href="#">Sign-in Here!</a></p>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ModalLogin Box -->

<!-- ModalSearch Box -->
<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="wm-modallogin-form">
                    <span class="wm-color">Search Your KeyWord</span>
                    <form>
                        <ul>
                            <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                            <li> <input type="submit" value="Search"> </li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ModalSearch Box -->
    </body>
<script src="{{ asset('site/js/sweetalert2.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/jquery.prettyphoto.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/fitvideo.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/skills.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/slick.slider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/waypoints-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('build/mediaelement-and-player.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{ asset('script/functions.js') }}"></script>

<script src="{{ asset('js/arearestrita.js') }}"></script>
{{-- cdn necessário para o dropdown menu mobile --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>
