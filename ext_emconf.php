<?php

$EM_CONF[$_EXTKEY] = array (
  'title' => 'KMR Config',
  'description' => 'KMR Config',
  'category' => 'plugin',
  'version' => '1.0.0',
  'state' => 'stable',
  'clearcacheonload' => 0,
  'author' => 'KMR Systems',
  'author_email' => 'office@kmr.systems',
  'author_company' => 'KMR Systems',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '12.0.0-12.4.99',
      'php' => '8.0.0-8.2.99',
      'kmr5' => '5.0.0-5.999.999',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

