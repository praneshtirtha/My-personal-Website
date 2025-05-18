<?php
$suggestions_file = 'suggestions.txt';
$is_admin = true; // Change to false if the user is not an admin

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete'])) {
    $delete_index = (int) $_POST['delete'];
    $suggestions = file($suggestions_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (isset($suggestions[$delete_index])) {
        unset($suggestions[$delete_index]);
        file_put_contents($suggestions_file, implode("\n", $suggestions) . "\n");
    }
    header("Location: view_suggestions.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Suggestions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h2 class="text-center">Life Lesson Suggestions</h2>
        <ul class="list-group">
            <?php
            if (file_exists($suggestions_file)) {
                $suggestions = file($suggestions_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                if (!empty($suggestions)) {
                    foreach ($suggestions as $index => $suggestion) {
                        echo "<li class='list-group-item bg-secondary text-white d-flex justify-content-between align-items-center'>";
                        echo htmlspecialchars($suggestion);
                        if ($is_admin) {
                            echo "<form method='POST' style='margin:0;'>
                                    <button type='submit' name='delete' value='$index' class='delete-btn'>Delete</button>
                                  </form>";
                        }
                        echo "</li>";
                    }
                } else {
                    echo "<p class='text-center'>No suggestions yet.</p>";
                }
            } else {
                echo "<p class='text-center'>No suggestions yet.</p>";
            }
            ?>
        </ul>
        <a href="home.php" class="btn btn-light mt-3">Back to Home</a>
    </div>
</body>
</html>
