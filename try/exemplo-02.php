<?php
function trataNome($name){
    if(!$name){
        throw new Exception("Não foi informado um nome!", 1);
        
    }

    echo ucfirst($name)."<br>";
}

try {
    trataNome("Rodrigo");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage()."<br>";
}finally{
    echo "Executou o bloco try";
}