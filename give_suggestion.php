<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give a Suggestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #fff;
            background-color: #333;
            color: #fff;
            margin-bottom: 10px;
        }
        .btn-submit {
            background-color: #1a73e8;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 5px;
        }
        .btn-submit:hover {
            background-color: #ff5733;
            transform: scale(1.05);
        }
        .btn-back {
            display: block;
            margin-top: 15px;
            color: #fff;
            text-decoration: none;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Give a Suggestion</h2>
        <p>Share your thoughts, advice, or life experiences!</p>
        <form action="submit_suggestion.php" method="POST">
            <textarea name="suggestion" placeholder="Write your suggestion here..." required></textarea>
            <br>
            <button type="submit" class="btn-submit">Submit Suggestion</button>
        </form>
        <a href="home.php" class="btn-back">← Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
