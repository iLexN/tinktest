<?php

//ac open
$app->post('/{owner:\d+}/account', 'Tink\Controller\Account\Open')
        ->add($checkOwner);
//ac close
$app->delete('/account/{id:\d+}', 'Tink\Controller\Account\Close')
        ->add($checkAccount);
//ac get info
$app->get('/account/{id:\d+}', 'Tink\Controller\Account\Info')
        ->add($checkAccount);
//with draw / deposit money
$app->post('/account/{id:\d+}/{action:withdraw|deposit}', 'Tink\Controller\Account\WithDraw')
        ->add($checkAccount);
$app->post('/account/{id:\d+}/transfer/{toid:\d+}', 'Tink\Controller\Account\Transfer')
        ->add($checkAccount);

$app->get('/[{params:.*}]','Tink\Controller\Info');