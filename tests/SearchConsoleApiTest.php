<?php

require_once 'vendor/autoload.php';

use HannesKirsman\GoogleSearchConsole\SearchConsoleApi;

$searchConsole = new SearchConsoleApi();
$options = SearchConsoleApi::getDefaultOptions();
$options['site_url'] = 'http://www.example.com/';
$options['start_date'] = date('Y-m-d', strtotime("-3 days"));;
$options['end_date'] = date('Y-m-d', strtotime("-3 days"));;
$options['setDimensionFilterGroups'] = array(
  'filters' => array (
    'dimension' => 'page',
    'operator' => 'contains',
    'expression' => '/SUBPATH/',
  ),
);

$rows = $searchConsole->getRows($options);
print_r($rows);