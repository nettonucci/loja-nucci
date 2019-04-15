<?php
function open_conexao(){
    $conexao = mysqli_connect("localhost", "root", "", "nucci_calcados");
    mysqli_set_charset( $conexao, 'utf8');
    if (!$conexao) {
        echo "Erro ao conectar no banco de dados....";
        exit;
    }
    return $conexao; 
}

function close_conexao($conexao) {
    if (!$conexao) {
        echo "Erro ao fechar banco MySql...";
        //exit;   
    }
     mysqli_close($conexao);
}

?>
