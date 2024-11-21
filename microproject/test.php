<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Number System Quiz</title>
    <link rel="stylesheet" href="test.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container p-4 bg-white shadow rounded" style="max-width: 600px;">
        <h1 class="text-center text-primary">Number System Quiz</h1>
        <p class="text-center text-secondary">Answer the following questions about numbers in numeric and word forms.</p>
        
        <form id="quizForm">
            <div id="questionsContainer"></div>
            <div style="text-align: center;">
                <button id="prevButton" type="button" onclick="prevQuestion()" class="btn btn-secondary me-2">Back</button>
                <button id="nextButton" type="button" onclick="nextQuestion()" class="btn btn-secondary me-2">Next</button>
            </div>
        </form>

        <p id="result" class="text-center fw-bold mt-3"></p>
    </div>

    <!-- Modal to display score -->
    <div class="modal fade" id="scoreModal" tabindex="-1" aria-labelledby="scoreModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scoreModalLabel">Quiz Result</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="scoreText">Your score is:</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Questions and correct answers about numbers in words and digits
        const quizData = [
            { question: "1. What is the word for the number 1?", answer: "one" },
            { question: "2. What is the word for the number 2?", answer: "two" },
            { question: "3. What is the number for 'three'?", answer: "3" },
            { question: "4. What is the word for the number 4?", answer: "four" },
            { question: "5. What is the number for 'five'?", answer: "5" },
            { question: "6. What is the word for the number 6?", answer: "six" },
            { question: "7. What is the number for 'seven'?", answer: "7" },
            { question: "8. What is the word for the number 8?", answer: "eight" },
            { question: "9. What is the number for 'nine'?", answer: "9" },
            { question: "10. What is the word for the number 10?", answer: "ten" },
            { question: "11. What is the word for the number 20?", answer: "twenty" },
            { question: "12. What is the number for 'thirty'?", answer: "30" },
            { question: "13. What is the word for the number 40?", answer: "forty" },
            { question: "14. What is the number for 'fifty'?", answer: "50" },
            { question: "15. What is the word for the number 60?", answer: "sixty" },
            { question: "16. What is the number for 'seventy'?", answer: "70" },
            { question: "17. What is the word for the number 80?", answer: "eighty" },
            { question: "18. What is the number for 'ninety'?", answer: "90" },
            { question: "19. What is the word for the number 100?", answer: "hundred" },
            { question: "20. What is the number for 'one hundred'?", answer: "100" }
        ];

        // Shuffle questions and select 20
        const selectedQuestions = quizData.sort(() => 0.5 - Math.random()).slice(0, 20);
        let currentQuestionIndex = 0;

        function loadQuestions() {
            const container = document.getElementById('questionsContainer');
            selectedQuestions.forEach((item, index) => {
                const questionDiv = document.createElement('div');
                questionDiv.classList.add('question');
                questionDiv.innerHTML = `
                    <label>Question ${index + 1}: ${item.question.replace(/^\d+\.\s*/, "")}</label><br>
                    <input type="text" name="q${index}" required>
                `;
                container.appendChild(questionDiv);
            });
            showQuestion(currentQuestionIndex);
        }

        function showQuestion(index) {
            const questions = document.querySelectorAll('.question');
            questions.forEach((q, i) => q.style.display = i === index ? 'block' : 'none');

            document.getElementById('prevButton').style.display = index === 0 ? 'none' : 'inline-block';
            const nextButton = document.getElementById('nextButton');
            if (index === questions.length - 1) {
                nextButton.textContent = 'Finish';
                nextButton.onclick = submitQuiz;
            } else {
                nextButton.textContent = 'Next';
                nextButton.onclick = nextQuestion;
            }
        }

        function nextQuestion() {
            if (currentQuestionIndex < selectedQuestions.length - 1) {
                currentQuestionIndex++;
                showQuestion(currentQuestionIndex);
            }
        }

        function prevQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                showQuestion(currentQuestionIndex);
            }
        }

        function submitQuiz() {
    const form = document.getElementById('quizForm');
    const formData = new FormData(form);
    let score = 0;

    formData.forEach((answer, key) => {
        const questionIndex = key.substring(1);
        if (answer.trim().toLowerCase() === selectedQuestions[questionIndex].answer.toLowerCase()) {
            score++;
        }
    });

    // Show the score in the modal
    document.getElementById('scoreText').innerText = `Your score: ${score} out of 20`;

    // Show the Bootstrap modal
    const scoreModal = new bootstrap.Modal(document.getElementById('scoreModal'));
    scoreModal.show();

    // Add an event listener to redirect based on the score when the modal is closed
    document.getElementById('scoreModal').addEventListener('hidden.bs.modal', function () {
        if (score < 10) {
            window.location.href = "newt.php";
        } else {
            window.location.href = "class1e.php";
        }
    });
}


        window.onload = loadQuestions;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
