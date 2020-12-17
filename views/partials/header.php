<?php
use helpers\View;

$pageTitle = $pageTitle ?? 'Huzzidiel Harrison';
$pageDescription = $pageDescription ?? 'My portfolio';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?= $pageDescription ?>"/>

    <title><?= $pageTitle ?></title>

    <link href="/dist/app.css" rel="stylesheet">
</head>
