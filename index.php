<?php

class Exemplo1
{

}

class Exemplo2
{
    /* Tipos:
     * array
     * callable (funções)
     *
     ***** PHP 7
     * bool
     * float
     * int
     * String
     */
    function get(Exemplo1 $v)
    {
        // ...
    }
}

/**
 * Caso não seja passado o tipo correto, o php tenta converter
 * A menos que seja utilizado: declare(strict_types=1);
 */
