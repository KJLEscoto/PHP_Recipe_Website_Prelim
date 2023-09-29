<link rel="stylesheet" href="../../dist/output.css">

<nav id="navbar" class="py-5 md:px-20 px-10 duration-300 fixed top-0 left-0 w-full z-10">
  <header class="mx-auto flex items-center justify-between duration-300">
    <section class="">
      <div class="flex items-center">
        <a href="../../php_tabs/index.php"><img
            class="w-auto h-[40px] mr-2 hover:shadow-lg hover:scale-95 transition duration-300 ease-in-out"
            src="../../img/logo.png" alt="Logo"></a>
        <a href="../../php_tabs/index.php"><span
            class="hover:text-[#ffede8] text-xl font-bold cursor-pointer text-[#891c00] transition duration-300 ease-in-out tracking-wider">
            <?php echo "Kent's Kitchen"; ?></span></a>
      </div>
    </section>
    <section class="lg:block hidden">
      <ul class="font-semibold text-[#891c00] flex gap-7 text-base tracking-wider">
        <a href="../../php_tabs/index.php">
          <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Home"; ?></li>
        </a>
        <a href="../../php_tabs/recipes.php">
          <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Recipes"; ?></li>
        </a>
        <a href="../../php_tabs/contacts.php">
          <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Contact"; ?></li>
        </a>
      </ul>
    </section>
    <section class="lg:block hidden">
      <div class="relative">
        <input type="text"
          class="bg-[#fff4eb] text-[#891c00] rounded-full py-2 pl-4 pr-12 focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300] shadow-lg tracking-wider"
          placeholder="Search a recipe...">
        <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-600">
          <img class="w-auto h-7 opacity-30" src="../../img/search-icon.png" alt="search">
        </button>
      </div>
    </section>
    <section class="lg:hidden">
      <button id="menu-button">
        <div id="menu-icon">
          <img class="w-auto h-7 opacity-80" src="../../img/menu-icon.png" alt="Menu">
        </div>
      </button>
    </section>
  </header>
  <section id="responsive-menu" class="lg:hidden hidden text-end">
    <ul class="font-semibold text-[#891c00] flex flex-col gap-4 text-base tracking-wider">
      <a href="../../php_tabs/index.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Home"; ?></li>
      </a>
      <a href="../../php_tabs/recipes.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Recipes"; ?></li>
      </a>
      <a href="../../php_tabs/contacts.php">
        <li class="hover:text-[#ffede8] transition duration-300 ease-in-out"><?php echo "Contact"; ?></li>
      </a>
    </ul>
  </section>
</nav>

<script>
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    navbar.classList.add('bg-[#e54f2f]', 'bg-opacity-90', 'transition-all', 'duration-500', 'ease-in-out',
      'shadow-lg');
  } else {
    navbar.classList.remove('bg-[#e54f2f]', 'bg-opacity-90', 'shadow-lg');
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const menuButton = document.getElementById("menu-button");
  const responsiveMenu = document.getElementById("responsive-menu");
  const menuIcon = document.getElementById("menu-icon");

  menuButton.addEventListener("click", function() {
    responsiveMenu.classList.toggle("hidden");

    if (responsiveMenu.classList.contains("hidden")) {
      menuIcon.innerHTML = '<img class="w-auto h-7 opacity-80" src="../../img/menu-icon.png" alt="Menu">';
    } else {
      menuIcon.innerHTML = '<img class="w-auto h-6 opacity-80" src="../../img/close-icon.png" alt="Close">';
    }
  });
});
</script>