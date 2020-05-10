<?php
    
$manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
$up = new \MongoDB\Driver\BulkWrite;

$up->update(['nome'=>'Afronesio'],['$set'=>['nome'=>'Afronesio dos Santos']]);

$manager->executeBulkWrite('raiz.academicos',$up);