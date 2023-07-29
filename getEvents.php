<?php
if (isset($_GET['subfolder'])) {
    $subfolder = $_GET['subfolder'];

    // Gallery directory path
    $galleryPath = 'img/Gallery/' . $subfolder;

    // Get the event directories under the selected subfolder
    $eventDirectories = array_filter(glob($galleryPath . '/*'), 'is_dir');

    // Get the event names from the directories
    $events = array_map('basename', $eventDirectories);

    // Return the events as JSON
    echo json_encode($events);
} else {
    echo 'Invalid subfolder parameter.';
}
?>
