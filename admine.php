<?php include("connect.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div class=" bg-slate-200 shadow-lg opacity-90 p-2">
            <ul class="flex justify-around h-10">
                <li class="font-bold text flex text-3xl hide ">
                    <div class="text-yellow-500">GEO</div><span class="font-light">AFRIKA</span>
                </li>
                <li> <button class="  p-2 rounded-lg hover:scale-110" id="ShowFrom"> ADD CONTRY </button>
                </li>
                <li> <button class="  p-2 rounded-lg hover:scale-110" id="ShowFrom"> SHOW CONTRIES</button></li>
            </ul>
        </div>
        
        <section class="contries flex flex-wrap">
    <?php
    $data = "SELECT * FROM pays";
    $result = $conn->query($data);

    if (!$result) {
        die("Invalid query:" . $conn->error);
    }

    while ($row = $result->fetch_assoc()) { ?>
        <div class="odd:bg-gray-100 even:bg-white border rounded-lg p-4 m-2">
            <div class="border border-gray-300 px-4 py-2">ID: <?= $row['id_Pays'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Name: <?= $row['nome'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Population: <?= $row['population'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Language: <?= $row['langue'] ?></div>
            <div class="flex justify-between mt-2">
                <a href="editpays.php?id=<?= $row['id_Pays'] ?>" 
                   class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600">Edit</a>
                <a href="deletepays.php?id=<?= $row['id_Pays'] ?>" 
                   class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</a>
            </div>
        </div>
    <?php }?>
</section>

</body>

</html>