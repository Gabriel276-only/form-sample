<?php
// include("../services/databaseConnector.php")


?>

<!DOCTYPE html>
<html lang="pt-BR" <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../dist/style.css">
</head>

<body>
   
<nav class="bg-purple-300 pt-6 shadow pb-6 mx-4 rounded-b-2xl">
        <div class="flex flex-row justify-between items-center  ">
            <h2 class="text-lg leading-6 font-medium text-black-900 ml-8 flex "> Users </h2>
            <button class="mr-8 flex "> Log Out</button>
        </div>
</nav>



<div class="mt-6">
    <table class="w-full divide-y divide-gray-500">
        <thead class="bg-purple-200">
            <tr>
                <th class=" px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Nome</th>
                <th class=" px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Email</th>
                <th class=" px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"> Data</th>
                <th class=" px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"> WhatsApp</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr class="py-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                <td> Gabriel </td>
                <td>gabrielmagaborges@gmail.com</td>
                <td>2024</td>
                <td>24 99999-9999</td>
            </tr>
        </tbody>
    </table>
</div>
    </nav>
    
</body>

</html>