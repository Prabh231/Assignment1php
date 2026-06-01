
/**
 * API Controller
 */

<?php
require_once "config.php";
require_once "LessonWeatherHandler.php";

$lessonActiveCity = "Toronto";

$lessonHandler = new LessonWeatherHandler(
    WEATHER_BASE_URL,
    WEATHER_API_KEY
);

$lessonWeatherData = $lessonHandler->fetchWeather($lessonActiveCity);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Weather API Integration Project">
    <meta name="robots" content="noindex, nofollow">

    <title>Weather App</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<main class="container">

    <section class="row">
        <h2>Weather Report - <?php echo $lessonActiveCity; ?></h2>
    </section>

    <section class="row">
        <?php include "views/weather.view.php"; ?>
    </section>

</main>

</body>
</html>