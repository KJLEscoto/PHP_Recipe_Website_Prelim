<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes - Pork Sisig | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="gradient-bg z-30">
  <?php include('navbar.php');?>
  <div class="p-20 mt-20">
    <section class="flex">
      <img class=" shadow-lg w-[700px] h-[450px] rounded-md" src="../img/sisig.jpg" alt="sisig">
      <div class="justify-center text-justify m-auto">
        <h1 class="text-3xl font-bold text-[#a52300] mb-10 text-center tracking-wide">Pork Sisig</h1>
        <hr class="w-3/5 m-auto mb-5 border">
        <p class="text-[#ffede8] text-lg tracking-wider ml-5">Pork Sisig is a popular Filipino dish made
          from chopped
          pig's head
          and liver,
          seasoned
          with calamansi,
          onions,
          and chili peppers. The dish originated in Pampanga, a province in the Philippines known for its culinary
          delights. ork Sisig is often served sizzling on a hot plate, and is typically enjoyed as a flavorful appetizer
          or paired with rice as a main course.</p>
        <hr class="w-3/5 m-auto mt-5 mb-10 border">
        <div class="text-sm text-gray-300 tracking-widest w-3/5 m-auto">
          <p><span class="font-semibold">Prep Time:</span> 10 minutes | <span class="font-semibold">Cook Time:</span> 20
            minutes </p>
          <p><span class="font-semibold">Total Time:</span> 30 minutes | <span class="font-semibold">Servings:</span> 5
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
          <li>1 lb pork belly, boiled and grilled or broiled until crispy</li>
          <li>1 large onion, chopped</li>
          <li>3 cloves garlic, minced</li>
          <li>3-4 pieces chili peppers, chopped (or to taste)</li>
          <li>2 tablespoons soy sauce</li>
          <li>1 tablespoon vinegar (preferably cane vinegar)</li>
        </ul>
        <ul class="list-disc px-5 text-lg tracking-wider">
          <li>1/2 cup pig's liver, boiled and chopped into small pieces</li>
          <li>1 tablespoon calamansi juice (or lemon or lime juice)</li>
          <li>1/4 teaspoon black pepper</li>
          <li>2 tablespoons cooking oil</li>
          <li>Salt to taste</li>
          <li>Green onions, chopped</li>
        </ul>
      </div>
    </section>
    <hr class="mt-10">
    <section class="mt-10">
      <h1 class="font-bold text-3xl text-[#a52300] text-center m-auto tracking-wide mb-10">Procedures</h1>
      <div class="flex">
        <ul class="text-justify list-decimal px-5 text-lg tracking-wider text-[#ffede8] m-auto">
          <li>In a large bowl, combine the chopped pork belly and liver.</li>
          <li>In a separate bowl, mix together the soy sauce, vinegar, calamansi juice, and black pepper.</li>
          <li>In a pan over medium heat, add the cooking oil and sauté the garlic and onion until the onion
            becomes
            translucent.</li>
          <li>Add the chopped chili peppers and continue to sauté for 1-2 minutes.</li>
          <li>Pour in the soy sauce mixture and stir well.</li>
          <li>Add the chopped pork belly and liver, and stir until the ingredients are well coated with the
            sauce.</li>
          <li>Cook for an additional 2-3 minutes, stirring occasionally.</li>
          <li>If desired, top with a fried egg and chopped green onions before serving.</li>
          <p class="text-sm mt-5 text-[#a52300]">Note: Serve hot on a sizzling plate and enjoy!</p>
        </ul>
        <img class="w-[500px] h-[350px] rounded-md ml-5 shadow-md" src="../img/procedure-sponge.gif" alt="">
      </div>
    </section>
    <div class="flex justify-between">
      <div></div>
      <a href="../php_tabs/chicken-adobo.php">
        <div
          class="text-end mt-20 text-lg tracking-wider hover:underline text-[#a52300] hover:text-[#ffede8] transition-colors duration-200 ease-out">
          Chicken
          Adobo >
        </div>
      </a>
    </div>

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