document.getElementById("nav_ac").onclick = function() {myFunction()};
    
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction() {
      document.getElementById("ac_menu").classList.toggle("show");
    }
    document.querySelector('.nav-link').onclick = () => {
        document.querySelector('.container-1').classList.add('hidden');
        document.querySelector('.container-2').classList.remove('hidden');
    }