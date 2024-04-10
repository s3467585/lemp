
   const brand = document.getElementById("brand");
   const sideBar = document.querySelector(".side-bar");
   const sideBarSpan = document.querySelectorAll(".side-bar-span");
   const darkModeSwitch = document.querySelector(".switch");
   const circle = document.querySelector(".circle");
   const menuTogle = document.querySelector (".menu-togle");
   const main = document.querySelector("main");

   /* Togle for small screens */
   menuTogle.addEventListener("click", ()=>{
      sideBar.classList.toggle("max-side-bar");
      if (sideBar.classList.contains("max-side-bar")){
         menuTogle.children[0].style.display = "none";
         menuTogle.children[1].style.display = "block";
      } else {
         menuTogle.children[0].style.display = "block";
         menuTogle.children[1].style.display = "none";
      }
      if (window.innerWidth <= 320){
         sideBar.classList.add("mini-side-bar");
         main.classList.add("max-main");
         sideBarSpan.forEach((span)=>{
            span.classList.add("hiden");
         });
      }
   });

   /* Darck mode switch */
   darkModeSwitch.addEventListener("click", ()=>{
      let body = document.body;
      body.classList.toggle("dark-mode");
      circle.classList.toggle("on");
   });

   /* Side Bar min-max switch */
   brand.addEventListener("click", ()=>{
      sideBar.classList.toggle("mini-side-bar");
      main.classList.toggle("max-main");
      
      sideBarSpan.forEach((span)=>{
         span.classList.toggle("hiden");
      });
   });
   
   



  