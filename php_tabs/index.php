<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../dist/output.css">
  <title>Home | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="stylesheet" href="../dist/gradient-bg.css">
</head>

<body id="gradient-bg">
  <?php include('./includes/navbar.php');?>
  <div class="bg-[url('../img/home-bg.jpg')] bg-cover mt-52 bg-center opacity-80 duration-300 shadow-md">
    <section class="p-20 flex">
      <div class="w-screen flex text-center justify-center items-center mb-10">
        <div class="items-center">
          <p class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl p-5 duration-300 text-[#973722]">FOOD IS
            LIFE.</p>
          <hr class="m-auto w-4/5 border-2 border-[#a52300]">
          <p class="md:text-5xl lg:text-6xl xl:text-7xl duration-300 text-3xl p-4 font-bold text-[#761700]">Filipino
            Recipe Ideas</p>
        </div>
      </div>
    </section>
  </div>

  <?php include('./includes/footer.php');?>
</body>

</html>