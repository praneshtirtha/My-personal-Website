<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: rgb(0, 0, 0);
            color: #212529;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgb(223, 211, 211);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .contact-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            font-size: 1.2rem;
            gap: 10px;
        }
        .contact-item i {
            color:rgb(236, 85, 4);
            font-size: 1.5rem;
        }
        .contact-item a {
            color:rgb(42, 8, 134);
            text-decoration: none;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Me</h1>
        <p>If you'd like to get in touch with me, feel free to reach out through any of the methods below:</p>

        <div class="contact-list">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i> <a href="tel:+8801648054148">01648054148</a>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i> <a href="mailto:praneshmajumdertirtha@gmail.com">praneshmajumdertirtha@gmail.com</a>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i> <a href="mailto:pranesh.tirtha@northsouth.edu">pranesh.tirtha@northsouth.edu</a>
            </div>

            <div class="contact-item">
                <i class="fab fa-facebook"></i> <a href="https://www.facebook.com/share/15qhqo3M67/" target="_blank">Facebook Profile</a>
            </div>

            <div class="contact-item">
                <i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/praneshmajumdertirtha" target="_blank">LinkedIn Profile</a>
            </div>

            <div class="contact-item">
                <i class="fab fa-whatsapp"></i> <a href="https://wa.me/8801648054148" target="_blank">Chat on WhatsApp</a>
            </div>
        </div>

        <p>I look forward to hearing from you!</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
