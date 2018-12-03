<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/examples/my-components/news/#',
    'RULE' => NULL,
    'ID' => 'demo:news',
    'PATH' => '/examples/my-components/news_sef.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/content/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/content/articles/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/content/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/content/news/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/novosti/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
