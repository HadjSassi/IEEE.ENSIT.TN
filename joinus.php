<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = isset($_POST["Fname"]) ? $_POST["Fname"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $dob = isset($_POST["date"]) ? $_POST["date"] : "";
    $phoneNumber = isset($_POST["Pnumber"]) ? $_POST["Pnumber"] : "";
    $class = isset($_POST["class"]) ? $_POST["class"] : "";
    $field = isset($_POST["field"]) ? $_POST["field"] : "";
    $skills = isset($_POST["skills"]) ? $_POST["skills"] : "";
    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : "";
    $description = isset($_POST["other"]) ? $_POST["other"] : "";

    // Check if the combination of email and phone number already exists in the CSV
    $existingData = file_get_contents("members.csv");
    $existingEntries = explode("\n", $existingData);
    $isDuplicate = false;

    foreach ($existingEntries as $entry) {
        $existingValues = explode("|", $entry);
        if (count($existingValues) >= 9) {
            list($existingFullName, $existingEmail, $existingDate, $existingNumber, $existingClass, $existingField, $existingSkills, $existingHobbies, $existingOther) = $existingValues;

            if ($existingEmail === $email && $existingNumber == $phoneNumber) {
                $isDuplicate = true;
                break;
            }
        }
    }

    if (!$isDuplicate) {
        // Format the data
        $formData = "$fullname|$email|$dob|$phoneNumber|$class|$field|$skills|$hobbies|$description";

        // Append the data to the file
        $file = fopen("members.csv", "a");
        fwrite($file, $formData . PHP_EOL);
        fclose($file);
    }
    // Redirect back to the original page
    header("Location: joinus.html");
    exit;
}
?>
