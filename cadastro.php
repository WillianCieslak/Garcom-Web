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

                $('#salvar').click(function() {

                    $.post('cadastro/validar', $('#form').serialize(), function(data) {
                        alert(data);
                        $('#form').attr('action', 'inicial');
                        $('#form').submit();
                    });

                });

                $('#home').click(function() {
                    $('#form').attr('action', 'inicial');
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
                    <a class="navbar-brand" id="home" href="index.php">HOME</a>
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
                        <input type="text" class="form-control" id="nome" name="nome"
                               placeholder="Nome Completo" required> </br>
                        <input type="email" class="form-control" id="email" name="email"  
                               placeholder="Email" required> </br>
                        <input type="password" class="form-control" id="senha" name="senha"
                               placeholder="Senha" required> </br>
<!--                        <input type="password" class="form-control" id="confirmar_senha" 
                               placeholder="Confirmar Senha" required>-->
                    </div>     
                    <input type="submit" class="btn btn-default" id="salvar" placeholder="Cadastrar" value="Cadastrar">
                    <!--<a class="btn btn-default" id="salvar">Salvar</a>-->                   
                </form>
            </div>
        </div>

        <!--     --------------------------------------------------------------------------------- 
         #CONTEÚDO 
         --------------------------------------------------------------------------------- -->
        <div class="container" id="divConteudo">
            <div class="jumbotron">
                <div id="conteudo">
                    <h1>Não está cadastrado ainda ?</h1>
                    <h3>Crie seu cadastro agora, e veja como melhorar o gerenciamento do seu estabelecimento !</h3>
                    <img src="resources/imagens/caneca_logo.png" alt="Caneca Logo" id="logo_caneca">
                </div>
            </div>
        </div>




        <footer class="nav navbar-fixed-bottom" id="footer">
            <p>© Projeto Integrador - Faculdade Dom Bosco / 2014</p>
        </footer>
    </body>
</html>
