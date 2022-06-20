<?php

class UsersView extends Users{
//users_firstname users_lastname users_dateofbirth

    public function showUser($name){
        $results = $this->getUser($name)[0];
        echo "Full name: " . $results['users_firstname'];
    }

}