<?php

require_once ("vendor/autoload.php");

use Slim\App;
use Slim\Container;

$settings = array(
    "settings" => array(
        "displayErrorDetails" => true
    )
);
$container = new Container($settings);
$app = new App($container);

$app->get("/get", function($request, $response){
    $parameter = $request->getQueryParams();
    $result=array(
        "nama" => $parameter["nama"],
        "ttl" => $parameter["ttl"],
        "alamat" => $parameter["alamat"],
        "status" => $parameter["status"],
        "agama" => $parameter["agama"],
    );
    return $response->withJson($result);
});
$app->get("/get1", function($request, $response){
    $parameter = $request->getQueryParams();
    $result=array(
        "nama_sekolah" => $parameter["nama_sekolah"],
        "yahoo_sekolah" => $parameter["yahoo_sekolah"],
        "alamat_sekolah" => $parameter["alamat_sekolah"],
        "no_tlp_sekolah" => $parameter["no_tlp_sekolah"],
    );
    return $response->withJson($result);
});

$app->post("/post", function($request, $response){
    $parameter = $request->getParsedBody();
    $result=array(
        "ID" => $parameter["ID"],
        "email" => $parameter["email"],
        "password" => $parameter["password"],
        "password_cadangan" => $parameter["password_cadangan"],
        
    );
    return $response->withJson($result);
});

$app->post("/post1", function($request, $response){
    $parameter = $request->getParsedBody();
    $result=array(
        "dari_bank" => $parameter["dari_bank"],
        "nama_pengirim" => $parameter["nama_pengirim"],
        "kepada_bank" => $parameter["kepada_bank"],
        "nama_penerima" => $parameter["nama_penerima"],
        "no_rekening" => $parameter["no_rekening"],

    );
    return $response->withJson($result);
});

$app->run();