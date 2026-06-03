<?php

require_once "config.php";
require_once "LessonWeatherHandler.php";

$lessonActiveCity = isset($_GET['city'])
    ? trim($_GET['city'])
    : "Toronto";

$lessonHandler = new LessonWeatherHandler(
    WEATHER_BASE_URL,
    WEATHER_API_KEY
);

$lessonWeatherData = $lessonHandler->fetchWeather($lessonActiveCity);

require_once "views/weather.view.php";