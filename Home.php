<?php
include "index.php";
include "nav.php";
foreach($users as  $user){
    echo '<div class="card" style="width: 18rem; background-color: '. $user['clr'] .';"> 
            <div class="card-body"> 
                 <h5 class="card-title">' . $user['name'] . '</h5>
                 <h6 class="card-subtitle mb-2 text-body-secondary">' . $user['name'] . ' age ' . $user['age'] . '</h6>
                 <a href="#" class="card-link">Card link</a>
                 <a href="#" class="card-link">Another link</a>
            </div>
          </div>';
}

?>




