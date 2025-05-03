<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form class="contact-form" action="#" method="POST" aria-label="Contact form">
            <h1>Send us a Message</h1>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name"  aria-required="true">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email"  aria-required="true">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone">
                </div>
                
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" id="website" name="website" placeholder="Enter your website">
                </div>
            </div>

            <div class="form-group">
                <label for="message">Write your message</label>
                <textarea id="message" name="message" rows="6"  aria-required="true"></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Send Message</button>
                <p id="sending-message">Sending your message...</p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>