<?php
// Verifica se a função crypt está disponível
if (function_exists('crypt')) {
    echo "A função crypt está disponível no servidor.";
} else {
    echo "A função crypt não está disponível no servidor.";
}
?>
