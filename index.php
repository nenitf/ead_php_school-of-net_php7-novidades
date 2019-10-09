<?php

// força tipagem no php
declare(strict_types=1); 

$php7 = function(String $title):array{
    return [
        $title."\n",
        "PHP on another level",
        "More perforance",
        "2x faster"
    ];
};

foreach($php7("News in PHP 7") as $p) {
    echo "$p\n";
}
