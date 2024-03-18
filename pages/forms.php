<?php
// include("../services/databaseConnector.php")
if(isset($_POST)){ 
     print_r($_POST);
}
?>

<!DOCTYPE html>
<html lang="pt-BR" <meta charset="UTF-8">
<meta name="viewport" content="widthoption0=device-widthoption0, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../dist/style.css">
</head>

<body>
    <form action="endForm.php" method="POST">
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-300 to-indigo-700">
    <div class="relative flex  col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <div class="flex flex-col justify-center p-8 md:p-14">
           
            <span class="mb-3  font-bold text-4xl pl-6px  flex justify-center mt-4 pb-2 ">Agora é rápido</span>
            <span class="mb-3 font-light text-sm pl-6px  flex justify-center mt-4 pb-2 ">preencha esse formulário para continuarmos nosso trabalho</span>   
                 
                    <div class=" m-5 mb-4 grid py-4">
            
                        <span class="mb-2 text-md ">WhatsApp</span>
                        <input class =" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="tel" name="phone" placeholder="WhatsApp" required ><br>
                        <span class="mb-2 text-md ">Ano</span>
                        <input class =" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="date" name="date" placeholder="Ano" required><br>
                        <span class="mb-2 text-md ">Data de Entrada</span><br>
                        
                        <ul class="flex flex-col sm:flex-row">
  <li class="inline-flex items-center gap-x-2.5 py-4 px-4 text-sm font-medium  bg-white
  border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg ">
    <div class="relative flex items-center w-full">
      <div class="flex items-center h-5">
        <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 " checked>
      </div>
      <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-800">
        2022
      </label>
    </div>
  </li>

  <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium  bg-white
  border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
    <div class="relative flex  items-center w-full">
      <div class="flex items-center h-5">
        <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 ">
      </div>
      <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-800">
        2023
      </label>
    </div>
  </li>

  <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium  bg-white
  border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
    <div class="relative flex items-center w-full">
      <div class="flex items-center h-5">
        <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 ">
      </div>
      <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-800 ">
        2024
      </label>
    </div>
  </li>
</ul>
                        <span class="mb-2 text-md ">responda também essas perguntas: </span>
                        <span class="mb-3 font-light text-sm pl-6px  flex  mt-4 pb-2 "> -Como você conheceu o campus? </span>
                        <input class =" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="name" name="name" required ><br>
                        <span class="mb-3 font-light text-sm pl-6px  flex  mt-4 pb-2 "> -Pretende seguir o a linha do curso? </span>
                        <input class =" w-full border border-gray-300 hover:bg-gray-200 rounded-md  p-2 " type="name" name="name" required ><br>
                        <button type="submit" name="submit" class="bg-gradient-to-r from-blue-600 to-indigo-800 hover:from-green-500 hover:to-blue-600 text-white font-bold py-2 px-4 rounded flex text-center justify-center">Enviar</button>
            </div>

    </form>
</body>

</html>