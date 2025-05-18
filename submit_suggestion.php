<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suggestion = trim($_POST["suggestion"]);
    
    if (!empty($suggestion)) {
        $date = date("Y-m-d"); // Only store the date (YYYY-MM-DD)
        $entry = "$date | $suggestion\n";

        file_put_contents("suggestions.txt", $entry, FILE_APPEND);
        
        echo "<script>alert('Thank you for your suggestion!'); window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Suggestion cannot be empty!'); window.location.href='home.php';</script>";
    }
}
?>
