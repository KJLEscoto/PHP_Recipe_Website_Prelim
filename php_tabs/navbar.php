<link rel="stylesheet" href="../dist/output.css">

<!--
  COLOR:
  #ff8c00 = orange
  #de3300 = red

-->

<nav class="py-5 px-20 fixed top-0 left-0 w-full z-10">
  <header class="container mx-auto flex items-center justify-between">
    <section>
      <div class="flex items-center">
        <a href="../php_tabs/index.php"><img class="w-auto h-[40px] mr-2 hover:shadow-lg hover:scale-95 duration-150"
            src="../img/logo.png" alt="Logo"></a>
        <a href="../php_tabs/index.php"><span
            class="text-[#e54f2f] text-xl font-bold cursor-pointer hover:text-[#891c00]">
            <?php echo "Kent's Kitchen"; ?></span></a>
      </div>
    </section>
    <section>
      <ul class="font-semibold text-[#e54f2f] flex gap-7 text-base">
        <a href="../php_tabs/index.php">
          <li class="hover:text-[#891c00]"><?php echo "Home"; ?></li>
        </a>
        <a href="../php_tabs/recipes.php">
          <li class="hover:text-[#891c00]"><?php echo "Recipes"; ?></li>
        </a>
        <a href="../php_tabs/contacts.php">
          <li class="hover:text-[#891c00]"><?php echo "Contact"; ?></li>
        </a>
      </ul>
    </section>
    <section>
      <div class="relative">
        <input type="text"
          class="bg-[#fff4eb] text-[#2e1400] rounded-full py-2 pl-4 pr-12 focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300] shadow-lg"
          placeholder="Search a recipe...">
        <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-600">
          <img class="w-auto h-7 opacity-30" src="../img/search-icon.png" alt="search">
        </button>
      </div>

    </section>
  </header>
</nav>