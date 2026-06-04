<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Weather API Integration Project">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Weather Dashboard</title>
</head>
<body>

<main class="container">

    <section class="row">
        <h2>Weather Report -<?php echo htmlspecialchars($lessonActiveCity); ?></h2>
    </section>

    <section class="row">

        <form method="GET">
            <input
                type="text"
                name="city"
                placeholder="Enter City"
                required
            >
            <button type="submit">Search</button>
        </form>

    </section>

    <section class="row">

    <?php if($lessonWeatherData && isset($lessonWeatherData->main)): ?>

        <article class="weather-card">

    <header>
        <h2>
            <?php echo htmlspecialchars($lessonWeatherData->name); ?>
        </h2>
    </header>

    <dl>
        <dt>Temperature</dt>
        <dd>
            <?php echo htmlspecialchars($lessonWeatherData->main->temp); ?> °C
        </dd>

        <dt>Feels Like</dt>
        <dd>
            <?php echo htmlspecialchars($lessonWeatherData->main->feels_like); ?> °C
        </dd>

        <dt>Humidity</dt>
        <dd>
            <?php echo htmlspecialchars($lessonWeatherData->main->humidity); ?>%
        </dd>

        <dt>Weather</dt>
        <dd>
            <?php echo htmlspecialchars($lessonWeatherData->weather[0]->description); ?>
        </dd>

        <dt>Wind Speed</dt>
        <dd>
            <?php echo htmlspecialchars($lessonWeatherData->wind->speed); ?> m/s
        </dd>
    </dl>

</article>

    <?php else: ?>

        <p>City not found.</p>

    <?php endif; ?>

    </section>

</main>

</body>
</html>