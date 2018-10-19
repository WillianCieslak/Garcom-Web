<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Página inicial Garçom Amigo">
        <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
        <meta name="author" content="Willian Cieslak, Felipe Montilla, Cristhian Kruger, Everton Oliveira, Mariana Sentone">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/index.css">
        <title>Página Inicial</title>
    </head>
    <body>
        <script src="resources/js/jquery-1.11.0.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#saibaMais').click(function() {
                    $('#telasNavegacao').slideToggle('slow');
                });

                var action1;
                $('#botaoAbrir01').click(function() {
                    if (action1 == 1) {
                        $('#abrirDetalhes1').show();
                        $('#abrirDetalhes11').hide();
                        action1 = 0;
                    } else {
                        $('#abrirDetalhes1').hide();
                        $('#abrirDetalhes11').show();
                        action1 = 1;
                    }
                });


                var action2;
                $('#botaoAbrir02').click(function() {
                    if (action2 == 1) {
                        $('#abrirDetalhes2').show();
                        $('#abrirDetalhes22').hide();
                        action2 = 0;
                    } else {
                        $('#abrirDetalhes2').hide();
                        $('#abrirDetalhes22').show();
                        action2 = 1;
                    }
                });

                var action3;
                $('#botaoAbrir03').click(function() {
                    if (action3 == 1) {
                        $('#abrirDetalhes3').show();
                        $('#abrirDetalhes33').hide();
                        action3 = 0;
                    } else {
                        $('#abrirDetalhes3').hide();
                        $('#abrirDetalhes33').show();
                        action3 = 1;
                    }
                });

                $('#cadastrar').click(function() {
//                    $('#form').attr('action', 'cadastro');
//                    $('#form').submit();
                });

                $('#entrar').click(function() {
//                    $.post('inicial/entrar', function(data) {
//                        alert(data);
//                        $('#form').attr('action', 'paginaInicial');
//                        $('#form').submit();

                    });

                });

