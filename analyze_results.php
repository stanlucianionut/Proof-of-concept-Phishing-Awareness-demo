<?php
$log_file = 'graduation_log.csv';
$results = array();

if (file_exists($log_file)) {
    if (($handle = fopen($log_file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $results[] = $data;
        }
        fclose($handle);
    }
}

echo "<h2>Phishing Test Results</h2>";
echo "<p>Total submissions: " . count($results) . "</p>";
echo "<table border='1'><tr><th>Timestamp</th><th>IP</th><th>Name</th></tr>";
foreach ($results as $row) {
    echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
}
echo "</table>";
?>