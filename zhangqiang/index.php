<?php
namespace zhangqiang;

class a{
    
    function method_a(){
        $b = new b;
        $b->show();
    }
}

$a = new a;
$a->method_a();