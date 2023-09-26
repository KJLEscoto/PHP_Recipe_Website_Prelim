<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes - Chicken Adobo | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="gradient-bg z-30">
  <?php include('navbar.php');?>
  <div class="p-20 mt-20">
    <section class="flex">
      <img class=" shadow-lg w-[700px] h-[450px] rounded-md" src="../img/adobo.jpg" alt="adobo">
      <div class="justify-center text-justify m-auto">
        <h1 class="text-3xl font-bold text-[#a52300] mb-10 text-center tracking-wide">Chicken Adobo</h1>
        <hr class="w-3/5 m-auto mb-5 border">
        <p class="text-[#ffede8] text-lg tracking-wider ml-5">Chicken Adobo is a popular Filipino dish made with
          chicken, vinegar, soy sauce, garlic, and bay leaves. It is a flavorful and savory dish that is often served
          with steamed rice. Chicken Adobo is a staple in Filipino cuisine and is enjoyed by many people in the
          Philippines and around the world.</p>
        <hr class="w-3/5 m-auto mb-10 mt-5 border">
        <div class="text-sm text-gray-300 tracking-widest w-3/5 m-auto">
          <p><span class="font-semibold">Prep Time:</span> 25 minutes | <span class="font-semibold">Cook Time:</span> 40
            minutes </p>
          <p><span class="font-semibold">Total Time:</span> 1 hour : 5 minutes | <span
              class="font-semibold">Servings:</span> 5
          </p>
        </div>
      </div>
    </section>
    <hr class=" mt-14">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-5">Ingredients</h1>
      <img class="m-auto rounded-md shadow-md w-[500px] h-[350px]" src="../img/ingredients-sponge.gif" alt="">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 text-[#ffede8] mt-5">
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>1 kilogram chicken, cut into serving pieces</li>
          <li>1/2 cup vinegar</li>
          <li>1/2 cup soy sauce</li>
          <li>1 head garlic, minced</li>
          <li>2 bay leaves</li>
        </ul>
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>1 teaspoon whole peppercorns</li>
          <li>1/2 cup water</li>
          <li>2 tablespoons cooking oil</li>
          <li>Salt to taste</li>
        </ul>
      </div>
    </section>
    <hr class="mt-10">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-10">Procedures</h1>
      <div class="flex">
        <ul class="text-justify list-decimal px-5 text-lg tracking-wider text-[#ffede8] m-auto">
          <li>In a large pot or wok, heat the cooking oil over medium heat.</li>
          <li>Add the minced garlic and sauté until fragrant</li>
          <li>Add the chicken and cook until lightly browned.</li>
          <li>Pour in the soy sauce, vinegar, water, bay leaves, and peppercorns. Stir to combine.</li>
          <li>Bring the mixture to a boil, then reduce the heat and let it simmer for 30-45 minutes or until the chicken
            is tender and fully cooked.</li>
          <li>Taste and adjust the seasoning with salt, if needed.</li>
          <li>Serve hot with steamed rice.</li>
          <p class="text-sm mt-5 text-[#a52300]">Enjoy your delicious and savory adobong manok!</p>
        </ul>
        <img class="w-[500px] h-[350px] rounded-md ml-5 shadow-md" src="../img/procedure-sponge.gif" alt="">
      </div>
    </section>
    <div class="flex justify-between">
      <a href="../php_tabs/pork-sisig.php">
        <div
          class="text-end mt-20 text-lg tracking-wider hover:underline text-[#a52300] hover:text-[#ffede8] transition-colors duration-200 ease-out">
          < Pork Sisig </div>
      </a>
      <a href="../php_tabs/pancit-guisado.php">
        <div
          class="text-end mt-20 text-lg tracking-wider hover:underline text-[#a52300] hover:text-[#ffede8] transition-colors duration-200 ease-out">
          Pancit Guisado >
        </div>
      </a>
    </div>
  </div>
  <div class="-mt-40">
    <?php include("footer.php")?>
  </div>
</body>

<style>
.gradient-bg {
  width: 100%;
  height: 100%;
  background: linear-gradient(150deg, #550d00, #ea674a, #f48f78, #ff993b, #9e5500);
  background-size: 200% 200%;
  animation: gradientBounce 5s linear infinite alternate;
  animation-timing-function: ease-in-out;
}

@keyframes gradientBounce {
  0% {
    background-position: 0% 50%;
  }

  100% {
    background-position: 100% 50%;
  }
}
</style>

</html>