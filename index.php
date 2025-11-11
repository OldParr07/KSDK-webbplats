<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KSDK</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/10235da58b.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include 'includes/navbar.php'; ?>
        <!-- Hero Section -->
        <header class="hero">
            <div class="hero__content">
                <h1>Välkommen till Karlskoga Sportdykarklubb</h1>
                <p class="hero__text">Upptäck undervattensvärlden med oss - från nybörjare till erfaren dykare</p>
                <div class="hero__cta">
                    <a href="#upcoming" class="btn btn--primary">Se kommande aktiviteter</a>
                    <a href="contact.php" class="btn btn--secondary">Bli medlem</a>
                </div>
            </div>
        </header>

        <div class="page-layout">
            <main class="main-content">
                <!-- Aktiviteter -->
                <section id="upcoming" class="activities-section">
                    <h2 class="section-title">Aktiviteter på gång</h2>
                    
                    <div class="activity-preview">
                        <div class="activity-cards">
                            <article class="activity-card">
                                <div class="activity-card__date">
                                    <span class="date-day">29</span>
                                    <span class="date-month">OKT</span>
                                </div>
                                <div class="activity-card__content">
                                    <h3>Strandbadsdyk</h3>
                                    <p>Onsdagar 20:00-21:00</p>
                                    <a href="calendar.php" class="activity-card__link">Se hela kalendern →</a>
                                </div>
                            </article>

                            <article class="activity-card">
                                <div class="activity-card__date highlight">
                                    <span class="date-day">31</span>
                                    <span class="date-month">OKT</span>
                                </div>
                                <div class="activity-card__content">
                                    <h3>Strandbadsdyk</h3>
                                    <p>Fredagar 18:00-19:30</p>
                                    <a href="calendar.php" class="activity-card__link">Se hela kalendern →</a>
                                </div>
                            </article>
                        </div>
                        <div class="activity-preview__action">
                            <a href="calendar.php" class="btn btn--primary">Visa hela aktivitetskalendern</a>
                        </div>
                    </div>

                    <!-- Kommande resor -->
                    <div class="upcoming-trips">
                        <h3>Planerade dykutflykter</h3>
                        <ul class="trip-list">
                            <li class="trip-item">
                                <span class="trip-destination">Saudi Arabien</span>
                                <span class="trip-date">16-24 november 2025</span>
                            </li>
                            <li class="trip-item">
                                <span class="trip-destination">Bonaire 2026</span>
                                <span class="trip-date">Mer information kommer</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Senaste artiklarna -->
                <section class="latest-news">
                    <h2 class="section-title">Senaste nytt</h2>
                    <div class="news-grid">
                        <article class="news-card">
                            <img src="path-to-image.jpg" alt="Film från klubbresan" class="news-card__image">
                            <div class="news-card__content">
                                <h3>Film från klubbresan till Narvik</h3>
                                <p>Se höjdpunkterna från vår senaste dykresa!</p>
                                <a href="#" class="news-card__link">Läs mer →</a>
                            </div>
                        </article>
                        <article class="news-card">
                            <img src="path-to-image.jpg" alt="Höstdyk" class="news-card__image">
                            <div class="news-card__content">
                                <h3>Höstdyk Gullmarsfjord vecka 25</h3>
                                <p>Planering och anmälan för höstens dykäventyr.</p>
                                <a href="#" class="news-card__link">Läs mer →</a>
                            </div>
                        </article>
                    </div>
                </section>
            </main>

            <!-- Sidopanel -->
            <aside class="sidebar">
                <div class="sidebar__widget payment-info">
                    <h3>Swish-betalning</h3>
                    <div class="swish-details">
                        <img src="swish.png" alt="Swish" class="swish-logo">
                        <p>KSDK's nummer är:</p>
                        <div class="swish-number">123185135</div>
                    </div>
                </div>

                <div class="sidebar__widget important-info">
                    <h3>Viktig information</h3>
                    <ul class="info-list">
                        <li><a href="#">Överlåtandedyk och lån av klubbens båtar</a></li>
                        <li><a href="#">Medlemsavgifter 2026</a></li>
                        <li><a href="#">Alkohol-, drog-, tobak- och dopingpolicy</a></li>
                    </ul>
                </div>

                <div class="sidebar__widget calendar-widget">
                    <h3>Aktivitetskalender</h3>
                    <a href="kalender.php" class="calendar-link">
                        <i class="far fa-calendar-alt"></i>
                        Se hela kalendern
                    </a>
                </div>

                <div class="sidebar__widget facebook-widget">
                    <h3>Följ oss på Facebook</h3>
                    <div class="fb-page-preview">
                        <!-- Facebook Page Plugin eller egen implementation -->
                    </div>
                </div>
            </aside>
        </div>

        <?php include 'includes/footer.php'; ?>

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