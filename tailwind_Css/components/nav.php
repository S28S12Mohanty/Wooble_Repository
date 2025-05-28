<!-- bg-blue-900/80 -->
<?php
     $loginUrl = "../L_S_Page";
?>
<?php
$Profile = "../profile/profile.php";
?>


<nav class="bg-blue-900/80 backdrop-blur-md border border-white/10 p-2">
  <div class="container mx-auto flex justify-between items-center">
      <div class="flex gap-4">
          <img src="" alt="img not found" id="profile-icon" style=" height: 2rem;
    width: 2rem;
    border-radius: 50%;">
          <h5 id="icon-name">Image</h5>
      </div>

    <div class="hidden md:flex space-x-9">
      <a href="#home" class="text-gray-300 hover:text-white p-2">Home</a>
      <a href="#services" class="text-gray-300 hover:text-white p-2">Services</a>
      <a href="#resume" class="text-gray-300 hover:text-white p-2">Resume</a>
      <a href="#portfolio" class="text-gray-300 hover:text-white p-2">Portfolio</a>
      <a href="<?php echo $Profile; ?>" class="text-gray-300 hover:text-white p-2">Profile</a>
      <a href="#contact" class="text-gray-300 hover:text-white p-2">Contact</a>
      <a href="<?php echo $loginUrl; ?>"
        class="hover:cursor-pointer text-white font-bold p-2 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-white text-center"
        role="button">
        LogIn
      </a>


    </div>



    <div class="md:hidden">
      <button id="menu-btn" class="focus:outline-none">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg> -->
        <box-icon name="menu" color="#ffffff"></box-icon>
      </button>
    </div>
  </div>
  <div id="menu" class="hidden md:hidden">
    <a href="#home" class="block text-gray-300 hover:text-white p-2">Home</a>
    <a href="#services" class="block text-gray-300 hover:text-white p-2">Services</a>
    <a href="#resume" class="block text-gray-300 hover:text-white p-2">Resume</a>
    <a href="#portfolio" class="block text-gray-300 hover:text-white p-2">Portfolio</a>
      <a href="<?php echo $Profile; ?>" class="text-gray-300 hover:text-white p-2">Profile</a>
      <a href="#" class="block text-gray-300 hover:text-white p-2">Contact</a>
    <a href="<?php echo $loginUrl; ?>"
      class="hover:cursor-pointer text-white font-bold p-2 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-white text-center"
      role="button">
      LogIn
    </a>
  </div>

</nav>

<script>
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");

  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>