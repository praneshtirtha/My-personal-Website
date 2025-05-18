<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .header {
            background-color: #000000;
            padding: 20px;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
        }
        .resume-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            gap: 20px;
        }
        .pdf-viewer {
            width: 85%;
            height: 750px;
            border: none;
        }
        .download-btn {
            width: 15%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-custom {
            background-color: #1a73e8;
            color: #ffffff;
            border: none;
            padding: 12px 18px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #ff5733;
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .resume-container {
                flex-direction: column;
                align-items: center;
            }
            .pdf-viewer {
                width: 100%;
                height: 650px;
            }
            .download-btn {
                width: 100%;
                margin-top: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="header">My Resume</div>

    <div class="container resume-container">
        <!-- PDF Viewer (Larger) -->
        <iframe class="pdf-viewer" src="photos/resume.pdf"></iframe>

        <!-- Download Button (Right Side) -->
        <div class="download-btn">
            <a href="photos/resume.pdf" class="btn-custom" download>Download Resume</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
