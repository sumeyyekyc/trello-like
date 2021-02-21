<div id="container-of-everything">

        <div class="container-div" id="side-bar">
            <p id="button"><i class="fas fa-plus" id="img-button" onclick="addList(this)"></i> Créer un projet</p>
            <h2 id="title-projet-side-bar">Mes projets</h2>
            <ul>
                <li class="project-list"><p id="link_list">- [Title to dynamize]</p></li>
            </ul>
        </div>
        <!-- central part of the project : where the name and card goes -->
        <div class="container-div" id="project">
            <div id="title">
                <h1>Projet 1</h1>
                <p onclick="editth(this.parentNode)" onchange="editth(this.parentNode)" class="button-project"><i class="fas fa-plus img-button-project"></i> Ajouter une liste</p>
                <p class="button-project" id="button-project__second-lign"><img class="img-button-project" id="img-calendar" src="../public/assets/images/calendar.png"> Calendrier</p>
            </div>

            <!-- The part where one list goes -->
            <div class="container-project">
                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)">To do</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>

                    <div class="card draggable dragging" draggable="true">
                        <h3 class="x" onclick="editth(this.parentNode)">Nom de la tâche</h3>
                        <p class="xtext" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)"></p>
                        <div class="remove" onclick="removeth(this)"><i class="fas fa-times"></i></div>
                    </div>
                    
                </div>

                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)">Doing</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>

                    <div class="card draggable dragging" draggable="true">
                        <h3 class="x" onclick="editth(this.parentNode)">Nom de la tâche</h3>
                        <p class="xtext" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)"></p>
                        <div class="remove" onclick="removeth(this)"><i class="fas fa-times"></i></div>
                    </div>
                    
                </div>

                <div class="list-container">
                    <div class="list-title">
                        <h2 class="header-list-title" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)">Done</h2>
                    </div>
                    <div class="add-card-div" onclick="add(this)">
                        <i class="fas fa-plus plus"></i><p class="add-card">Ajouter une carte</p> 
                    </div>

                    <div class="card draggable dragging" draggable="true">
                        <h3 class="x" onclick="editth(this.parentNode)">Nom de la tâche</h3>
                        <p class="xtext" onclick="editth(this.parentNode)" onchange="editth(this.parentNode)"></p>
                        <div class="remove" onclick="removeth(this)"><i class="fas fa-times"></i></div>
                    </div>
                    
                </div>
            </div>
            <!-- End of the list -->
        </div>

    </div>