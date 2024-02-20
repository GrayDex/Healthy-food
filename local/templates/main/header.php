<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>
<!doctype html>
<html lang="ru">

<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/include/templ/assets.php"); ?>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>

<body class="body">
<div><?php $APPLICATION->ShowPanel() ?></div>
<div class="wrapper">
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/include/templ/header.php"); ?>
    <main class="main">