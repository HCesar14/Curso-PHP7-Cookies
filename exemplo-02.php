<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){ //verifica se existe o cookie atraves do nome do cookie

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"], true); //converter pra array sempre coloque true

	echo $obj["empresa"]; // unica informacao salva no cookie é empresa
}

?>