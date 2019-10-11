<?php
// Closure::call();

class Exemplo
{
    private $x = 1;
}

/////////////////////////////////////////// Antes
$getABC = function()
{
    return $this->x;
};

$getX = $getABC->bindTo(new Exemplo, "Exemplo");
echo $getX();

/////////////////////////////////////////// Depois
$getX2 = function()
{
    return $this->x;
};
echo $getX->call(new Exemplo);
// echo $getABC->call(new Exemplo);
