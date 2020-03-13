<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS Galeria -->
    <link rel="stylesheet" type="text/css" href="script/galeria.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!--ICONES-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--ICONES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>JK - Treinamento Físico Funcional</title>

    <style>
    #fundojumbotron {
        background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
        background-image: url("img/fundo.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;
        height: 600px;
    }

    #tamanhoImagem {
        width: 400px;
        height: 467px;
        margin-top: 50px;

    }

    #tamanhoImagemSobre {
        width: 200px;
        height: 200px;
    }

    #textoCenter {
        margin-top: 40px;

    }

    #video {
        margin: 0 auto;
        float: none;
        width: 700px;
        height: 400px;
    }

    body {
        font-family: 'Roboto', sans-serif;
    }

    a {
        color: #ffffff;
        text-decoration: none;
    }

    a:hover {
        font-weight: bold;
        border-bottom: 3px solid #eeeeec;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }


    /*CSS Whats*/
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }

    /*FIM CSS Whats*/

    @media only screen and (max-width: 900px) {
        #fundojumbotron {
            background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
            background-image: url("img/fundo.png");
            height: 520px;

        }

        #tamanhoImagem {
            width: 300px;
            height: 289px;
            margin-top: 90px;


        }

        #tamanhoImagemCel {
            width: 300px;
            height: 182px;
            margin-top: 60px;
        }

        #textoCenter {
            text-align: center;
            margin-top: -20px;
        }

        .card {
            margin: 0 auto;
            float: none;
        }

        #mapa {
            width: 350px;
            height: 250px;
        }

        #video {
            margin: 0 auto;
            float: none;
            width: 450px;
            height: 400px;
        }
    }

    /*CSS GALERIA*/


    :root {
        /* Base font size */
        font-size: 14px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background-color: #fafafa;
    }

    .container {
        margin: 0 auto;
        padding: 0 2rem 2rem;
    }

    .heading {

        line-height: 1.5;
        text-align: center;
        padding: 3.5rem 0;
        color: #1a1a1a;
    }

    .heading span {
        display: block;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        /* Compensate for excess margin on outer gallery flex items */
        margin: -1rem -1rem;
    }

    .gallery-item {
        /* Minimum width of 24rem and grow to fit available space */
        flex: 1 0 24rem;
        /* Margin value should be half of grid-gap value as margins on flex items don't collapse */
        margin: 1rem;
        box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
        overflow: hidden;
    }

    .gallery-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease-out;
    }

    .gallery-image:hover {
        transform: scale(1.15);
    }

    /*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

    @supports (display: grid) {
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
            grid-gap: 2rem;
        }

        .gallery,
        .gallery-item {
            margin: 0;
        }
    }


    /*FIM CSS GALERIA*/

    /*CSS Sanduiche*/
    #sanduiche {
        background-color: none;
    }

    /*CSS Sanduiche*/

    
    </style>
</head>

