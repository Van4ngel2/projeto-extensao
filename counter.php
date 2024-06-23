<?php
// Arquivo que armazenará o contador de acessos
$counterFile = 'counter.txt';

// Verifica se o arquivo existe, se não, cria com valor inicial 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Lê o valor atual do contador
$counter = (int)file_get_contents($counterFile);

// Retorna o valor do contador como resposta
echo $counter;
?>
