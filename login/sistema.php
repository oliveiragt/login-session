<?php 
session_start();
include 'conexao.php';
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
if(isset($_SESSION['login']) == true &&  !empty($_SESSION['login']))
{   
    $email=$_SESSION['login'];
  }
  else{
    
    header('Location:index.html');
  }

?>
<!doctype html>
<html lang="PT-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/oticaeva.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <title>Sistema</title>
    <!-- Custom styles for this template -->
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
    <?php 
    $nome=$dbn->query("SELECT * FROM usuario WHERE email='$email'");
    foreach($nome as $row){ ?>
        <div class="text-center col-sm-12">
           <h2>Seja bem-vindo <?php echo $row['nome']; ?>! </h2>
           <h4><a href="desloga.php">Realizar logout</a></h4>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
            </div>
    <?php } ?>
   
</body>

</html>