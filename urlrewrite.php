<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/new-news/([0-9]+)/([0-9]+)/?clear_cache=Y#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => NULL,
    'PATH' => '/new-news/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/new-news/([0-9]+)/([0-9]+)/#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => NULL,
    'PATH' => '/new-news/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/catalog/([0-9]+)/([0-9]+)/#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => 'catalog/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/new-news/([0-9]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => NULL,
    'PATH' => '/new-news/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/',
    'RULE' => '',
    'ID' => '',
    'PATH' => 'catalog/index.php',
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
