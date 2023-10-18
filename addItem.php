<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');

    $intitule = post('intitule');
    
    $items =getItems();
    $items[] = [
        'id'=> uniqid(),
        'checked'=>false,
        'intitule' => $intitule
    ];

    saveItems($items);
    header('Location:index.php');

