<?php
// Spaceship

/**
 * Iguais retorna 0
 * Esquerda maior retorna -1
 * Direita maior retorna 1
 */

echo 1<=>1; // 0
echo 2<=>2; // 0
echo 3<=>3; // 0
echo 2.1<=>4.2/2; // 0

echo 1<=>2; // -1
echo 1<=>7; // -1
echo 1<=>9; // -1
echo "a"<=>"b"; // -1
echo [1,2]<=>[1,2,3]; // -1

echo 2<=>1; // 1
echo 5<=>1; // 1
echo 9<=>6; // 1
echo [1,2,4]<=>[1,2,3]; // 1
