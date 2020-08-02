<?php
    if(count($errors) > 0){
       foreach($errors as $error){
           print '<p class="alert alert-danger ui message negative">'.$error.'</p>';
       } 
    }
?>