<?php
// Classes anônimas

interface Logger
{
    public function log(string $msg);
}

class App
{
    private $logger;

    public function getLogger():Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

// Classe comum
/*
class Logg implements Logger
{
    public function log(string $msg)
    {
        echo $msg;
    }
}
 */

$app = new App();
// $app->setLogger(new Logg);
$app->setLogger(new class implements Logger {
    public function log(string $msg)
    {
        echo $msg;
    }

});
var_dump($app->getLogger());

