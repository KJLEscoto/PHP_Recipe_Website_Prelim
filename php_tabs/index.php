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
</head>



<body class="gradient-bg">
  <?php include('navbar.php');?>
  <hr class="m-auto w-4/5 border mt-52 border-[#a52300]">
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
  <hr class="m-auto w-4/5 border border-[#a52300]">
  <?php include('footer.php');?>
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