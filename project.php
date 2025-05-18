<?php
  $projects = [
      [
          "title" => "🚲 Bike shop",
          "description" => "A system that acts like a bike shop where you can stalk, buy and request for a bike.",
          "link" => "https://github.com/praneshtirtha/CSE115L-8-bike-shop-2222899042.git",
          "color" => "#1e88e5" // blue
      ],
      [
          "title" => "🏏 Cricket Club Management System",
          "description" => "A web-based system to manage players, matches, and statistics.",
          "link" => "https://github.com/praneshtirtha/Cricket_club_management.git",
          "color" => "#ef5350" // red
      ],
      [
          "title" => "🗳️ Online Voting System",
          "description" => "A secure online voting platform to ensure fair and transparent elections.",
          "link" => "https://github.com/praneshtirtha/Online-Voting-System.git",
          "color" => "#43a047" // green
      ],
      [
          "title" => "🚇 Metro Rail Management System",
          "description" => "A digital solution for managing metro operations and schedules.",
          "link" => "https://github.com/omarsadat123/CSE215L-projects-Metro-Rail-management-system.git",
          "color" => "#f9a825" // yellow/orange
      ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Projects</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: white;
      font-family: 'Roboto', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }

    h1 {
      margin-bottom: 40px;
      font-size: 2.5rem;
    }

    .project-card {
      width: 90%;
      max-width: 700px;
      margin-bottom: 25px;
      border-radius: 12px;
      padding: 25px;
      color: white;
      text-align: center;
      box-shadow: 0 8px 16px rgba(0,0,0,0.25);
      transition: transform 0.3s ease;
    }

    .project-card:hover {
      transform: scale(1.02);
    }

    .project-title {
      font-size: 1.4rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .project-description {
      margin-bottom: 15px;
    }

    .project-link {
  background-color: #ffffff;
  color: #121212;
  padding: 10px 16px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.project-link:hover {
  background-color: #f1f1f1;
  color: #000000;
}

  </style>
</head>
<body>

  <h1>🚀 My Projects</h1>

  <?php foreach ($projects as $project): ?>
    <div class="project-card" style="background-color: <?= $project['color'] ?>;">
      <div class="project-title"><?= $project['title'] ?></div>
      <div class="project-description"><?= $project['description'] ?></div>
      <a href="<?= $project['link'] ?>" class="project-link" target="_blank">View on GitHub</a>
    </div>
  <?php endforeach; ?>

</body>
</html>
