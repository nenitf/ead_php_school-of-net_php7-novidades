<?php
// Null Coalescing Operator

// http://localhost:8080/
// http://localhost:8080/?nome=Felipe
$nome = $_GET["nome"] ?? "Anônimo";
// $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Anônimo";

echo "Hello $nome";

