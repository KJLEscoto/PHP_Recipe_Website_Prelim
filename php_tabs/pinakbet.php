<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes - Pinakbet | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="gradient-bg z-30">
  <?php include('navbar.php');?>
  <div class="p-20 mt-20">
    <section class="flex">
      <img class=" shadow-lg w-[700px] h-[450px] rounded-md" src="../img/pinakbet.jpg" alt="pinakbet">
      <div class="justify-center text-justify m-auto">
        <h1 class="text-3xl font-bold text-[#a52300] mb-10 text-center tracking-wide">Pinakbet</h1>
        <hr class="w-3/5 m-auto mb-5 border">
        <p class="text-[#ffede8] text-lg tracking-wider ml-5">Pinakbet is a popular vegetable dish in the Philippines
          that originated in the northern regions of the
          country.
          It typically includes a variety of vegetables such as bitter melon, eggplant, okra, squash, and string beans,
          cooked in a shrimp paste and tomato sauce. Pinakbet is often served with rice and is a nutritious and
          flavorful meal option.</p>
        <hr class="w-3/5 m-auto mt-5 mb-10 border">
        <div class="text-sm text-gray-300 tracking-widest w-3/5 m-auto">
          <p><span class="font-semibold">Prep Time:</span> 15 minutes | <span class="font-semibold">Cook Time:</span> 25
            minutes </p>
          <p><span class="font-semibold">Total Time:</span> 40 minutes | <span class="font-semibold">Servings:</span> 4
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
          <li>1 cup sliced bitter melon (ampalaya)</li>
          <li>1 cup sliced eggplant (talong)</li>
          <li>1 cup sliced okra (okra)</li>
          <li>1 cup cubed squash (kalabasa)</li>
          <li>1 cup sliced string beans (sitaw)</li>
          <li>2 medium tomatoes, chopped (kamatis)</li>
        </ul>
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>4 cloves garlic, minced (bawang)</li>
          <li>1 medium onion, chopped (sibuyas)</li>
          <li>1 thumb-sized piece of ginger, sliced (luya)</li>
          <li>2 tbsp shrimp paste (bagoong)</li>
          <li>2 cups water</li>
          <li>2 tbsp cooking oil</li>
        </ul>
      </div>
    </section>
    <hr class="mt-10">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-10">Procedures</h1>
      <div class="flex">
        <ul class="text-justify list-decimal px-5 text-lg tracking-wider text-[#ffede8] m-auto">
          <li>In a pot or wok, heat the cooking oil over medium heat. Add the garlic, onion, and ginger and sauté until
            fragrant.</li>
          <li>Add the shrimp paste and sauté for a few minutes until slightly browned</li>
          <li>Add the tomatoes and cook until they become soft and mushy.</li>
          <li>Add the cubed squash and enough water to cover it. Let it simmer for about 5 minutes.</li>
          <li>Add the rest of the vegetables - bitter melon, eggplant, okra, and string beans. Mix well and simmer until
            the vegetables are cooked, but not mushy. This usually takes about 10-15 minutes.</li>
          <li>Season with salt or fish sauce (patis) to taste.</li>
          <li>Serve hot with steamed rice.</li>
          <p class="text-sm mt-5 text-[#a52300]">Note: Some people like to add meat or fish to their Pinakbet.</p>
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