<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamName = isset($_POST["Tname"]) ? $_POST["Tname"] : "";
    $name1 = isset($_POST["F1name"]) ? $_POST["F1name"] : "";
    $email1 = isset($_POST["F1email"]) ? $_POST["F1email"] : "";
    $ieeeid1 = isset($_POST["F1ieeeid"]) ? $_POST["F1ieeeid"] : "";
    $phone1 = isset($_POST["F1number"]) ? $_POST["F1number"] : "";
    $desc1 = isset($_POST["F1description"]) ? $_POST["F1description"] : "";
    $name2 = isset($_POST["F2name"]) ? $_POST["F2name"] : "";
    $email2 = isset($_POST["F2email"]) ? $_POST["F2email"] : "";
    $ieeeid2 = isset($_POST["F2ieeeid"]) ? $_POST["F2ieeeid"] : "";
    $phone2 = isset($_POST["F2number"]) ? $_POST["F2number"] : "";
    $desc2 = isset($_POST["F2description"]) ? $_POST["F2description"] : "";
    $name3 = isset($_POST["F3name"]) ? $_POST["F3name"] : "";
    $email3 = isset($_POST["F3email"]) ? $_POST["F3email"] : "";
    $ieeeid3 = isset($_POST["F3ieeeid"]) ? $_POST["F3ieeeid"] : "";
    $phone3 = isset($_POST["F3number"]) ? $_POST["F3number"] : "";
    $desc3 = isset($_POST["F3description"]) ? $_POST["F3description"] : "";
    // Check if the combination of email and phone number already exists in the CSV
    $existingData = file_get_contents("members.csv");
    $existingEntries = explode("\n", $existingData);
    $isDuplicate = false;

    foreach ($existingEntries as $entry) {
        $existingValues = explode("|", $entry);
        if (count($existingValues) >= 9) {
            list($ename, $e1name, $e1ieeeid, $e1email, $e1phone, $e1desc, $e2name,$e2ieeeid,$e2email,$e2phone,$e2desc,$e3name,$e3ieeeid,$e3email,$e3phone,$e3desc) = $existingValues;

            if ($ename === $teamName || $e1email == $email1 || $e1email == $email2 || $e1email == $email3 ) {
                $isDuplicate = true;
                break;
            }
        }
    }

    if (!$isDuplicate) {
        // Format the data
        $formData = "$teamName|$name1|$ieeeid1|$email1|$phone1|$desc1|$name2|$ieeeid2|$email2|$phone2|$desc2|$name3|$ieeeid3|$email3|$phone3|$desc3";

        // Append the data to the file
        $file = fopen("members.csv", "a");
        fwrite($file, PHP_EOL . $formData);
        fclose($file);
    }
    // Redirect back to the original page
    header("Location: congrats.php");
    exit;
}
?>
