<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="stylesheet" href="../dist/gradient-bg.css">
</head>

<body id="gradient-bg">
  <?php include('./includes/navbar.php');?>
  <section class="mt-32 flex md:px-20 px-10 duration-300">
    <div class="text-justify xl:mr-10">
      <h1 class="text-[#a52300] font-bold md:text-5xl sm:text-3xl text-2xl duration-300 hidden xl:block">
        <?php echo "About This Website!";?></h1>
      <h1 class="text-[#a52300] font-bold md:text-5xl text-center sm:text-3xl text-2xl duration-300 xl:hidden block">
        <?php echo "About This Website!";?></h1>
      <p class="text-[#ffede8] mt-7 md:tracking-wider tracking-widest md:text-lg sm:text-base text-sm duration-300">
        <?php echo "Hello, and welcome to Kent’s Kitchen recipe website! As a passionate home cook and food enthusiast, I created this
      platform as a space to share my love of cooking and all things culinary with you. Whether you're a seasoned pro or
      a beginner in the kitchen, I hope to inspire you to get creative with your cooking and try out new recipes.";?>
      </p>
      <p class="mt-3 text-[#ffede8] md:tracking-wider tracking-widest md:text-lg sm:text-base text-sm duration-300">
        <?php echo "On this website, you'll find a wide range of recipes to suit all tastes and preferences. From quick and easy weeknight meals to more complex dishes for special occasions, I've got you covered. I also understand the importance of dietary restrictions, so I've included plenty of options for those following a vegetarian, vegan, or gluten-free diet. So, take a look around, find a recipe that catches your eye, and let's get cooking!"?>
      <div class="mt-7 flex xl:justify-start justify-center duration-300">
        <p class="text-[#891c00] font-semibold cursor-default sm:text-sm text-xs duration-300">
          <?php echo "Visit & Follow Us On:"?></p>
        <a href="https://www.facebook.com/profile.php?id=100091118010053" target="_blank"><img
            class="w-[20px] ml-2 rounded-md hover:shadow-md" src="../img/fb-logo.png" alt=""></a>
        <a href="https://www.instagram.com/kents_kitchen24/" target="_blank"><img
            class="w-[20px] ml-3 rounded-md hover:shadow-md" src="../img/ig-logo.png" alt=""></a>
        <a href="https://twitter.com/Kents_Kitchen" target="_blank"><img
            class="w-[20px] ml-3 rounded-md hover:shadow-md" src="../img/x-logo.png" alt=""></a>
      </div>
      </p>
    </div>
    <div class="hidden xl:block">
      <video class="rounded-xl w-auto h-auto shadow-xl" src="../img/food-shorts.mp4" loop muted autoplay></video>
    </div>
  </section>
  <hr class="mt-10 border-[#a52300]">
  <div class="md:px-20 px-10">
    <h1 class="mt-5 text-[#a52300] font-bold md:text-5xl sm:text-3xl text-2xl duration-300 hidden xl:block">
      Send Us Recommendation!
    </h1>
    <h1 class="mt-5 text-[#a52300] font-bold md:text-5xl sm:text-3xl text-2xl duration-300 text-center xl:hidden block">
      Send Us Recommendation!
    </h1>
    <div class="xl:flex pt-5 justify-between block m-auto">
      <div class="xl:w-1/2">
        <label
          class="text-[#ffede8] md:text-lg sm:text-base text-sm duration-300"><?php echo "Your email address:";?></label><br>
        <input
          class="text-[#891c00] w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300]"
          type="text" name="email" id="email" required>
      </div>
      <div class="px-24"></div>
      <div class="xl:w-1/2 mt-5 xl:mt-0">
        <label class="text-[#ffede8] md:text-lg sm:text-base text-sm duration-300"><?php echo "Subject:";?></label><br>
        <input
          class="text-[#891c00] w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300]"
          type="text" name="subject" id="subject" required>
      </div>
    </div>
    <div class="pt-5">
      <label class="text-[#ffede8] md:text-lg sm:text-base text-sm duration-300"><?php echo "Message:";?></label><br>
      <textarea
        class="w-full h-24 text-[#891c00] border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300] resize-none"
        name="message" id="message" required></textarea>
      <form class="pt-5 text-center justify-center" action="contact.php" method="post" onsubmit="return onSubmit()">
        <input
          class="hover:border-[#ffdad2] border-2 font-semibold px-3 py-2 rounded hover:bg-[#c12b00] hover:text-[#ffdad2] border-[#c12b00] text-[#c12b00] bg-[#ffdad2] transition-all duration-300 ease-in-out md:text-lg sm:text-base text-sm hidden xl:block"
          type="submit" value="SEND NOW!" name="send">
        <input
          class="hover:border-[#ffdad2] border-2 font-semibold px-3 py-2 rounded hover:bg-[#c12b00] hover:text-[#ffdad2] border-[#c12b00] text-[#c12b00] bg-[#ffdad2] transition-all duration-300 ease-in-out md:text-lg sm:text-base text-sm xl:hidden block m-auto"
          type="submit" value="SEND NOW!" name="send">
      </form>
    </div>
  </div>
  <div class="-mt-20">
    <?php include("./includes/footer.php")?>
  </div>

  <script>
  function onSubmit() {
    if (!document.getElementById("email").value || !document.getElementById("subject").value || !document
      .getElementById("message").value) {
      alert("Please fill out all required fields.");
      return false;
    }

    document.getElementById("email").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";

    alert("Message sent successfully!");

    return false;
  }
  </script>
</body>

</html>