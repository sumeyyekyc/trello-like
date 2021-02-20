function add(x,y = "Description de la tâche", z="Nom de la tâche"){
    var xd = document.createElement("div");
    xd.className = "card draggable dragging"
    xd.draggable = "true";
    xd.onclick = function(){editth(this)}
    xd.innerHTML = '<h3 onclick="editth(this.parentNode)">'+z+'</h3><p class="x" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)">'+y+'</p><div class="remove" onclick="removeth(this)">x</div><i class="fas fa-pen card-pen" onclick="editth(this)"></i></div>'
    x.parentNode.insertBefore(xd, x.parentNode.childNodes[x.parentNode.childNodes.length-2])
  }