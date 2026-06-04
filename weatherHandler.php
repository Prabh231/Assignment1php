<?php
/**
 * LessonWeatherHandler Class
 * Handles weather API requests
 */
class weatherHandler
{
    private $targetUrl;
    private $securityKey;
    public function __construct($incomingUrl, $incomingKey)
    {
        $this->targetUrl = $incomingUrl;
        $this->securityKey = $incomingKey;
    }
    /**
     * Pulls weather datasets from the anyAPI
     */
    public function fetchWeather($selectedCity = "Toronto")
    {
      $endpointUrl = "{$this->targetUrl}". "?q=" . urlencode(trim($selectedCity)). "&appid={$this->securityKey}". "&units=metric";
      $rawJsonString = @file_get_contents($endpointUrl);
        if ($rawJsonString === false) {
            return [];
        }
        return json_decode($rawJsonString) ?? [];
    }
}