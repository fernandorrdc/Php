<?php
namespace MeuProjeto\Funcoes;

function formatarData($data) {
    return date('d/m/Y', strtotime($data));
}
