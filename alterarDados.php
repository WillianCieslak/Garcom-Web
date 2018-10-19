<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Página inicial Garçom Amigo">
        <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
        <meta name="author" content="Willian Cieslak, Felipe Montilla, Cristhian Kruger, Everton Oliveira, Mariana Sentone">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/cadastro.css">
        <title>Cadastro</title>
    </head>
    <body>
        <script src="resources/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#home').click(function() {
                    $('#form').attr('action', 'paginaInicial');
                    $('#form').submit();
                });

            });
        </script>
        <!--     --------------------------------------------------------------------------------- 
                 #HEADER TOP 
                 --------------------------------------------------------------------------------- -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" id="home">PÁGINA INICIAL</a>
                </div>
            </div>
        </div>

        <!--     --------------------------------------------------------------------------------- 
         #FORMULÁRIO 
         --------------------------------------------------------------------------------- -->
        <div class="container" id="container">
            <div class="jumbotron">
                <form role="form" id="form">
                    <h2 class="well well-lg">CADASTRO</h2>
                    <div class="form-group divform">                        
                        <input type="text" class="form-control" id="nome" 
                               placeholder="Nome Completo" required> </br>
                        <input type="password" class="form-control" id="senha" 
                               placeholder="Senha" required> </br>
<!--                        <input type="password" class="form-control" id="confirmar senha" 
                               placeholder="Confirmar Senha" required>-->
                    </div>     
                    <input type="submit" class="btn btn-default" id="salvar" placeholder="Cadastrar" value="Cadastrar">
                    <!--<a class="btn btn-default" id="salvar">Salvar</a>-->                   
                </form>
            </div>
        </div>
        
        <img src="resources/imagens/caneca_logo.png" alt="Caneca Logo" id="caneca_form">

    </body>
</html>