<?php
  $name = "Pranesh Majumder Tirtha"; 
  $is_admin = true; // Change to false if you don't want to see the admin button
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myself</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .navbar {
            background-color:rgba(0, 0, 0, 0.97);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-link {
            color:rgb(248, 142, 3) !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ff5733 !important;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            gap: 20px;
        }
        .profile-img {
            border: 5px solid #ffffff;
            width: 250px;
            flex-shrink: 0;
            border-radius: 50%;
        }
        .description {
            max-width: 600px;
            flex-grow: 1;
            text-align: center;
        }
        .description h2 {
            font-size: 2.5rem;
        }
        .description p {
            font-size: 1.20rem;
        }
        /* Suggestion Buttons */
        .suggestion-buttons {
            text-align: center;
            margin-top: 25px;
        }
        .btn-suggestion {
            background-color:rgb(17, 1, 140);
            border: none;
            padding: 8px 12px;
            font-size: 0.9rem;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 5px;
            margin: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-suggestion:hover {
            background-color: #ff5733;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Responsive Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="aboutme.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="skills.php" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="certi.php" class="nav-link">Certifications</a></li>
                    <li class="nav-item"><a href="education.php" class="nav-link">Education</a></li>
                    <li class="nav-item"><a href="resume.php" class="nav-link">My Resume</a></li>
                    <li class="nav-item"><a href="contactme.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content">
        <img src="photos/w2.jpg" alt="Profile Picture" class="profile-img">
        <div class="description">
            <h2>Welcome to my web profile!</h2>
            <p>Hi! I am <span style="color:rgb(255, 7, 7);"><?php echo $name; ?></span>.</p>
            <p>Programmer | Problem Solver | Promising Software Engineer</p>
            <p>This is my personal web profile where I share my insights about me, so feel free to explore the website to learn more about me.</p>
            <p>If you have any questions or just want to connect, don't hesitate to reach out via the "Contact" section.</p>

            <!-- Suggestion Buttons moved here -->
            <div class="suggestion-buttons">
                <a href="give_suggestion.php" class="btn-suggestion">Give a Suggestion</a>
                <?php if ($is_admin): ?>
                    <a href="view_suggestions.php" class="btn-suggestion">See Suggestions</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
