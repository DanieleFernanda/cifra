<?php
include 'cesar.php';                                   
$mensagem   = $_POST['mensagem'];                
$numero   = $_POST['numero'];                
$realiza     = $_POST['realiza'];                 
$saida    = "";                                             

if($_POST && $mensagem != "" && $numero != ""){
//chamando a função para encriptar
if($_POST['realiza'] == "Encriptar"){
$cifra    = new Cesar($mensagem, $numero);
$saida = $cifra->encode();
}
//chamando a função para decriptar
if($_POST['realiza'] == "Decriptar"){
$cifra    = new Cesar($mensagem, $numero);
$saida = $cifra->decode();
}
}
?>
<html>
<head> <meta charset="UTF-8">
<title> Cifra de César </title>
</head>
<body>
<h1>César</h1><hr>
<form method="post">
<strong>Mensagem para encriptar/decriptar:</strong> <br>
<textarea name="mensagem" style="width:500px;border:1px solid #555"><?php echo $_POST['mensagem']; ?></textarea><br>
<strong>Número :</strong>
<input type="text" name="numero" style="width:30px;border:1px solid #555" value="<?php echo $_POST['numero']; ?>"> |
<input type="submit" name="realiza" value="Encriptar"> |
<input type="submit" name="realiza" value="Decriptar">
</form>
<?php
if($saida != ""){
echo "<strong> Resultado da criptografia </strong> <br> \n";
echo "<div class='mensagem'>" . $saida . "</div>";
}
?>
</body>
</html> 
