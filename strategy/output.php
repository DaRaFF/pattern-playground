<?php

require( __DIR__ . '/ResponseStrategyInterface.php');
require( __DIR__ . '/FullDownloadResponse.php');
require( __DIR__ . '/PartialDownloadResponse.php');
require( __DIR__ . '/Response.php');
require( __DIR__ . '/ResponseStrategyFactory.php');

echo "\n\n\n\nPartial Download Response\n";
$responseStrategy = ResponseStrategyFactory::getResponseStrategy(true);
$partialDownloadResponse = $responseStrategy->generateResponse();
var_dump($partialDownloadResponse);

echo "\n\n\n\nFull Download Response\n";
$responseStrategy = ResponseStrategyFactory::getResponseStrategy(false);
$fullDownloadResponse = $responseStrategy->generateResponse();
var_dump($fullDownloadResponse);