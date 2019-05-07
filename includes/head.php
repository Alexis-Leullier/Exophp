<?php
$local = local_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
die(var_dump($local));
?>



<!DOCTYPE html>
<html lang="<?php echo $locale; ?>" dir="ltr">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
