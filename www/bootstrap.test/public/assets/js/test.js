$(document).ready(function() {
   
   let hamburger = document.querySelector(".hamburger");
   hamburger.addEventListener("click", function(){
      document.querySelector("body").classList.toggle("active");
/*      document.querySelector("i").classList.toggle("fa-solid fa-angles-right");
*/
      console.log(hamburger.querySelector("i").classList.value);
      if (hamburger.querySelector("i").classList.value == "fa-solid fa-angles-left"){
         hamburger.querySelector("i").classList.remove("fa-angles-left");
         hamburger.querySelector("i").classList.add("fa-angles-right")
      } else {
         hamburger.querySelector("i").classList.remove("fa-angles-right");
         hamburger.querySelector("i").classList.add("fa-angles-left")
      };
   });
   
});


  