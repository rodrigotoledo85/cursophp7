<?php

function ola($texto = "Mundo", $periodo = "Boa Noite"){
    return "Ola $texto! $periodo<br>";
}

echo ola();
echo ola("", "Bom dia.");
echo ola("Rodrigo", "Boa Tarde.");
echo ola("Samuel", "Bom dia.");