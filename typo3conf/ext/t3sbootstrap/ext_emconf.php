<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3sbootstrap".
 *
 * Auto generated 26-03-2024 15:07
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap Components',
  'description' => 'Startup extension to use bootstrap 5 classes, components and more out of the box. Example and info: www.t3sbootstrap.de',
  'category' => 'templates',
  'version' => '5.2.3',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author' => 'Helmut Hackbarth',
  'author_email' => 'typo3@t3solution.de',
  'author_company' => 't3solution',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.18-11.9.99',
      'container' => '1.6.0-2.99.99',
      'content_defender' => '3.2.2-3.99.99',
    ),
    'conflicts' => 
    array (
      'ws_scss' => '*',
      'dyncss' => '*',
      'gridelements' => '*',
    ),
    'suggests' => 
    array (
    ),
  ),
);

