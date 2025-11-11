<?php
require_once 'config.php';
require_once 'auth.php';

// Säkerhetsfunktion för att kontrollera behörighet
function checkPermission() {
    if (!isLoggedIn()) {
        http_response_code(403);
        echo json_encode(['success' => false, 'message' => 'Du måste vara inloggad för att utföra denna åtgärd']);
        exit;
    }
}

function getAllMembers() {
    try {
        $db = getDB();
        // Hämta först styrelsemedlemmar, sedan övriga sektioner i bokstavsordning
        $stmt = $db->query("SELECT * FROM members 
            ORDER BY 
                CASE section
                    WHEN 'Styrelse' THEN 1
                    WHEN 'Revisor' THEN 2
                    WHEN 'Valberedning' THEN 3
                    WHEN 'Materialförvaltare' THEN 4
                    WHEN 'Säkerhet' THEN 5
                    WHEN 'Utbildning övrigt' THEN 6
                    WHEN 'Bidrag' THEN 7
                    WHEN 'Webben' THEN 8
                    WHEN 'Badhuset nyck. tagg.' THEN 9
                    WHEN 'Badhus nyckel tagg' THEN 10
                    WHEN 'Föreningsmöte Badhus' THEN 11
                    WHEN 'Lokalen' THEN 12
                    WHEN 'Fridykning' THEN 13
                    WHEN 'Sportdykning' THEN 14
                    WHEN 'HLR' THEN 15
                    WHEN 'Dykaktiviteter' THEN 16
                    WHEN 'Gabbes fridykarläger' THEN 17
                    WHEN 'Dykläger övrigt' THEN 18
                    WHEN 'Badplatsrensning Karlskoga' THEN 19
                    WHEN 'Badplatsrensning Degerfors' THEN 20
                    WHEN 'Badplatsrensning Kristinehamn' THEN 21
                    WHEN 'Övriga aktiviteter' THEN 22
                    WHEN 'Övriga kunskaper' THEN 23
                    ELSE 24
                END,
                CASE 
                    WHEN role LIKE '%Ordförande%' THEN 1
                    WHEN role LIKE '%Vice%' THEN 2
                    WHEN role LIKE '%Sekreterare%' THEN 3
                    WHEN role LIKE '%Kassör%' THEN 4
                    ELSE 5
                END,
                role, 
                name");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        error_log("Error fetching members: " . $e->getMessage());
        return [];
    }
}

function getMember($id) {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM members WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        error_log("Error fetching member: " . $e->getMessage());
        return null;
    }
}

function addMember($name, $role, $email, $phone, $section) {
    checkPermission();
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO members (name, role, email, phone, section) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $role, $email, $phone, $section]);
    } catch(PDOException $e) {
        error_log("Error adding member: " . $e->getMessage());
        return false;
    }
}

function updateMember($id, $name, $role, $email, $phone, $section) {
    checkPermission();
    try {
        $db = getDB();
        $stmt = $db->prepare("UPDATE members SET name = ?, role = ?, email = ?, phone = ?, section = ? WHERE id = ?");
        return $stmt->execute([$name, $role, $email, $phone, $section, $id]);
    } catch(PDOException $e) {
        error_log("Error updating member: " . $e->getMessage());
        return false;
    }
}

function deleteMember($id) {
    checkPermission();
    try {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM members WHERE id = ?");
        return $stmt->execute([$id]);
    } catch(PDOException $e) {
        error_log("Error deleting member: " . $e->getMessage());
        return false;
    }
}

// Hantera AJAX-förfrågningar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $response = ['success' => false, 'message' => ''];

    // Kontrollera att användaren är inloggad
    if (!isset($_SESSION['user_id'])) {
        $response['message'] = 'Du måste vara inloggad för att utföra denna åtgärd';
        echo json_encode($response);
        exit;
    }

    switch ($_POST['action']) {
        case 'add':
            if (addMember($_POST['name'], $_POST['role'], $_POST['email'], $_POST['phone'], $_POST['section'])) {
                $response['success'] = true;
                $response['message'] = 'Medlem tillagd';
            } else {
                $response['message'] = 'Kunde inte lägga till medlem';
            }
            break;

        case 'update':
            if (updateMember($_POST['id'], $_POST['name'], $_POST['role'], $_POST['email'], $_POST['phone'], $_POST['section'])) {
                $response['success'] = true;
                $response['message'] = 'Medlem uppdaterad';
            } else {
                $response['message'] = 'Kunde inte uppdatera medlem';
            }
            break;

        case 'delete':
            if (deleteMember($_POST['id'])) {
                $response['success'] = true;
                $response['message'] = 'Medlem borttagen';
            } else {
                $response['message'] = 'Kunde inte ta bort medlem';
            }
            break;
    }

    echo json_encode($response);
    exit;
}
?>