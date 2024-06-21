<?php
include_once('config.php');

if(isset($_POST['submit'])){


   
   

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc =$_POST["data_nascimento"];
$cidade = $_POST['cidade'];
$estado  = $_POST['estado'];
$endereco = $_POST['end'];



$result = mysqli_query($conexao,"INSERT INTO gustavo(nome,senha,telefone,email,sexo,data_nas,cidade,estado,endereco)
VALUES('$nome','$senha','$telefone','$email','$sexo','$data_nasc','$cidade','$estado','$endereco')");
header('Location:sistema.php');

}else{
    print_r("erro");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <link rel="shortcut icon" href="arrow-right-square-fill.svg" type="image/x-icon">
    <title>Formulario | LG</title>

   

</head>
<body>
<a href="sistema.php"><img src="arrow-right-square-fill.svg" alt=""><strong>   back </strong></a>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><strong>Formulario de Clientes</strong></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="inome" class="inpuuser" required>
                    <label class="labelinput" for="">Nome Completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="imail" class="inpuuser" required>
                    <label class="labelinput" for="">E-mail</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="senha" id="isenha" class="inpuuser" required>
                    <label class="labelinput" for="">Password</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="itelefone" class="inpuuser" requerid
                     >
                    <label class="labelinput"for="">Celular</label>
                </div>
                <p>Sexo:</p>
                <div class="sexo">
                    <input type="radio" name="genero" id="feminino" value="feminino"checked>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="outro" value="outro">
                    <label for="outro">Outros</label>
                </div>
                <br><br>
                <div class="nas">
                    <strong><label for="outro">Data de Nascimento :</label></strong>
                    <input type="date" name="data_nasc" id="data_nascimento" class="in_nasc">
                    
                </div>
                <br><br>
                <div class="inputbox">
                   
                    <input type="text" name="cidade" id="cidade" class="inpuuser" required>
                  <label class="labelinput"for="cidade">Cidade:</label>
                    
                    
                </div>
                <br>
                <div class="inputbox">
                    
                    <input type="text" name="estado" id="estado" class="inpuuser" required>
                   <label class="labelinput"for="estado">Estado:</label>
                    
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="end" id="end" class="inpuuser" required>
                   <label class="labelinput"for="outro">Endereco:</label>
                </div>
                <br>
                <input id="sub" type="submit" name="submit" value="Enviar">
                <br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>