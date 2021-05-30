<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo -  Download</title>
    <link rel="stylesheet" type="text/css" href="css/curriculo.css">
</head>

<?php
    ini_set('default_charset', 'utf-8');
    if($_POST){
    $nome = $_POST['nome'];   
    $email = $_POST['email'];   
    $profissao = $_POST['profissao'];    
    $idade = $_POST['idade']; 
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone']; 
    $cidade = $_POST['cidade'];  
    $estado = $_POST['estado'];
    $estadocivil = $_POST['estadocivil'];
    $filho = $_POST['filho'];
    $experiencias = $_POST['experiencias'];
    $escolaridade = $_POST['escolaridade'];
    $arquivo = $_FILES['foto']['name'];
    
    $a = "$nome.html";

    $arquivo = fopen($a, 'a+');
    
    $texto = '<h1>Bem vindo(a) '.$nome. '!</h1>';
    $texto .= '<h3 style="color:red">'.$email.'</h3>';
    $texto .= '<h4>Seu telefone é: '.$telefone.'</h4>';
    
    
    fwrite($arquivo,$texto);
    //para escrever no arquivo
    
    fclose($arquivo);
    //para fechar o arquivo
}


?>

<?php

function calculoIdade($date){
    $date = date('Y-m-d', strtotime(str_replace("/", "-", $idade)));
            $time = strtotime($date);
            
            if($time === false){
                return '';
            }
            $year_diff = '';
            $date = date('Y-m-d', $time);
            
            list ($year, $month, $day) = explode('-', $date);
            
            $year_diff = date('Y') - $year;
            $month_diff = date('m') - $month;
            $day_diff = date('d') -$day;
            
            if ($day_diff < 0 && $month_diff < 0 || $month_diff < 0){
                $year_diff--;
            }
            return $year_diff;
            
            echo "Seu nome é $nome, você tem ".calculoIdade($date)." anos.";
        }
        
        ?>
<body>
    <div class="container">
       <menu>
          <i class="fas fa-file"></i><h1>Currículo</h1>
        </menu>
        <text>
            <h1>'.mb_strtoupper($nome).'</h1>
            <br>
            <h3>'.$idade.'</h3>
            <h3><i class="fas fa-envelope-square"></i>'.$email.'</h3>
            <br>
            <h3><i class="fas fa-phone-square"></i>'.$telefone.'</h3>
            <br>
            <h3><i class="fas fa-user-tie"></i>'.$profissao.'</h3>
        </text>

        <main>
          <h3><i class="fas fa-map-marker-alt"></i>'.$endereco.'</h3>
          <br>
          <h3><i class="fas fa-city"></i>'.$cidade.'-'.$estado.'</h3>

        </main>

        <div>
          content
        </div>

        <footer>
          footer
        </footer>
        
    </div>
</body>
</html>