<body>


    <div class="jumbotron jumbotron-fluid " id="fundojumbotron">
        <!--NAV-->
        <nav class="navbar navbar-expand-lg navbar-light " style="margin-top: -40px">

            <button id="sanduiche" class="navbar-toggler d-block d-sm-block d-md-none" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="" aria-expanded="false" aria-label="Alterna navegação">
                <i class="fa fa-mobile"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" style="font-size: 23px">
                    <li class="nav-item active">
                        <a class="nav-link" href="#sobre">Sobre Nós <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#servico">Serviços</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#fale">Fale Conosco</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--FIM NAV-->

        <!-- Conteudo-->
        <div class="container d-none d-md-block d-lg-block d-xl-block">
            <div class="row">

                <div class="col-md-12" style="margin-top: -40px">

                    <div style="text-align: center">
                        <img src="img/timeJk2.png" id="tamanhoImagem">
                    </div>

                    <!--
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
          </div>
        -->
                </div>
            </div>
        </div>
        <!-- FIM Conteudo-->

        <!-- Conteudo Celular-->
        <div class="container d-block d-sm-block d-md-none">
            <div class="row">

                <div class="col-md-12" style="margin-top: -40px">

                    <div style="text-align: center">
                        <img src="img/Jk.png" id="tamanhoImagemCel">
                    </div>


                </div>
            </div>
        </div>
        <!-- FIM Conteudo Celular-->

    </div>

    <br>
    <!--Sobre-->
    <div class="container d-none d-md-block d-lg-block d-xl-block">
        <section id="sobre"></section>
        <div style="text-align: center">
            <br>
            <h3 style="font-size: 80px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Sobre Nós</h3>
          
            <p style='color: #8F8F8F;font-size: 20px'>Saiba os valores que sustentam a nossa empresa</p>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-12">


                <div class="embed-responsive embed-responsive-16by9 mb-5" id="video">
                    <iframe class="embed-responsive-item" src="videos/jk.mp4" allowfullscreen></iframe>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <h2 data-aos="fade-right">Treino Responsável</h2>
                <p style="text-align: justify" data-aos="fade-right">Entendemos e respeitamos a individualidade de cada pessoa. Sabemos que
                    todos tem suas particularidades e não devemos tratar os treinos de forma única. Procuramos trabalhar
                    de acordo com a necessidade de cada um. Os exercícios básicos como agachamentos, levantamentos e
                    presses, tiveram grande destaque. Isso se deve ao fato de serem muito mais completos do que os
                    exercícios executados em máquinas. Eles exigem qualidades físicas fundamentais para que possamos nos
                    movimentar de maneira harmônica, sendo a base do treinamento para a alta performance.</p>
            </div>
            <div class="col-md-3">
                <img src="img/jk-Cadeira2.png" data-aos="fade-right" class="img-fluid" id="tamanhoImagemSobre">
            </div>


            <div class="col-md-3">
                <img src="img/Fessora.png" data-aos="fade-left" class="img-fluid" id="tamanhoImagemSobre">

            </div>
            <div class="col-md-9">
                <h2 data-aos="fade-left">Amizade e Família</h2>
                <p style="text-align: justify" data-aos="fade-left">Nossos treinadores estão em constante atualização. Contamos com um
                    programa de capacitação profissional que deve ser cumprido por todos os profissionais. Buscamos
                    fazer treinos dinâmicos, para que não fique algo repetitivo e monótono. Na JK, respeitamos alunos e
                    funcionários. Assim conseguimos atender cada cliente de forma personalizada e com extrema qualidade.
                    Aqui somos união. Somos a família JK!</p>
            </div>

            <div class="col-md-9">
                <h2 data-aos="fade-right">Foco no Atendimento</h2>
                <p style="text-align: justify" data-aos="fade-right">Somos uma empresa de treinamento funcional. Nosso foco é alcançar o
                    objetivo dos nossos alunos com segurança e com um excelente atendimento. Na JK você encontrará
                    programas específicos, adaptados para as necessidades de diversas faixas-etárias. Nós nos
                    preocupamos com você. Aqui, você encontrará pessoas com um estilo de vida parecido como o seu,
                    tornando a convivência agradável e criando laços muito fortes.</p>
            </div>
            <div class="col-md-3">
                <img src="img/Gustavo.png" data-aos="fade-right" class="img-fluid" id="tamanhoImagemSobre">
            </div>
        </div>
    </div>
    <!--Fim Sobre-->

    <!--Sobre Celulares-->
    <div class="container d-block d-sm-block d-md-none">
        <section id="sobre"></section>
        <div style="text-align: center">
            <br>
            <h3 style="font-size: 80px;font-family: 'Roboto Condensed', sans-serif;">Sobre Nós</h3>
            <p style='color: #8F8F8F'>Saiba os valores que sustentam a nossa empresa</p>
        </div>

        <div class="row">
            <div class="col-md-12">


                <div class="embed-responsive embed-responsive-16by9 mb-5" id="video">
                    <iframe class="embed-responsive-item" src="videos/jk.mp4" allowfullscreen></iframe>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-5">
                <img src="img/jk-Cadeira2.png" class="img-fluid">

            </div>
            <div class="col-md-7">
                <h2 style="margin-top: 20px; text-align: center;">Treino Responsável</h2>
                <p style="text-align: center;">Entendemos e respeitamos a individualidade de cada pessoa. Sabemos que
                    todos tem suas particularidades e não devemos tratar os treinos de forma única. Procuramos trabalhar
                    de acordo com a necessidade de cada um. Os exercícios básicos como agachamentos, levantamentos e
                    presses, tiveram grande destaque. Isso se deve ao fato de serem muito mais completos do que os
                    exercícios executados em máquinas. Eles exigem qualidades físicas fundamentais para que possamos nos
                    movimentar de maneira harmônica, sendo a base do treinamento para a alta performance.</p>
            </div>


            <div class="col-md-5">
                <img src="img/Fessora.png" class="img-fluid">

            </div>
            <div class="col-md-7">
                <h2 style="margin-top: 20px; text-align: center;">Amizade e Família</h2>
                <p style="text-align: center">Nossos treinadores estão em constante atualização. Contamos com um
                    programa de capacitação profissional que deve ser cumprido por todos os profissionais. Buscamos
                    fazer treinos dinâmicos, para que não fique algo repetitivo e monótono. Na JK, respeitamos alunos e
                    funcionários. Assim conseguimos atender cada cliente de forma personalizada e com extrema qualidade.
                    Aqui somos união. Somos a família JK!</p>
            </div>

            <div class="col-md-5">
                <img src="img/Gustavo.png" class="img-fluid">

            </div>
            <div class="col-md-7">
                <h2 style="margin-top: 20px; text-align: center;">Foco no Atendimento</h2>
                <p style="text-align: center">Somos uma empresa de treinamento funcional. Nosso foco é alcançar o
                    objetivo dos nossos alunos com segurança e com um excelente atendimento. Na JK você encontrará
                    programas específicos, adaptados para as necessidades de diversas faixas-etárias. Nós nos
                    preocupamos com você. Aqui, você encontrará pessoas com um estilo de vida parecido como o seu,
                    tornando a convivência agradável e criando laços muito fortes.</p>
            </div>
        </div>
    </div>
    <!--Fim Sobre Celulares-->


    <!--Cards-->
    <br>
    <div class="container">
        <section id="servico"></section>
        <div style="text-align: center">
            <br>
            <h3 style="font-size: 80px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Planos</h3>
            <p style='color: #8F8F8F;font-size: 20px'>Conheças nossos Planos</p>
            <hr>
        </div>



        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border: none">
                    <center><img class="" src="img/bola.png" width="140px" height="150px"></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">2 vezes na Semana</h5>
                        </center>
                        <p class="card-text text-center" style="text-align: justify">Cartão R$130,00 - Mensal
                            <br>Boleto R$150,00 - Mensal
                            <br>Semestral R$850,00 - Mensal
                            <br>Anual R$1700,00 - Mensal
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="card" style="width: 18rem; border: none">
                    <center><img class="" src="img/barra.png" width="120px" height="160px"></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">3 vezes na Semana</h5>
                        </center>
                        <p class="card-text text-center" style="text-align: justify">Cartão R$130,00 - Mensal
                            <br>Boleto R$150,00 - Mensal
                            <br>Semestral R$850,00 - Mensal
                            <br>Anual R$1700,00 - Mensal
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem; border: none">
                    <center><img class="" src="img/corda.png" width="140px" height="160px"></center>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">5 vezes na Semana</h5>
                        </center>
                        <p class="card-text text-center" style="text-align: justify">Cartão R$130,00 - Mensal
                            <br>Boleto R$150,00 - Mensal
                            <br>Semestral R$850,00 - Mensal
                            <br>Anual R$1700,00 - Mensal
                        </p>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <!--Fim Cards-->

    <!--Galeria-->
    <div class="container">

        <section id="galeria"></section>
        <div style="text-align: center">
            <br>
            <h3 style="font-size: 80px;font-family: 'Roboto Condensed', sans-serif;" data-aos="fade-in">Galeria de Imagens</h3>
            <p style='color: #8F8F8F;font-size: 20px'>Ambiente Animado e Familiar</p>
            <hr>
        </div>

        <div class="gallery">

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/caixote.png">
            </div>

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/cara01.png">
            </div>

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/campeao.png">
            </div>

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/carinha.png">
            </div>

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/caras.png">
            </div>

            <div class="gallery-item">
                <img class="gallery-image" src="img/diaadia/suor.png">
            </div>

        </div>

    </div>
    <!--Fim Galeria-->

    <br>
    <!--Formulário-->
    <div class="container-fluid"
        style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%)">
        <div class="container">
            <section id="fale"></section>
            <div style="text-align: center;">
                <h2 style="font-size: 80px;font-family: 'Roboto Condensed', sans-serif;">Fale Conosco</h2>
            </div>
            <hr>
            </hr>


            <div class="row mt-5 text-dark">
                <div class="col-md-5 ">
                    <h3>Informações de Contato</h3>
                    <h5>Telefone</h5>
                    <p style="font-weight: bold">(61) 3028-3393</p>
                    <h5>Endereço</h5>
                    <p style="font-weight: bold">Quadra 15/17</p>

                    <br>

                    <iframe id="mapa"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.0621678108955!2d-47.78166198572505!3d-15.641677623382927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a400a3c2326bf%3A0x21ac05145d849b72!2sQ.%2015%20-%20Q%2015%20-%20Sobradinho%2C%20Bras%C3%ADlia%20-%20DF%2C%2073045-150!5e0!3m2!1spt-BR!2sbr!4v1580406319771!5m2!1spt-BR!2sbr"
                        width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

                <div class="col-md-7" style="margin-bottom: 100px">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Digite Seu Nome" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço de email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="nome@exemplo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Telefone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="(XX)X-XXXX-XXXX">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Assunto</label>
                            <select class="form-control" id="exampleFormControlSelect1" required>
                                <option>Dúvidas</option>
                                <option>Matrícula</option>
                                <option>Financeiro</option>
                                <option>Reclamações</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div style="text-align: right">
                            <button type="submit" class="btn mb-5"
                                style="background-color: #200707; color: white; width: 150px;">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Formulário-->

    <!--Rodape-->
    <footer style="background-color: #000">
        <br>
        <center>
            <p class="text-white">Kênio Farias - 2020</p>
        </center>
        <ul class="nav justify-content-center">

            <li class="nav-item active">
                <a class="nav-link" href="#sobre">Sobre Nós</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#servico">Serviços</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#galeria">Galeria</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#fale">Fale Conosco</a>
            </li>
        </ul>
    </footer>
    <!--Rodape-->

    <!--Whats-->
    <a href="https://api.whatsapp.com/send?phone=5561986446657&text=Bom%20Dia!%20Gostaria%20de%20conhecer%20a%20JK%20Treinamento%20F%C3%ADsico%20e%20Funcional"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--FIM Whats-->



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration:1200,
    });
  </script>
</body>

</html>