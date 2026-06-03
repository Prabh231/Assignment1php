<?php

/**
 * LessonWeatherHandler Class
 * Handles weather API requests
 */
class LessonWeatherHandler
{
    private $targetUrl;
    private $securityKey;

    public function __construct($incomingUrl, $incomingKey)
    {
        $this->targetUrl = $incomingUrl;
        $this->securityKey = $incomingKey;
    }

    public function fetchWeather($selectedCity = "Toronto")
    {
        $endpointUrl =
            "{$this->targetUrl}?q=" .
            urlencode($selectedCity) .
            "&appid={$this->securityKey}&units=metric";

        $rawJsonString = @file_get_contents($endpointUrl);

        if ($rawJsonString === false) {
            return null;
        }

        return json_decode($rawJsonString);
    }
}