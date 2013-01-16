<?php

class PartialDownloadResponse implements ResponseStrategyInterface {

    public function generateResponse()
    {
        $response = new Response();
        $response->setType("partial download response");

        return $response;
    }
}