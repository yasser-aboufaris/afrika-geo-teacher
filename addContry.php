<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-6">Country Information</h2>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">Country Name:</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="population" class="block text-lg font-medium text-gray-700">Population:</label>
                <input type="number" id="population" name="population" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-6">
                <label for="language" class="block text-lg font-medium text-gray-700">Language:</label>
                <input type="text" id="language" name="language" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
             <a href="index.php">
            <div class="text-center">
                <input type="submit" value="Submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">
            </div></a>
        </form>
    </div>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "afrikageo";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $population = $_POST['population'];
    $language = $_POST['language'];

 
    $sql = "INSERT INTO pays (nome, population, langue) VALUES ('$name', '$population', '$language')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>