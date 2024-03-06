<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => NULL,
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => 'bitrix:news.list',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/Главная/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
