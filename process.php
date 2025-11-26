<?php
// Log the submission
if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    
    // Log to a CSV file
    $log_data = array($timestamp, $ip, $name);
    $file = fopen('graduation_log.csv', 'a');
    fputcsv($file, $log_data);
    fclose($file);
}

// Redirect to thank you page
header('Location: thank_you.html');
exit;
?>