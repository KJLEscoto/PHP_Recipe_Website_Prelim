<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes - Beef Pares | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="gradient-bg z-30">
  <?php include('navbar.php');?>
  <div class="p-20 mt-20">
    <section class="flex">
      <img class=" shadow-lg w-[700px] h-[450px] rounded-md" src="../img/beef.jpg" alt="beef">
      <div class="justify-center text-justify m-auto">
        <h1 class="text-3xl font-bold text-[#a52300] mb-10 text-center tracking-wide">Beef Pares</h1>
        <hr class="w-3/5 m-auto mb-5 border">
        <p class="text-[#ffede8] text-lg tracking-wider ml-5">Beef pares is a popular Filipino dish that originated in
          the streets of Metro Manila.
          It consists of tender beef brisket simmered in a sweet and savory soy sauce-based broth, served with garlic
          fried rice and a side of clear beef broth.
          This dish has become a staple comfort food in many Filipino households and food establishments.</p>
        <hr class="w-3/5 m-auto mt-5 mb-10 border">
        <div class="text-sm text-gray-300 tracking-widest w-3/5 m-auto">
          <p><span class="font-semibold">Prep Time:</span> 25 minutes | <span class="font-semibold">Cook Time:</span> 2
            hours </p>
          <p><span class="font-semibold">Total Time:</span> 2 hours : 25 minutes | <span
              class="font-semibold">Servings:</span> 6
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
          <li>1 kg beef brisket, cut into cubes</li>
          <li>1/2 cup soy sauce</li>
          <li>1/2 cup brown sugar</li>
          <li>1 head of garlic, minced</li>
          <li>1 onion, chopped</li>
          <li>1 thumb-sized ginger, sliced</li>
        </ul>
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>1 tsp star anise</li>
          <li>1 tsp black pepper</li>
          <li>6 cups water</li>
          <li>2 tbsp cooking oil</li>
          <li>Salt to taste</li>
          <li>3 cups cooked rice</li>
        </ul>
      </div>
    </section>
    <hr class="mt-10">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-10">Procedures</h1>
      <div class="flex">
        <ul class="text-justify list-decimal px-5 text-lg tracking-wider text-[#ffede8] m-auto">
          <li>In a pot, heat the oil over medium heat. Saute the garlic, onion, and ginger until fragrant.</li>
          <li>Add the beef brisket and cook until browned.</li>
          <li>Pour in the soy sauce and brown sugar. Add the star anise and black pepper.</li>
          <li>Stir everything together and let it simmer for 10 minutes.</li>
          <li>Pour in the water and bring it to a boil. Lower the heat and let it simmer until the beef is tender
            (around
            1-2 hours).</li>
          <li>In a separate pan, heat the oil and saute the minced garlic until browned. Add the cooked rice and stir
            until well combined.</li>
          <li>Serve the beef pares with garlic fried rice and a side of clear beef broth.</li>
          <p class="text-sm mt-5 text-[#a52300]">Note: Some people like to add meat or fish to their Pinakbet.</p>
        </ul>
        <img class="w-[500px] h-[350px] rounded-md ml-5 shadow-md" src="../img/procedure-sponge.gif" alt="">
      </div>
    </section>
    <div class="flex justify-between">
      <a href="../php_tabs/pinakbet.php">
        <div
          class="text-end mt-20 text-lg tracking-wider hover:underline text-[#a52300] hover:text-[#ffede8] transition-colors duration-200 ease-out">
          < Pinakbet </div>
      </a>
      <div></div>
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