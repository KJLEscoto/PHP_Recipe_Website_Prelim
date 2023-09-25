<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes - Pancit Guisado | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="gradient-bg z-30">
  <?php include('navbar.php');?>
  <div class="p-20 mt-20">
    <section class="flex">
      <img class=" shadow-lg w-[700px] h-[450px] rounded-md" src="../img/pancit.jpg" alt="pancit">
      <div class="justify-center text-justify m-auto">
        <h1 class="text-3xl font-bold text-[#a52300] mb-10 text-center tracking-wide">Pancit Guisado</h1>
        <hr class="w-3/5 m-auto mb-5 border">
        <p class="text-[#ffede8] text-lg tracking-wider ml-5">Pancit Guisado is a popular Filipino noodle dish that is
          commonly served during celebrations and special
          occasions.
          It is made with bihon (rice noodles) stir-fried with a variety of vegetables such as carrots, cabbage, and
          bell peppers, along with sliced meat or seafood.
          Pancit Guisado is known for its savory taste and its symbolic significance of long life and prosperity in
          Filipino culture.</p>
        <hr class="w-3/5 m-auto mt-5 mb-10 border">
        <div class="text-sm text-gray-300 tracking-widest w-3/5 m-auto">
          <p><span class="font-semibold">Prep Time:</span> 20 minutes | <span class="font-semibold">Cook Time:</span> 30
            minutes </p>
          <p><span class="font-semibold">Total Time:</span> 50 minutes | <span class="font-semibold">Servings:</span> 5
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
          <li>1 pound bihon (rice noodles)</li>
          <li>1/2 pound pork, sliced into small pieces</li>
          <li>1/2 pound chicken, sliced into small pieces</li>
          <li>2 cloves garlic, minced</li>
          <li>1 onion, sliced</li>
          <li>1 cup sliced carrots</li>
          <li>1 cup sliced cabbage</li>
        </ul>
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>1 cup sliced green beans</li>
          <li>1 cup sliced bell peppers</li>
          <li>1/4 cup soy sauce</li>
          <li>1/4 cup oyster sauce</li>
          <li>4 cups chicken broth</li>
          <li>2 tablespoons cooking oil</li>
          <li>Salt and pepper to taste</li>
        </ul>
      </div>
    </section>
    <hr class="mt-10">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-10">Procedures</h1>
      <div class="flex">
        <ul class="text-justify list-decimal px-5 text-lg tracking-wider text-[#ffede8] m-auto">
          <li>Soak the bihon noodles in water for about 30 minutes, or until they become soft. Drain and set aside.</li>
          <li>In a large wok or pan, heat the cooking oil and sauté the garlic and onions until fragrant.</li>
          <li>Add the pork and chicken and cook until browned.</li>
          <li>Add the carrots, cabbage, green beans, and bell peppers and stir-fry for a few minutes.</li>
          <li>Pour in the soy sauce, oyster sauce, and chicken broth. Let it come to a boil.</li>
          <li>Add the bihon noodles and mix well with the rest of the ingredients.</li>
          <li>Season with salt and pepper to taste.</li>
          <li>Continue to stir-fry until the noodles are fully cooked and the sauce has been absorbed.</li>
          <p class="text-sm mt-5 text-[#a52300]">Enjoy your delicious and savory adobong manok!</p>
        </ul>
        <img class="w-[500px] h-[350px] rounded-md ml-5 shadow-md" src="../img/procedure-sponge.gif" alt="">
      </div>
    </section>
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