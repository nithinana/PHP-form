<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $response = $_POST['response'];

    // Open the file for writing
    $file = fopen('responses.txt', 'a');

    // Write the responses to the file
    fwrite($file, "Name: $name\n");
    fwrite($file, "Email: $email\n");
    fwrite($file, "Response: $response\n\n");

    // Close the file
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: sans-serif;
            background-color: #09090d;
        }
        form {
            border: 1px solid #333;
            border-radius: 10px;
            padding: 20px;
            background-color: #1D1E26;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
            color: white;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #4f5167;
            color: white;
        }
        input[type="submit"] {
            background-color: #09090D;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        textarea::placeholder {
            color: #d0d0d0;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="response">Response</label>
        <textarea id="response" name="response" placeholder="idk what this is ibr"></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
