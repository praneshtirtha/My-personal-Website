<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSC Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .certificate {
            margin-bottom: 20px;
        }
        .certificate img {
            width: 100%;
            max-width: 500px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        /* Rotate the 1st and 3rd images */
        .rotate {
            transform: rotate(270deg);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>HSC Certificates</h1>
        <div class="certificate">
            <img src="photos/cert-hsc_page-0001.jpg" alt="HSC Certificate" class="rotate">
        </div>
        <div class="certificate">
            <img src="photos/transc-hsc_page-0001.jpg" alt="HSC Transcript">
        </div>
        <div class="certificate">
            <img src="photos/test-hsc_page-0001.jpg" alt="HSC Testimonial" class="rotate">
        </div>
    </div>
</body>
</html>
