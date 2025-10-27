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
        <!-- Navbar Section -->
        <nav class="navbar">
            <a href="index.php" class ="navbar__logo">KSDK</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="navbar__menu">
                <a href="index.php" class="navbar__link">Home</a>
                <a href="about.php" class="navbar__link">About</a>
                <a href="services.php" class="navbar__link">Services</a>
                <a href="contact.php" class="navbar__link">Contact</a>
            </div>
        </nav>

        <main class="container">
            <header class="page-header">
                <h1>Kontaktpersoner & funktionärer</h1>
                <p class="lead">Här hittar du kontaktuppgifter till styrelse och funktionärer. Klicka på telefonnummer eller e-post för att ringa eller skicka meddelande.</p>
            </header>

            <?php
            /*
             * Exempelstruktur för kontaktdata. Du kan fylla på fler poster
             * eller hämta data från en datakälla och loopa över samma struktur.
             * Varje sektion har en titel och en lista av poster med role, name, phone, email.
             */
            $contacts = [
                "Styrelse" => [
                    [
                        'role' => 'Ordförande',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => 'ulferik82@gmail.com'
                    ],
                    [
                        'role' => 'Viceordförande',
                        'name' => 'Anders Persson',
                        'phone' => '073-065 45 41',
                        'email' => 'anders.persson1966@outlook.com'
                    ],
                    [
                        'role' => 'sektreterare',
                        'name' => 'Agaton Fransson',
                        'phone' => '070-760 51 16',
                        'email' => 'agaton.fransson@gmail.com'
                    ],
                    [
                        'role' => 'Kassör',
                        'name' => 'Malin Björndahl',
                        'phone' => '070-790 99 90',
                        'email' => 'malin.bjorndahl@gmail.com'
                    ],
                    [
                        'role' => 'Material Samordnare',
                        'name' => 'Rune Arvidsson',
                        'phone' => '076-847 41 03',
                        'email' => 'runetdm@gmail.com'
                    ],
                    [
                        'role' => 'Instruktör Samordnare',
                        'name' => 'Camilla Sånebo',
                        'phone' => '070-338 87 59',
                        'email' => 'c.sanebo@hotmail.se'
                    ],
                    [
                        'role' => 'Ungdomsansvarig',
                        'name' => 'Clara Pettersson',
                        'phone' => '076-847 06 70',
                        'email' => 'clarapettersonA@outlook.com'
                    ],
                    [
                        'role' => 'Suppleant',
                        'name' => 'Andreas Larsson',
                        'phone' => '073-446 31 51',
                        'email' => 'rat@ae-larsson.se'
                    ],
                    [
                        'role' => 'Suppleant',
                        'name' => 'Mikale Holmberg',
                        'phone' => '076-535 86 49',
                        'email' => 'mikaelhomberg19@gmail.com'
                    ],
                    [
                        'role' => 'Suppleant',
                        'name' => '',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Suppleant',
                        'name' => 'Bim Kristofferson',
                        'phone' => '072-722 22 538',
                        'email' => 'bimsan1@outlook.com'
                    ],
                    [
                        'role' => 'Suppleant',
                        'name' => 'Johan Kristofferson',
                        'phone' => '070-445 20 75',
                        'email' => 'johan.kristoferson@bahnof.se'
                    ],
                    // Lägg till fler poster här...
                ],
                "Valberedning" => [
                    [
                        'role' => 'Ledamot',
                        'name' => 'Malin Björndahl',
                        'phone' => '070-790 99 90',
                        'email' => 'malin.bjorndahl@gmail.com'
                    ],
                    [
                        'role' => 'Sammankallande',
                        'name' => 'Mephare Hakimzadeh',
                        'phone' => '073-650 34 78',
                        'email' => 'meppanpersson@gmail.com'
                    ],
                    [
                        'role' => 'Ledamot',
                        'name' => 'Vera Petterson',
                        'phone' => '073-505 25 42',
                        'email' => ''
                ],
            ],
            "Materialförvaltare" => [
                    [
                        'role' => 'Materialförvaltare',
                        'name' => 'Rune Arvidsson',
                        'phone' => '076-847 41 03',
                        'email' => 'runetdm@gmail.com'
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Johan Andersson',
                        'phone' => '070-741 48 97',
                        'email' => 'johan.andersson.kga@live.se'
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Andersson Petterson',
                        'phone' => '073-687 18 69',
                        'email' => 'clap@telia.com'
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Linus Jonsson',
                        'phone' => '076- 834 64 40',
                        'email' => ''
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Pontus Karlsson',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Knut Holm',
                        'phone' => '072-387 81 27',
                        'email' => ''
                    ],
                    [
                        'role' => 'Allmänt',
                        'name' => 'Mikael Holmberg',
                        'phone' => '076-535 86 49',
                        'email' => 'mikaelholmberg19@gmail.com'
                    ],
                    [
                        'role' => 'Västar, regulatorer + båt',
                        'name' => 'Jan H',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Västar, regulatorer + båt',
                        'name' => 'Joakim Larsson',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Västar, regulatorer + båt',
                        'name' => 'Lars-Ivar Westgaard',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Kompressor',
                        'name' => 'Anders Persson',
                        'phone' => '073-065 45 41',
                        'email' => 'anders.persson1966@outlook.com'
                    ],
                ],
                "Säkerhet" => [
                    [
                        'role' => 'Klubbsäkerhetsombud',
                        'name' => 'Camilla Sånebo',
                        'phone' => '076-349 10 52',
                        'email' => 'c.sanebo@hotmail.se'
                    ],
                ],
                "Utbildning Övrigt" => [
                    [
                        'role' => 'Utbildningsansvarig',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => 'ulferik72@gmail.com'
                    ],
                ],
                "Bidragsansvarig" => [
                    [
                        'role' => 'Kommunen',
                        'name' => 'Styrelsen',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'SISU',
                        'name' => 'Ann Erdborn-E',
                        'phone' => '070-404 44 81',
                        'email' => 'annerdborn.eriksson@gmail.com'
                    ],
                    [
                        'role' => 'LOK',
                        'name' => 'Ann Erdborn-E',
                        'phone' => '070-404 44 81',
                        'email' => 'annerdborn.eriksson@gmail.com'
                    ],
                    [
                        'role' => 'Idrottslyftet',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => 'ulferik82@gmail.com'
                    ],
                ],

                "Webben" => [
                    [
                        'role' => 'Webbmaster, text',
                        'name' => 'Anders Persson',
                        'phone' => '073-065 45 41',
                        'email' => 'anders.persson1966@outlook.com'
                    ],
                    [
                        'role' => 'Webbdesign, teknik',
                        'name' => 'Mikael De Oliveira',
                        'phone' => '070-566 60 67',
                        'email' => 'webmaster@karlskogasdk.se'
                    ],
                ],
                "Badhuset nyck. tagg." => [
                    [
                        'role' => 'Samord/Bokn./lista',
                        'name' => 'Camilla Sånebo',
                        'phone' => '070-338 87 59',
                        'email' => 'c.sanebo@hotmail.se'
                    ],
                    [
                        'role' => 'Badhusansvar',
                        'name' => 'Yaroslava Zhulina',
                        'phone' => '073-646 26 41',
                        'email' => ''
                    ],
                    [
                        'role' => 'Badhusansvar',
                        'name' => 'Mats Örtegren',
                        'phone' => '070-577 64 75',
                        'email' => 'matsorte@hotmail.com'
                    ],
                    [
                        'role' => 'Badhusansvar',
                        'name' => '	Henrik Saarentaus',
                        'phone' => '070-243 83 36',
                        'email' => 'hsaaren@hotmail.com'
                    ],
                    [
                        'role' => 'Badhusansvar',
                        'name' => 'Lotta L Karlsson',
                        'phone' => '073-981 80 66',
                        'email' => 'lotta.larsdotter@telia.com'
                    ],
                    [
                        'role' => 'Badhusansvar',
                        'name' => 'Mephare Hakimzadeh',
                        'phone' => '073-650 34 78',
                        'email' => 'meppanpersson@gmail.com'
                    ],
                    [
                        'role' => 'Badhusansvar ons',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => 'ulferik82@gmail.com'
                    ],
                    [
                        'role' => 'Badhusansvar ons',
                        'name' => 'Mats Örtegren',
                        'phone' => '070-577 64 75',
                        'email' => 'matsorte@hotmail.com'
                    ],
                    [
                        'role' => 'Badhusansvar lördag',
                        'name' => 'Malin Björndahl',
                        'phone' => '070-7909990',
                        'email' => ''
                    ],
                    [
                        'role' => 'Badhusansvar lördag',
                        'name' => 'Niklas Hjelm',
                        'phone' => '070-415 40 48',
                        'email' => ''
                    ],
                    [
                        'role' => 'Badhusansvar + listor lok',
                        'name' => 'Ann Erdborn-E',
                        'phone' => '070-4044481',
                        'email' => ''
                    ],
                ],
                "Badhuset nyck. tagg." => [
                    [
                        'role' => 'Instruktör',
                        'name' => 'Lars-Ivar Westgaard',
                        'phone' => '070-570 50 21',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => 'Clara Pettersson',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => 'Joakim Larsson',
                        'phone' => '070-493 53 84',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör ej tagg',
                        'name' => 'Ander Persson',
                        'phone' => '073-065 45 41',
                        'email' => 'anders-persson1966@outlook.com'
                    ],
                    [
                        'role' => 'Ordförande',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => 'ulferik82@gmail.com'
                    ],
                ],
                "Föreningsmöte Badhus" => [
                    [
                        'role' => 'Ansvarig',
                        'name' => 'Ann Erdborn-E',
                        'phone' => '070-4044481',
                        'email' => 'annerdborn.eriksson@gmail.com'
                    ],
                ],
                "Lokalen" => [
                    [
                        'role' => 'Stugtomte',
                        'name' => 'Anders Petterson',
                        'phone' => '073-687 18 69',
                        'email' => 'clap@telia.com'
                    ],
                    [
                        'role' => 'Brandskyddsansvarig',
                        'name' => 'Anders Petterson',
                        'phone' => '073-687 18 69',
                        'email' => 'clap@telia.com'
                    ],
                    [
                        'role' => 'Elansvarig i lokalen',
                        'name' => 'Pontus Karlsson',
                        'phone' => '',
                        'email' => ''
                    ],
                ],
                "Fridykning" => [
                    [
                        'role' => 'Instruktör Samordnare',
                        'name' => 'Clara Pettersson',
                        'phone' => '076-847 06 70',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => 'Vera Petterson',
                        'phone' => '073-505 25 42',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => '',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => '',
                        'phone' => '',
                        'email' => ''
                    ],
                    [
                        'role' => 'Instruktör',
                        'name' => '',
                        'phone' => '',
                        'email' => ''
                    ],
                ],
                "Sportdykning" => [
                    [
                        'role' => 'Ansvarig',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => ''
                    ],
                ],
                "HLR" => [
                    [
                        'role' => 'Ansvarig',
                        'name' => 'Camilla Sånebo',
                        'phone' => '070-338 87 59',
                        'email' => ''
                    ],
                ],
                "Dykaktiviteter" => [
                    [
                        'role' => 'Ansvarig',
                        'name' => 'Ulf Eriksson',
                        'phone' => '070-952 50 44',
                        'email' => ''
                    ],
                ],
                "Gabbes Fridykarläger" => [
                    [
                        'role' => 'Ansvarig',
                        'name' => 'Anders Persson',
                        'phone' => '073-065 45 41',
                        'email' => ''
                    ],
                ],
            ];

            foreach ($contacts as $sectionTitle => $people) : ?>
                <section class="contact-section">
                    <h2 class="section-title"><?= htmlspecialchars($sectionTitle) ?></h2>
                    <div class="contact-grid">
                        <?php foreach ($people as $p) : ?>
                            <article class="contact-card">
                                <div class="contact-role"><?= htmlspecialchars($p['role']) ?></div>
                                <div class="contact-name"><?= htmlspecialchars($p['name']) ?></div>
                                <div class="contact-meta">
                                    <?php if (!empty($p['phone'])): ?>
                                        <a class="contact-link" href="tel:<?= preg_replace('/[^0-9+]/','',$p['phone']) ?>">
                                            <svg class="icon" viewBox="0 0 24 24" width="14" height="14" aria-hidden="true"><path fill="currentColor" d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.25 1.01l-2.2 2.22z"/></svg>
                                            <span><?= htmlspecialchars($p['phone']) ?></span>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($p['email'])): ?>
                                        <a class="contact-link" href="mailto:<?= htmlspecialchars($p['email']) ?>">
                                            <svg class="icon" viewBox="0 0 24 24" width="14" height="14" aria-hidden="true"><path fill="currentColor" d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                                            <span><?= htmlspecialchars($p['email']) ?></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>

        </main>

        <footer class="site-footer">
            <div class="container">&copy; <?= date('Y') ?> KSDK</div>
        </footer>

    </body>
</html>