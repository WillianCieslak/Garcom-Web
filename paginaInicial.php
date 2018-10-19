<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Página inicial Garçom Amigo">
        <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
        <meta name="author" content="Willian Cieslak, Felipe Montilla, Cristhian Kruger, Everton Oliveira, Mariana Sentone">

        <link rel="stylesheet" href="resources/css/paginaInicial.css">
        <title>Pagina Inicial</title>
    </head>
    <body>
        <script src="resources/js/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <script type="text/javascript">
            $(document).ready(function() {



            });
        </script>
        <!--     --------------------------------------------------------------------------------- 
                 #HEADER TOP 
                 --------------------------------------------------------------------------------- -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
            <div class="container">                
                <div class="navbar-header">
                    <span class="navbar-brand">BEM VINDO(A) WILLIAN</span>
                </div>
                <div>
                    <!--                    <button>
                                            <a class="glyphicon glyphicon-cog"></a>
                                        </button>
                                        <a class="glyphicon glyphicon-cog"></a>-->



                    <div class="btn-group" id="gerenciar">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Gerenciar <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Alterar Dados</a></li>
                            <li><a href="#">Excluir conta</a></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--     --------------------------------------------------------------------------------- 
     #CONTEUDO
     --------------------------------------------------------------------------------- -->
    <div class="jumbotron" id="jumbColor">
        <div class="container">
            <h1>Garçom Amigo</h1>
        </div>
        <div>
            <img src="resources/imagens/logo_garcom.png" alt="Imagem Garcom Amigo" class="imagem" id="logo">
            <img src="resources/imagens/carregando.gif" alt="Imagem Garcom Amigo" class="imagem" id="caneca">          
        </div>
    </div>
    <div class="jumbotron" id="cont">
        <h2>Fique por dentro e acompanhe as novidades !</h2>
    </div>

</div>

<!--     --------------------------------------------------------------------------------- 
 #FOOTER
 --------------------------------------------------------------------------------- -->
<footer class="nav navbar-fixed-bottom" id="footer">
    <p>© Projeto Integrador - Faculdade Dom Bosco / 2014</p>
</footer>

</body>
</html>
