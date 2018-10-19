<?php

echo 'Records from databse <br/>';

foreach ($results as $user) {
    echo $user->id. " - ". $user->nome. " <br/> "; 
}

?>
