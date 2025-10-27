<?php
$current_month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('m');
$current_year = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');

$first_day = mktime(0, 0, 0, $current_month, 1, $current_year);
$days_in_month = date('t', $first_day);
$first_day_of_week = date('N', $first_day);

// Sample activities (kan ersättas med databaskoppling senare)
$activities = [
    '2025-10-29' => [
        ['time' => '20:00-21:00', 'title' => 'Strandbadsdyk', 'type' => 'training'],
    ],
    '2025-10-31' => [
        ['time' => '18:00-19:30', 'title' => 'Strandbadsdyk', 'type' => 'training'],
    ],
    '2025-11-01' => [
        ['time' => '16:00', 'title' => 'Strandbadsdyk', 'type' => 'training', 'note' => 'lördag alla'],
    ],
    '2025-11-05' => [
        ['time' => '20:00-21:00', 'title' => 'Strandbadsdyk', 'type' => 'training'],
    ],
    '2025-11-07' => [
        ['time' => '18:00-19:30', 'title' => 'Strandbadsdyk', 'type' => 'training'],
    ],
];

$months = [
    1 => 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni',
    'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December'
];

// Prev/Next month links
$prev_month = $current_month - 1;
$next_month = $current_month + 1;
$prev_year = $next_year = $current_year;

if ($prev_month < 1) {
    $prev_month = 12;
    $prev_year--;
}
if ($next_month > 12) {
    $next_month = 1;
    $next_year++;
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitetskalender - KSDK</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/10235da58b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <a href="index.php" class="navbar__logo">KSDK</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="navbar__menu">
            <a href="index.php" class="navbar__link">Hem</a>
            <a href="about.php" class="navbar__link">Om oss</a>
            <a href="services.php" class="navbar__link">Aktiviteter</a>
            <a href="contact.php" class="navbar__link">Kontakt</a>
        </div>
    </nav>

    <main class="calendar-page">
        <div class="container">
            <header class="page-header">
                <h1>Aktivitetskalender</h1>
                <div class="calendar-nav">
                    <a href="?month=<?= $prev_month ?>&year=<?= $prev_year ?>" class="btn btn--secondary">
                        <i class="fas fa-chevron-left"></i> Föregående månad
                    </a>
                    <h2><?= $months[$current_month] ?> <?= $current_year ?></h2>
                    <a href="?month=<?= $next_month ?>&year=<?= $next_year ?>" class="btn btn--secondary">
                        Nästa månad <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </header>

            <div class="calendar">
                <div class="calendar__header">
                    <div>Måndag</div>
                    <div>Tisdag</div>
                    <div>Onsdag</div>
                    <div>Torsdag</div>
                    <div>Fredag</div>
                    <div>Lördag</div>
                    <div>Söndag</div>
                </div>
                <div class="calendar__grid">
                    <?php
                    // Padding för första veckan
                    for ($i = 1; $i < $first_day_of_week; $i++) {
                        echo '<div class="calendar__day calendar__day--disabled"></div>';
                    }

                    // Visa alla dagar i månaden
                    for ($day = 1; $day <= $days_in_month; $day++) {
                        $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                        $has_activity = isset($activities[$date]);
                        $today = $date === date('Y-m-d');
                        
                        echo '<div class="calendar__day' . ($today ? ' calendar__day--today' : '') . '">';
                        echo '<span class="day-number">' . $day . '</span>';
                        
                        if ($has_activity) {
                            foreach ($activities[$date] as $activity) {
                                echo '<div class="calendar__event">';
                                echo '<span class="event__time">' . $activity['time'] . '</span>';
                                echo '<span class="event__title">' . $activity['title'] . '</span>';
                                if (isset($activity['note'])) {
                                    echo '<span class="event__note">' . $activity['note'] . '</span>';
                                }
                                echo '</div>';
                            }
                        }
                        
                        echo '</div>';
                    }

                    // Padding för sista veckan
                    $last_day = ($first_day_of_week - 1 + $days_in_month) % 7;
                    if ($last_day > 0) {
                        $padding_days = 7 - $last_day;
                        for ($i = 0; $i < $padding_days; $i++) {
                            echo '<div class="calendar__day calendar__day--disabled"></div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="calendar-legend">
                <div class="legend-item">
                    <span class="legend-color training"></span>
                    <span>Träning</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color event"></span>
                    <span>Event</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color trip"></span>
                    <span>Resa</span>
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">&copy; <?= date('Y') ?> Karlskoga Sportdykarklubb</div>
    </footer>

    <script>
        // Toggle mobile menu
        const menu = document.querySelector('#mobile-menu');
        const menuLinks = document.querySelector('.navbar__menu');
        
        menu.addEventListener('click', function() {
            menu.classList.toggle('is-active');
            menuLinks.classList.toggle('active');
        });
    </script>
</body>
</html>