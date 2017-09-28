<?php

$data = array(
	"empresa"=>"HCode Treinamentos"
);

setcookie("NOME_DO_COOKIE",json_encode($data), time() + 3600); //nome cookie, conteudo do arquivo cookie e tempo de expiração do cookie agr + tempo segundos 


echo "Cookie criado";
?>