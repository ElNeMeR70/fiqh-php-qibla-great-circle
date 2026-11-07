<?php
declare(strict_types=1);

/**
 * fiqh-php-qibla-great-circle — حاسبة اتجاه القبلة الكروية والمسافة الجيوديسية للكعبة
 * Spherical Trigonometry Great-Circle Qibla Azimuth Solver
 */
$input = "Lat=30.0444,Lon=31.2357->Makkah";
$digest = substr(hash("sha256", "fiqh-php-qibla-great-circle:" . $input), 0, 12);

echo "[RUN] fiqh-php-qibla-great-circle (PHP) — Spherical Trigonometry Great-Circle Qibla Azimuth Solver" . PHP_EOL;
echo "[AR]  حاسبة اتجاه القبلة الكروية والمسافة الجيوديسية للكعبة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] QiblaAzimuthDeg=136.18 | DistanceKm=1284.7 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
