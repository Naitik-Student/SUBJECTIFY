<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBJECTIFY</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function positionMathSymbols() {
            const symbols = document.querySelectorAll('.math-symbol');
            symbols.forEach(symbol => {
                const randomX = Math.random() * 100; // Random percentage for X
                const randomY = Math.random() * 100; // Random percentage for Y
                symbol.style.left = randomX + '%';
                symbol.style.top = randomY + '%';
            });
        }
        window.onload = positionMathSymbols;
    </script>
</head>
<body>
    <!-- Background -->
    <div class="background">
        <div class="math-symbol">Σ</div>
        <div class="math-symbol">ρ</div>
        <div class="math-symbol">Δ</div>
        <div class="math-symbol">∫</div>
        <div class="math-symbol">∞</div>
        <div class="math-symbol">√</div>
        <div class="math-symbol">π</div>
        <div class="math-symbol">θ</div>
    </div>

    <!-- Header Content -->
    <header>
        <h1>Welcome to <span>SUBJECTIFY</span></h1>
        <p>Your ultimate hub for subject-wise and difficulty-sorted questions.</p>
        <div class="buttons">
            <a href="login.php" class="button">Login</a>
            <a href="signup.php" class="button">Sign Up</a>
            <a href="content.html" class="button">GET STARTED</a>
        </div>
    </header>

    <!-- User Preferences Form -->
    <section>
        <h2>Select Your Preferences</h2>
        <form action="questions.html" method="GET">
            <label for="subject">Subject:</label>
            <select name="subject" id="subject" required>
                <option value="math">Math</option>
                <option value="algebra">Algebra</option>
                <!-- Add more subjects as needed -->
            </select>
            <label for="difficulty">Difficulty:</label>
            <select name="difficulty" id="difficulty" required>
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select>
            <button type="submit">Get Questions</button>
        </form>
    </section>
</body>
</html>
