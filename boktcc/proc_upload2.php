<?php
include("conexao.php");


$msg=false;
if(isset($_FILES['st_foto'])){



$extensao= strtolower(substr($_FILES['st_foto']['name'], -4));
$novo_nome=md5(time()) . $extensao;
$diretorio= "upload/";

move_uploaded_file($_FILES['st_foto']['tmp_name'], $diretorio.$novo_nome);



$sql_code= "INSERT INTO tb_usuario (st_foto) VALUES ($novo_nome)";
if ($mysqli->query($sql_code))

$msg = "Arquivo enviado com sucesso";
else
$msg= "Falha ao Enviar Arquivo";
}

header("Location : perfil.php")


?>












