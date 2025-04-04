<?php
include_once 'header.php';//evita repetição quando atualizado.

        echo "A diferença entre include e require : é que require gera um erro fatal se o arquivo não for encontrado,<br> enquanto include gera um aviso e continua a execução do script. ";

require 'footer.php';
?>