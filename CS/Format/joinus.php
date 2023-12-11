<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = isset($_POST["Fname"]) ? $_POST["Fname"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $ieeeid = isset($_POST["ieeeid"]) ? $_POST["ieeeid"] : "";
    $phoneNumber = isset($_POST["Pnumber"]) ? $_POST["Pnumber"] : "";
    $class = isset($_POST["class"]) ? $_POST["class"] : "";
    $field = isset($_POST["field"]) ? $_POST["field"] : "";
    $description = isset($_POST["other"]) ? $_POST["other"] : "";

    // Check if the combination of email and phone number already exists in the CSV
    $existingData = file_get_contents("members.csv");
    $existingEntries = explode("\n", $existingData);
    $isDuplicate = false;

    foreach ($existingEntries as $entry) {
        $existingValues = explode("|", $entry);
        if (count($existingValues) >= 9) {
            list($existingFullName, $existingEmail, $existingIEEE, $existingNumber, $existingClass, $existingField, $existingOther) = $existingValues;

            if ($existingEmail === $email && $existingNumber == $phoneNumber) {
                $isDuplicate = true;
                break;
            }
        }
    }

    if (!$isDuplicate) {
        // Format the data
        $formData = "$fullname|$email|$ieeeid|$phoneNumber|$class|$field|$description";

        // Append the data to the file
        $file = fopen("members.csv", "a");
        fwrite($file, PHP_EOL . $formData);
        fclose($file);
    }
    // Redirect back to the original page
    header("Location: index1.php");
    exit;
}
?>
