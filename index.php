<?php
include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body class=" flex flex-col">
  <header>
    <div class="bg-slate-200 opacity-90 p-2">
      <ul class="flex justify-around h-10">
        <li class="font-bold text flex text-3xl hide ">
          <div class=" text-yellow-500">GEO</div><span class="font-light">AFRIKA</span>
        </li>
        <li> <button class=" bg-slate-200 p-2 rounded-lg hover:scale-110" id="ShowFrom"> <a href="admine.php"> ADD CONTRY  </a></button>
        </li>
        <li> <button class=" bg-slate-200 p-2 rounded-lg hover:scale-110" id="ShowFrom"> SHOW CONTRIES
          </button></li>
      </ul>
    </div>
  </header>
  <div class=" w-full flex justify-center">
    <div class=" h-[400px] flex items-center justify-center w-10/12 bg-cover hero mt-6">
      <div class="flex text-white justify-around h-64">
        <div class=" flex flex-col justify-around items-center">
          <div class=" text-7xl">WELCOME</div>
          <div class=" text-9xl">TO AFRIKA</div>
        </div>
      </div>
    </div>
  </div>

  <section class="contries flex flex-wrap">
    <?php
    $data = "SELECT * FROM pays";
    $result = $conn->query($data);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    while ($row = $result->fetch_assoc()) { ?>
        <div class="odd:bg-gray-100 even:bg-white border rounded-lg p-4 m-2">
            <div class="border border-gray-300 px-4 py-2">ID: <?= $row['id_Pays'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Name: <?= $row['nome'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Population: <?= $row['population'] ?></div>
            <div class="border border-gray-300 px-4 py-2">Language: <?= $row['langue'] ?></div>
          
        </div>
    <?php } ?>
</section>


  <footer class=" bg-slate-200 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex"><div class=" text-yellow-500">GEO</div><span class="font-black">AFRIKA</span></div>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
    <div class="w-full flex justify-around">
          
    </div>
</footer>
</body>

</html>