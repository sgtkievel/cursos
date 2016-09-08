<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de html 5 - PRO WEB - Olá Mundo</title>
        <meta name="description" content="Está página web etá sendo construída no curso HTML5 da Pro Web - Olá Mundo!"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="img/favicon.png" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <!--        FAVICON
                STYLE
                FONT-->
    </head>
    <body>

        <header class="main_header container">
            <div class="content">
                <img class="main_logo" title="Curso de HTML5" alt="[Curso de HTML5]" src="img/_logo.png"/>
                <h1 class="fontzero">Curso de html 5 - PRO WEB - Olá Mundo</h1>
                <ul class="main_menu">
                    <li><a href="#home" title="Curso de HTML5">Home</a></li>
                    <li><a href="#curso" title="Sobre o Curso de HTML5">O Curso</a></li>
                    <li><a class="special" href="http://prowebolamundo.16mb.com/" target="_blank" title="Curso Pro Web Olá Mundo">Pro Web</a></li>
                    <li><a href="#videoaula" title="Confira  Vídeo do Curso de HTML5">Vídeo Aulas</a></li>
                    <li><a href="#contato" title="Contato sobre o Curso de HTML5">Fale Conosco</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        <!--FECHA CABEÇALHO-->

        <main class="container">
            <article class="destaque container">
                <div class="content">
                    <header>
                        <h1>Bem-vindo(a) ao curso gratuito de HTML5</h1>
                        <p class="tagline">Você está pronto para aprender HTML5, CSS e JQuery de forma descomplicada, gratuita e do jeito certo? Confira nosso curso gratuito de HTML5</p>
                        <div>
                            <div class="fb-like" data-href="https://www.facebook.com/upinside" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            <div class="fb-share-button" data-href="http://www.upinside.com.br/oferta/html5-do-jeito-certo/" data-layout="button_count"></div>
                        </div>
                    </header>  
                    <div class="destaque_video">
                        <div class="ratio">
                            <iframe class="media" src="https://www.youtube.com/embed/TYXE-legZMU?list=PLi_gvjv-JgXq-SVk-gyVEa0r1WANGtZKn" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <!--DESTAQUE DO SITE-->
            <section>
                <header>
                    <h1>Curso de HTML5</h1>
                    <p class="tagline">Confira o que você vai aprender no curso de HTML5!</p>

                </header>

                <article>
                    <img src="img/01.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                    <h1>HTML e HTML5</h1>
                    <p>Aprenda e produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para robôs de busca!</p>
                    <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y H:i:s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img src="img/02.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                    <h1>CSS e CSS3</h1>
                    <p>Cascading Style Sheets (ou simplesmente CSS) é uma linguagem de folhas de estilo utilizada para definir a apresentação de documentos escritos em uma linguagem de marcação, como HTML ou XML. Confira artigos e tutoriais sobre CSS!</p>
                    <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y H:i:s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img src="img/03.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                    <h1>jQuery</h1>
                    <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida para simplificar os scripts client side que interagem com o HTML. Usada por cerca de 77% dos 10 mil sites mais visitados do mundo, jQuery é a mais popular das bibliotecas JavaScript. Aqui você aprende a desenvolver com jQuery!</p>
                    <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y H:i:s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img src="img/04.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                    <h1>jQuery</h1>
                    <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida para simplificar os scripts client side que interagem com o HTML. Usada por cerca de 77% dos 10 mil sites mais visitados do mundo, jQuery é a mais popular das bibliotecas JavaScript. Aqui você aprende a desenvolver com jQuery!</p>
                    <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y H:i:s'); ?></time> em <b>Matérias</b></span>
                </article>

                <footer>
                    <img src="img/05.png" alt="Confira o curso completo de HTML5 do Jeito Certo!" title="Confira o curso completo de HTML5 do Jeito Certo!"/>
                    <h1>Curso HTML5 do Jeito Certo!</h1>
                    <p>Aprenda a Utilizar Todo o Poder do HTML5 Semântica Somando a Avançadas Técnicas de SEO para Criar Sites Altamente Lucrativos e que Geram Resultados rápidos e eficientes!</p>
                    <a href="http://prowebolamundo.16mb.com/" title="Conheça o curso de HTML5 do Jeito Certo" target="_blank">Conhecer Agora! </a>
                </footer>
            </section>
            <!-- O CURSO -->

            <section>
                <header>
                    <h1>Vídeo aulas do Curso:</h1>
                    <p class="tagline">Confira algumas aulas do curso de HTML5!</p>

                </header>

                <div>
                    <article>
                        <img src="img/03.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>jQuery</h1>
                        <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida... </p>
                    </article>

                    <article>
                        <img src="img/02.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>CSS e CSS3</h1>
                        <p>Cascading Style Sheets (ou simplesmente CSS) é uma linguagem de folhas de... </p>
                    </article>

                    <article>
                        <img src="img/03.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>jQuery</h1>
                        <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida... </p>
                    </article>

                    <article>
                        <img src="img/03.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>jQuery</h1>
                        <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida... </p>
                    </article>

                    <article>
                        <img src="img/02.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>CSS e CSS3</h1>
                        <p>Cascading Style Sheets (ou simplesmente CSS) é uma linguagem de folhas de... </p>
                    </article>

                    <article>
                        <img src="img/03.jpg" title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]"/>
                        <h1>jQuery</h1>
                        <p>jQuery é uma biblioteca JavaScript cross-browser desenvolvida... </p>
                    </article>
                </div>

                <aside>
                    <header>
                        <h1>Comentários: </h1>
                    </header>

                    <article>
                        <img src="img/eu1.jpg" title="Comentário de João L Kievel" alt="[Comentário de João L Kievel]"/>
                        <h1><span>Comentário de </span> João L Kievel</h1>        
                        <p>Seja em termos de metodologia de ensino, capacitação do instrutor, conteúdo extremamente rico, vídeo aulas</p>
                    </article>

                    <article>
                        <img src="img/eu1.jpg" title="Comentário de Manoel Elias" alt="[Comentário de Manoel Elias]"/>
                        <h1><span>Comentário de </span> Manoel Elias</h1>        
                        <p>Seja em termos de metodologia de ensino, capacitação do instrutor, conteúdo extremamente rico, vídeo aulas</p>
                    </article>
                </aside>
            </section>
            <!--VIDEO AULAS-->

            <article>
                <header>
                    <h1>Entre em Contato:</h1>
                    <p class="tagline">Este formulário está aqui apenas para estudos do curso de HTML5!</p>

                </header>

                <form action="" method="post" >
                    <label>
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe seu nome:" placeholder="Informe seu Nome:" required/>
                    </label>
                    <label>
                        <span>E-mail:</span>
                        <input type="email" name="email" title="Informe seu email!" placeholder="Informe seu email!" required/>
                    </label>
                    <label>
                        <span>Mensagem:</span>
                        <textarea rows="3" name="mensagem" title="Deixe sua mensagem!" placeholder="Deixe sua Mensagem!" required=""></textarea>
                        <img src="img/ajax-loader.gif" title="Aguarde, Enviando Mensagem!" alt="[Aguarde, Enviando Mensagem!]" />
                        <button>Enviar Contato!</button>
                    </label>
                </form>
            </article>


            <!-- CONTATO -->
        </main>
        <!--FECHA CONTEÚDO-->

        <footer>
            <h1>Curso de HTML5</h1>
            <nav>
                <h1>Pro Web - Olá Mundo</h1>
                <ul>
                    <li><a href="http://prowebolamundo.16mb.com/" title="Pro Web - Olá Mundo" target="_blank">Pro Web - Olá Mundo</a></li>
                    <li>|</li>
                    <li><a href="#" title="Pro Web - Olá Mundo No Facebook" target="_blank">Facebook</a></li>
                    <li>|</li>
                    <li><a href="#" title="Pro Web - Olá Mundo No YouTube" target="_blank"></a>YouTube</li>
                </ul>

            </nav>
        </footer>
        <!--FECHA RODAPE-->
        <div id="fb-root"></div>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=238717433002997";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>
