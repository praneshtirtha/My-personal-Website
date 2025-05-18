<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Certifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(0, 0, 0);
            color: #212529;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color:rgb(207, 196, 196);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .certificate-list {
            list-style-type: none;
            padding: 0;
        }
        .certificate-list li {
            background-color: #007bff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .certificate-list a {
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            display: block;
        }
        /* Hover Effect: Change color & scale up */
        .certificate-list li:hover {
            background-color: #ff5733; /* Change to an orange-red color */
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">My Certifications</h1>
        <ul class="certificate-list">
            <li><a href="jsc.php">View JSC Certificate</a></li>
            <li><a href="ssc.php">View SSC Certificate</a></li>
            <li><a href="hsc.php">View HSC Certificate</a></li>
            <li><a href="cocurricular.php">View Co-Curricular Certificate</a></li>
        </ul>
    </div>

</body>
</html>
