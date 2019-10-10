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
    // function name(TipoParametro Var):TipoRetorno
    function get(Exemplo1 $v):bool
    {
        // ...
    }
}

/**
 * Caso não seja retornado o tipo correto, o php tenta converter
 * A menos que seja utilizado: declare(strict_types=1);
 */
