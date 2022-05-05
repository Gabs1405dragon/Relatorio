<?php  

$atualizar = new PDO('mysql:dbname=relatorios;host=localhost;port=3332','root','123456');

$atualizar = $atualizar->prepare("SELECT * FROM tb_relatorio ");
$atualizar->execute();
$atualizar = $atualizar->fetchAll();


die(json_encode($atualizar));

?>
