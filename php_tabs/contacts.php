<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Kent's Kitchen</title>
  <link rel="shortcut icon" type="x-icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
  <?php include('navbar.php');
    ?>
  <div
    class="px-20 bg-[url(../img/contact_bg.jpg)] backdrop-blur-2xl bg-cover bg-no-repeat bg-center w-full h-screen bg-[#6e6d6c] bg-blend-multiply">
    <section class="pt-28 flex">
      <div class="text-justify mr-10">
        <h1 class="text-[#fbb5a5] font-bold text-3xl"><?php echo "About This Website!";?></h1>
        <p class="text-[#ffede8] mt-7 text-lg tracking-wider">
          <?php echo "Hello, and welcome to Kent’s Kitchen recipe website! As a passionate home cook and food enthusiast, I created this
      platform as a space to share my love of cooking and all things culinary with you. Whether you're a seasoned pro or
      a beginner in the kitchen, I hope to inspire you to get creative with your cooking and try out new recipes.";?>
        </p>
        <p class="mt-3 text-lg text-[#ffede8] tracking-wider">
          <?php echo "On this website, you'll find a wide range of recipes to suit all tastes and preferences. From quick and easy weeknight meals to more complex dishes for special occasions, I've got you covered. I also understand the importance of dietary restrictions, so I've included plenty of options for those following a vegetarian, vegan, or gluten-free diet. So, take a look around, find a recipe that catches your eye, and let's get cooking!"?>
        </p>
        <hr class="mt-5">

        <h1 class="mt-5 text-[#fbb5a5] font-bold text-3xl">Send Us Recommendation!</h1>

        <div class="flex pt-5 justify-between">
          <div>
            <label class="text-[#ffede8]"><?php echo "Your email address:";?></label><br>
            <input
              class="text-[#2e1400] w-[450px] border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300]"
              type="text" name="email" id="email" required>
          </div>
          <div>
            <label class="text-[#ffede8]"><?php echo "Subject:";?></label><br>
            <input
              class="text-[#2e1400] w-[450px] border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300]"
              type="text" name="subject" id="subject" required>
          </div>
        </div>

        <div class="pt-5">
          <label class="text-[#ffede8]"><?php echo "Message:";?></label><br>
          <textarea
            class="w-full h-24 text-[#2e1400] border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-[#ea674a] focus:border-[#de3300] resize-none"
            name="message" id="message" required></textarea>
          <form class="pt-5" action="contact.php" method="post" onsubmit="return onSubmit()">
            <input class="border-2 py-1 hover:border-[#ea674a] text-[#fbb5a5] px-5 rounded" type="submit"
              value="SEND NOW" name="send">
          </form>
        </div>
      </div>
      <div class="text-[#f48f78] block">
        <video class="rounded-xl w-[1200px] h-auto shadow-lg" src="../img/food-shorts.mp4" loop muted autoplay></video>
        <hr class="border mt-5 w-[70%] m-auto border-[#ffdad2]">
        <div class="mt-4 flex justify-center">
          <p class="text-[15px] font-semibold"><?php echo "Visit & Follow Us On:"?></p>
          <a href="https://www.facebook.com/profile.php?id=100091118010053" target="_blank"><img
              class="w-[20px] ml-2 rounded-md hover:shadow-md" src="../img/fb-logo.png" alt=""></a>
          <a href="https://www.instagram.com/kents_kitchen24/" target="_blank"><img
              class="w-[20px] ml-3 rounded-md hover:shadow-md" src="../img/ig-logo.png" alt=""></a>
          <a href="https://twitter.com/Kents_Kitchen" target="_blank"><img
              class="w-[20px] ml-3 rounded-md hover:shadow-md" src="../img/x-logo.png" alt=""></a>
        </div>
      </div>
    </section>
  </div>

  <div class="bg-[#c12b00] shadow-md rounded-lg overflow-hidden hover:scale-95 transition duration-300 ease-in-out">
    <img class="w-full h-48 object-cover" src="../img/rec-1.png" alt="Recipe Image">
    <div class="p-4">
      <h2 class="text-2xl font-bold text-[#891c00] mb-3">Pork Sisig</h2>
      <p class="text-sm text-gray-600">Prep Time: 10 minutes</p>
      <p class="text-sm text-gray-600">Cook Time: 20 minutes</p>
      <p class="text-sm text-gray-600">Total Time: 30 minutes</p>
      <p class="text-sm text-gray-600">Servings: 5</p>
      <hr class="my-4">
    </div>
  </div>

  <script>
  function onSubmit() {
    if (!document.getElementById("email").value || !document.getElementById("subject").value || !document
      .getElementById("message").value) {
      alert("Please fill out all required fields.");
      return false;
    }

    // Clear input fields
    document.getElementById("email").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";

    // Display an alert/notification
    alert("Message sent successfully!");

    // Prevent the form from actually submitting
    return false;
  }
  </script>

</body>

</html>