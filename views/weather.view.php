<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
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

        <div class="weather-card">

            <h3>
                <?php echo htmlspecialchars($lessonWeatherData->name); ?>
            </h3>

            <p>
                Temperature:
                <?php echo htmlspecialchars($lessonWeatherData->main->temp); ?> °C
            </p>

            <p>
                Feels Like:
                <?php echo htmlspecialchars($lessonWeatherData->main->feels_like); ?> °C
            </p>

            <p>
                Humidity:
                <?php echo htmlspecialchars($lessonWeatherData->main->humidity); ?>%
            </p>

            <p>
                Weather:
                <?php echo htmlspecialchars($lessonWeatherData->weather[0]->description); ?>
            </p>

            <p>
                Wind Speed:
                <?php echo htmlspecialchars($lessonWeatherData->wind->speed); ?> m/s
            </p>

        </div>

    <?php else: ?>

        <p>City not found.</p>

    <?php endif; ?>

    </section>

</main>

</body>
</html>