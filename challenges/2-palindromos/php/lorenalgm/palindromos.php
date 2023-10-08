<?php

$palavra = strtolower($argv[1]);

$palavra_invertida = strrev($palavra);

$verifica_palindromo = $palavra == $palavra_invertida?"true":"false";

echo $verifica_palindromo;