//            });
        </script>

        <!-- --------------------------------------------------------------------------------- -->
        <!-- #HEADER TOP -->
        <!-- --------------------------------------------------------------------------------- -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">PI BOTECO</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form" id="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Senha" class="form-control" required>
                        </div>
                        <!--<input type="submit" class="btn btn-success" id="entrar" placeholder="Entrar" value="Entrar"> &nbsp;-->
                        <a class="btn btn-success" href="paginaInicial.php"  id="entrar">Entrar</a> &nbsp;
                        <a id="cadastrar" href="cadastro.php">Cadastre-se aqui!</a>
                    </form>
                </div>
            </div>
        </div>  
        <!-- --------------------------------------------------------------------------------- -->
        <!-- #JUMBOTRON --> 
        <!-- --------------------------------------------------------------------------------- -->
        <div class="jumbotron">
            <div id="divImagemLogo">
                <img src="resources/imagens/logo_garcom.png" alt="Imagem Garcom Amigo" class="imagem">
            </div>
            <div class="container">

                <h1>Garçom Amigo</h1>
                <p>O Garçom Amigo se trata de um aplicativo mobile que cria a mediação entre clientes e o estabelecimento comercial 
                    (bares e restaurantes), otimizando o serviço de garçom, facilitando a gestão dos pedidos e clientes no estabelecimento, 
                    visando melhoria na administração e dos recebimentos. Criando um vínculo entre a conta e o cadastro do cliente estreitando o 
                    relacionamento de estabelecimento/cliente.</p>

                <div id="telasNavegacao">
                    <h3 class="telasNavegacao">Telas de Navegação Android:</h3>
                    <p class="telasNavegacao"></p>
                    <div id="imagens">
                        <img src="resources/imagens/main.png" alt="Tela inicial" class="imagem" id="imgMain">
                        <img src="resources/imagens/cadastro.png" alt="Tela de cadastro" class="imagem" id="imgCadastro">
                        <img src="resources/imagens/menu.png" alt="Tela Menu" class="imagem" id="imgMenu">
                        <img src="resources/imagens/cardapio.png" alt="Tela cardápio" class="imagem" id="imgCardapio">
                        <img src="resources/imagens/detalhes.png" alt="Tela detalhes" class="imagem" id="imgDetalhes">
                    </div>
                </div>
                <p><a class="btn btn-primary btn-lg" role="button" id="saibaMais">Saiba mais »</a></p>
            </div>

        </div>

        <!-- --------------------------------------------------------------------------------- -->
        <!-- #CONTAINER NOTICIAS - INFORMAÇÕES -->
        <!-- --------------------------------------------------------------------------------- -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Como Funciona</h2>
                    <div id="abrirDetalhes1">
                        <p>Pelo aplicativo o cliente acessará o cardápio do estabelecimento através de um login previamente cadastrado e realizará
                            seu pedido que vai diretamente para a cozinha/balcãp, sem a necessidade de o garçom receber o pedido, anotar na comanda de serviços...
                        </p>
                    </div>
                    <div id="abrirDetalhes11">
                        <p>Pelo aplicativo o cliente acessará o cardápio do estabelecimento através de um login previamente cadastrado e realizará
                            seu pedido que vai diretamente para a cozinha/balcão, sem a necessidade de o garçom receber o pedido, anotar na comanda de serviços,
                            enviar o pedido para o local de preparo e aguardar a entrega. Assim erros de anotações em comandas ou pedidos trocados
                            serão reduzidos, uma vez que o próprio cliente estará com o cardápio em mãos para pedir. Não somente será realizado pedido
                            pelo aplicativo, mas reserva de mesa, controle do total de conta no dia e outras funcionalidades estarão presentes nele. 
                            Com essa aplicação o estabelecimento aumentará a velocidade do recebimento dos pedidos e o consumo dos clientes, pois cairão
                            diretamente na cozinha ou balcão para facilitar.</p>
                    </div>
                    </br>
                    <p id="botaoAbrir01"><a class="btn btn-default" href="#" role="button">Mais detalhes »</a></p>
                </div> 
                <div class="col-md-4">
                    <h2>Quem somos</h2>
                    <div id="abrirDetalhes2">
                        <p>Somos uma empresa que foi desenvolvida em 2013/2014, que tem o Intuito de satisfazer a demanda de bares e restaurantes. Trata-se de um projeto 
                            desenvolvido entre alunos da faculdade Dom Bosco. Em função do crescimento da Internet e celulares com...</p>
                    </div>
                    <div id="abrirDetalhes22">
                        <p>Somos uma empresa que foi desenvolvida em 2013/2014, que tem o Intuito de satisfazer a demanda de bares e restaurantes. Trata-se de um projeto 
                            desenvolvido entre alunos da faculdade Dom Bosco. Em função do crescimento da Internet e celulares com sistemas de Android e IOS,
                            com excelentes relações entre os clientes e a capacidade de se adequar a necessidade dos mesmos</p>
                    </div>
                    </br>
                    <p id="botaoAbrir02"><a class="btn btn-default" href="#" role="button">Mais detalhes »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Contato</h2>
                    <div id="abrirDetalhes3">
                        <p>Endereço: Av. Presidente Wesceslau Braz, 1172 - Vila Guaira - Curitiba/PR </br>
                            Telefone: (41) 3213-5205 </br>
                            E-mail: piboteco@yahoo.com.br </p>
                        Desenvolvedores:... </br>
                    </div>
                    <div id="abrirDetalhes33">
                        <p>Endereço: Av. Presidente Wesceslau Braz, 1172 - Vila Guaira - Curitiba/PR </br>
                            Telefone: (41) 3213-5205 </br>
                            E-mail: piboteco@yahoo.com.br </p>
                        Desenvolvedores: </br>
                        <a>cnkruger@yahoo.com.br</a> </br>
                        <a>ewerthooon@hotmail.com</a> </br>
                        <a>montilla.felipe@yahoo.com</a> </br>
                        <a>sentone@hotmail.com</a> </br>
                        <a>willian.cieslak@hotmail.com</a>
                    </div>
                    </br>
                    <p id="botaoAbrir03"><a class="btn btn-default" href="#" role="button">Mais detalhes »</a></p>
                </div>
            </div>


            <hr>

            <!-- --------------------------------------------------------------------------------- -->
            <!-- #FOOTER -->
            <!-- --------------------------------------------------------------------------------- -->
            <footer class="nav navbar-fixed-bottom" id="footer">
                <p>© Projeto Integrador - Faculdade Dom Bosco / 2014</p>
            </footer>
        </div>

    </body>
</html>
