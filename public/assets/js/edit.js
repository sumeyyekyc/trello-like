function editth(x){
    var xd = document.createElement("p");
    xd.value = "p"
    xd.className = "x"
    if(x.getElementsByClassName("x")[0].style.display == "none"){
      x.getElementsByClassName("x")[0].style.display = "block";
      x.getElementsByClassName("x")[0].focus()
      x.getElementsByClassName("xtext")[0].style.display = "none";
    } else {
      x.getElementsByClassName("x")[0].style.display = "none";
      x.getElementsByClassName("xtext")[0].style.display = "block";
      x.getElementsByClassName("xtext")[0].innerHTML = x.getElementsByClassName("xtext")[0].value;
    }
  }