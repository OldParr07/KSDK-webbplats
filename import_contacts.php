<?php
require_once 'includes/config.php';

// Array med alla kontakter från olika sektioner
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
            'role' => 'Sekreterare',
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
            'email' => 'matsorte@hotmail.se'
        ],
        [
            'role' => 'Badhusansvar',
            'name' => 'Henrik Saarentaus',
            'phone' => '070-243 83 36',
            'email' => 'hsaaren@hotmail.se'
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
    "Instruktörer" => [
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
            'name' => 'Anders Persson',
            'phone' => '073-065 45 41',
            'email' => 'anders-persson1966@outlook.com'
        ]
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

try {
    $db = getDB();
    
    // Rensa tabellen först för att undvika dubletter
    $db->exec("TRUNCATE TABLE members");
    
    $stmt = $db->prepare("INSERT INTO members (name, role, email, phone, section) VALUES (?, ?, ?, ?, ?)");
    
    $totalContacts = 0;
    
    foreach ($contacts as $section => $people) {
        foreach ($people as $person) {
            // Om rollen inte innehåller sektionsnamnet, lägg till det som separat fält
            $stmt->execute([
                $person['name'],
                $person['role'],
                $person['email'],
                $person['phone'],
                $section
            ]);
            $totalContacts++;
        }
    }
    
    echo "Importerade " . $totalContacts . " kontakter framgångsrikt!";
    
} catch(PDOException $e) {
    echo "Fel vid import: " . $e->getMessage();
}