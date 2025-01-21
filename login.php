<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SUBJECTIFY</title>
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
        <h1>Login</h1>
        <form action="db.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login" class="button">
        </form>
    </header>
</body>
</html>
