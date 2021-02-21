function add(x,y = "Description de la tâche", z="Nom de la tâche"){
    var xd = document.createElement("div");
    xd.className = "card draggable dragging"
    xd.draggable = "true";
    xd.onclick = function(){editth(this)}
    xd.innerHTML = '<h3 onclick="editth(this.parentNode)">'+z+'</h3><p class="x" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)">'+y+'</p><div class="remove" onclick="removeth(this)">x</div><i class="fas fa-pen card-pen" onclick="editth(this)"></i></div>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes.length-2])
  }


  function addList(x, z="Nom de la liste"){
    var xd = document.createElement("div");
    xd.className = "list-container"
    xd.onclick = function(){editth(this)}
    xd.innerHTML = ' <div class="container-project"><div class="list-container">'+z+'<div class="list-title"><h2 class="header-list-title">À faire </h2><p onclick="editth(this.parentNode)" onchange="editth(this.parentNode)"><i class="fas fa-pen title-draw"></i></p></div><div class="add-card-div" onclick="add(this)"><i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> </div><div class="card draggable dragging" draggable="true"><h3 onclick="editth(this.parentNode)">Nom de la tâche</h3><p class="x" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)"></p><div class="remove" onclick="removeth(this)">x</div><i class="fas fa-pen card-pen" onclick="editth(this)"></i></div>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes.length-2])
  }