<?php
/**
 * weatherHandler Class
 * Blueprint for executing basic API fetches
 */
class LessonWeatherHandler {

    private $targetUrl;
    private $securityKey;

    public function __construct($incomingUrl, $incomingKey) {
        $this->targetUrl = $incomingUrl;
        $this->securityKey = $incomingKey;
    }

    /**
     * Pulls weather dataset from the API
     */
    public function fetchCurrentWeather($city = "Toronto") {

        // Construct API URL
        $endpointUrl = "{$this->targetUrl}?q=" . urlencode($city) .
                       "&appid={$this->securityKey}&units=metric";

        $rawJsonString = @file_get_contents($endpointUrl);

        if ($rawJsonString === false) {
            return [];
        }

        $decodedPayload = json_decode($rawJsonString);

        return $decodedPayload ?? [];
    }
}