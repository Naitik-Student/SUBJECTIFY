<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Questions - SUBJECTIFY</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Function to fetch questions based on user preferences
        async function fetchQuestions() {
            const urlParams = new URLSearchParams(window.location.search);
            const subject = urlParams.get('subject');
            const difficulty = urlParams.get('difficulty');

            // Fetch questions from the database
            const response = await fetch(`getQuestions.php?subject=${subject}&difficulty=${difficulty}`);
            const questions = await response.json();

            // Display questions
            const questionList = document.getElementById('questionList');
            questions.forEach(question => {
                const li = document.createElement('li');
                li.textContent = question.text; // Assuming the question text is in a 'text' field
                questionList.appendChild(li);
            });

            // Display user preferences
            document.getElementById('preferences').textContent = `Subject: ${subject}, Difficulty: ${difficulty}`;
        }

        window.onload = fetchQuestions;
    </script>
</head>
<body>
    <div class="background">
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
    </div>
    <header>
        <h1>Practice Questions</h1>
        <p id="preferences"></p>
        <div id="questionsContainer">
            <p>Here are some questions based on your interest:</p>
            <ul id="questionList">
                <!-- Questions will be dynamically inserted here -->
            </ul>
        </div>
        <a href="content.html" class="button">Go Back</a>
    </header>
</body>
</html>
