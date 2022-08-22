<?php
  $app=[
    "business"=>"INLAD",
    "lenguage"=>"es-MX",
    "store_name"=>"INLAD SAC | Proveedores de equipos de Laboratorio",
    "phone"=>["+51 947 030 094","+51 01 531 00 03","+51 939 295 001","+51 947 030 094","+51 920 268 526"],
    "notice"=>"Envío gratis a partir de S/500.00",
    "address"=>["peru"=>["AV.UNIVERSITARIA 2786 MZ G LT 43 SEGUNDO PISO, Los Olivos 15302, Perú","https://www.google.com/maps/place/INLAD+SAC/@-12.0050501,-77.0825345,15z/data=!4m2!3m1!1s0x0:0x96d921fd4a997106?sa=X&ved=2ahUKEwj0lMTqtcrkAhUOR6wKHcbJC0UQ_BIwDnoECAgQCA"]],
    "email"=>["ventas@inladsac.com","info@inladsac.com","gerenciacomercial@inladsac.com"],
    "logo"=>"mi-logo.jpg",
    "icon_app"=>"mi-icono-app.jpg",
    "web_url_secure"=> $_SERVER['HTTP_HOST'],
    "base_url_admin"=>"/admin_idkpa/",
    "url_canonical" => ($_SERVER['REQUEST_URI']=="/")?"//".$_SERVER['HTTP_HOST']:$_SERVER['REQUEST_URI'],
    "meta_description"=>"",
    "meta_keywords"=>"",
    "meta_image"=>"",
    "facebook"=>"https://www.facebook.com/inladSac",
    "twitter"=>"https://twitter.com/inladsac",
    "youtube"=>"https://www.youtube.com/channel/UCNShp-X9zYEQHsbPxWH6zEA/channels?view=56",
    "date_now"=> date('m-d-Y h:i:s a', time()),
    "ip"=>getenv('HTTP_CLIENT_IP'),
    "ip_base"=>$_SERVER['REMOTE_ADDR'],
  ];

  $mi_number=$app['phone'][rand(0,count($app['phone'])-1)];
  $mi_email=$app['email'][rand(0,count($app['email'])-1)];

  include_once("bd.php");
?>