<?php
// conectar no banco Dev
//$connect = mysqli_connect('localhost','root','','sitelsc');

// conectar banco de Prod
$connect = mysqli_connect('localhost','id1952072_luciano','lsc123','id1952072_sitelsc');
$query = mysqli_query($connect, "SELECT name, email, phone, message FROM comentario");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pesquisa contatos efetuados">
    <meta name="author" content="Luciano de Souza Coelho">

    <title>Site LSC - Pesquisa Contato</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Luciano de Souza Coelho</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Login: admin</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pesquisa
                    <small>Contatos Efetuados</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Pesquisa - Contato</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
               <!-- incluir aqui pesquisa do banco PHP -->
               <?php
                    while($aux = mysqli_fetch_assoc($query)){
                        echo "---------------------------------------------------------------------------------------------"."<br/>";
                        echo "Nome: ".$aux["name"]."<br/>";
                        echo "Email ".$aux["email"]."<br/>";
                        echo "Telefone: ".$aux["phone"]."<br/>";
                        echo "Mensagem: ".$aux["message"]."<br/>";
                    }
                ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; LSC Site 2018 - Portfólio WEB/Fatec Carapicuiba</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    
</body>

</html>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>