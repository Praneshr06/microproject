<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a class name</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        #linkOutput a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            word-break: break-word;
            display: inline-block;
            margin-top: 10px;
        }

        #linkOutput a:hover {
            text-decoration: underline;
        }

        input {
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="mb-4">Classroom Name</h3>
    <input type="text" id="userInput" class="form-control" placeholder="Enter class name">
    <button onclick="generateLink()" class="btn btn-primary w-100">Generate Link</button>
    <p id="linkOutput" class="mt-3"></p>
</div>

<script>
    function generateRandomID(length) {
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return result;
    }

    function generateLink() {
        let userWords = document.getElementById("userInput").value;
        if (userWords.trim() === "") {
            alert("Please enter some words.");
            return;
        }
        let formattedWords = userWords.trim().replace(/\s+/g, '-');
        let uniqueID = generateRandomID(10);  // Generates a 10-character random ID
        let baseURL = "https://example.com/";
        let fullURL = `${baseURL}${formattedWords}-${uniqueID}`;  // Combine words with unique ID

        // Display the unique link
        let linkOutput = document.getElementById("linkOutput");
        linkOutput.innerHTML = `<a href="${fullURL}" target="_blank">${fullURL}</a>`;
    }
</script>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
