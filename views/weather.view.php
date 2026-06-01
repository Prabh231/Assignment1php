<?php if (!empty($lessonWeatherData) && isset($lessonWeatherData->main)): ?>

    <div class="weather-card">

        <h3><?php echo $lessonWeatherData->name; ?></h3>

        <p> Temperature: <?php echo $lessonWeatherData->main->temp; ?> °C</p>

        <p> Weather: <?php echo $lessonWeatherData->weather[0]->description; ?></p>

        <p> Humidity: <?php echo $lessonWeatherData->main->humidity; ?>%</p>

        <p> Wind: <?php echo $lessonWeatherData->wind->speed; ?> m/s</p>

    </div>

<?php else: ?>

    <p>Weather data not available.</p>

<?php endif; ?>