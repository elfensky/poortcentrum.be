// function responsiveNavigation() {
//     var x = document.getElementById("nav");

//     if (x.className === "topnav") {
//       x.className += " responsive";
//     } else {
//       x.className = "topnav";
//     }
// }

function responsiveNavigation() {
    document.getElementById("sidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("sidenav").style.width = "0";
}

