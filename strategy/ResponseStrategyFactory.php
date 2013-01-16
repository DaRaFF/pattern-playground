<?php

class ResponseStrategyFactory
{

    public static function getResponseStrategy($isRangeRequest)
    {
        if($isRangeRequest) {
            return new PartialDownloadResponse();
        } else {
            return new FullDownloadResponse();
        }
    }
}