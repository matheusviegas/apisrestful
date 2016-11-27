<?php


$app->get('/', function () use ($app) {

    echo "<b>[GET]</b> /clientes - Lista Todos os Clientes <br />";
    echo "<b>[GET]</b> /clientes/ID - Lista os Dados do Cliente com o ID Informado <br />";
    echo "<b>[POST]</b> /clientes - Adiciona um Novo Cliente <br />";
    echo "<b>[PUT]</b> /clientes/ID - Atualiza os Dados do Cliente com o ID Informado <br />";
    echo "<b>[DELETE]</b> /clientes/ID - Delete o Cliente com o ID Informado";
});


   $app->get('clientes','ClienteController@index');

   $app->get('clientes/{id}','ClienteController@get');

   $app->post('clientes','ClienteController@create');

   $app->put('clientes/{id}','ClienteController@update');

   $app->delete('clientes/{id}','ClienteController@delete');
