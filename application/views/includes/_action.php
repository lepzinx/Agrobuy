<?php
// Variavel $action vem do arquivo _page-title.php

//Home
if($action == "" || $action == 01){ include("_home.php"); }

//404
elseif ($action == 404){ include("404.html"); }

// Caso não atenda a nenhuma condição acima, exibe uma
// página de erro.
else { include("404.html"); }
?>