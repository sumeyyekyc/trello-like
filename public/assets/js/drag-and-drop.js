const draggables = document.querySelectorAll('.draggable');
const containers = document.querySelectorAll('.list-container');

list-container.addEventListener('dragstart', hold);
list-container.addEventListener('dragend', dropped);

function hold(){
  this.className += ' hold';
  setTimeout( () => this.className = 'none', 0 );
}

function dropped(){
  this.className = 'list-container';
}

for(const draggable of draggables){
  draggable.addEventListener('dragover', e =>  e.preventDefault() );
  draggable.addEventListener('dragenter', hovered);
  draggable.addEventListener('dragleave', left);
  draggable.addEventListener('drop', dropIt);
}

function hovered(e){
  e.preventDefault();
  this.className += ' hovered';
}

function left(){
  this.className = 'draggable';
}

function dropIt(){
  this.append(list-container);
  this.classList.remove('hovered');
}