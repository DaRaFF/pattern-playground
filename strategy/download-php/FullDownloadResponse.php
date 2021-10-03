<?php

class FullDownloadResponse implements ResponseStrategyInterface
{

    public function generateResponse()
    {
        $response = new Response();
        $response->setType("full download response");

        return $response;
    }
}