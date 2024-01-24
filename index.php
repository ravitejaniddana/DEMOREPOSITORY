<?php
session_start();

// Check if the user is already logged in, redirect to dashboard if true
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

// Check login credentials on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your actual authentication logic
    $validUsername = "user";
    $validPassword = "pass";

    if ($username === $validUsername && $password === $validPassword) {
        // Set session variables and redirect to dashboard
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $loginError = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sustainable Website</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Meet Our Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="section">
        <div class="welcome">
            <h1>Welcome to Our Sustainable Future</h1>
            <p>Join us in combating climate change for a sustainable future.</p>
            <button onclick="scrollToSection('about')">Learn More</button>
        </div>
    </section>

    <section id="about" class="section">
        <div class="about-content">
            <h2>About Us</h2>
            <p>We believe that by taking collective action, we can combat climate change and create a sustainable future for all. Join us in our mission to protect the environment and make a positive impact on the world.</p>
        </div>
    </section>

    <!-- Other sections go here -->

    <footer>
        <p>&copy; 2023 Sustainable Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sustainable Website</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color:green;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    margin: 5px;
    padding: 5px;
    display: flex;
    justify-content: space-around;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.section {
    padding: 2em;
    background-color:aliceblue;
}

.welcome {
    text-align: center;
    color: #333;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color:gold;
}

form {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin: 0 auto;
}

form label {
    margin-bottom: 0.5em;
}

footer {
    background-color: #4CAF50;
    padding: 1em;
    color: white;
    text-align: center;
}
.about-image {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
    padding-left: 1px;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#Goals">Goals</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="section">
        <div class="welcome">
            <h1>Welcome to Our Sustainable Future</h1>
            <p>Join us in combating climate change for a sustainable future.</p>
            <button onclick="scrollToSection('about')">Learn More</button>
        </div>
    </section>

    <section id="about" class="section">
        <div class="about-content">
            <h2>About Us</h2>
            <p>We believe that by taking collective action, we can combat climate change and create a sustainable future for all. Join us in our mission to protect the environment and make a positive impact on the world.</p>
        </div>
    </section>

    <section id="services" class="section">
        <div class="services-content">
            <h2>Our Goals</h2>
            <img src="C:\Users\hp\OneDrive\Pictures\image.jpg" alt="" class="about-image">
        </div>
            <ul>
                <li>Environmental awareness</li>
                <li>Climate action support </li>
                <li>Renewable Energy Solutions</li>
                <li>Emissions Reduction</li>
                <li>Sustainable Development Planning</li>
                <li>Regulatory Compilance</li>
            </ul>
        </div>
    </section>

    <section id="team" class="section">
        <div class="team-content">
            <h2>Meet Our Team</h2>
            <ul>
                <li>N.Raviteja</li>
                <li>N.Santhosh</li>
                <li>N.Govind Raju</li>
                <li>N.Vijay</li>
                <li>K.Harshith</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="contact-content">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <label for="fullName">Full name</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone number</label>
                <input type="tel" id="phone" name="phone">

                <button type="submit">Get Started</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Sustainable Website. All rights reserved.</p>
    </footer>

    <script >function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        section.scrollIntoView({ behavior: 'smooth' });
    }
    </script>
</body>
</html>
