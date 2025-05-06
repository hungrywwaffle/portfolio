function openNav() {
    document.getElementById("full_nav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("closed_nav").style.width = "0";
  }
  
  function closeNav() {
    document.getElementById("full_nav").style.width = "0";
    document.getElementById("main").style.marginLeft= "100px";
    document.getElementById("closed_nav").style.width = "100px";
  }