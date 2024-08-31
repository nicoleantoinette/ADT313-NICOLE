<?php
function generateUser(){
    $user = "User1";
    $role = "student";

    echo $User.<br/>;
    echo $role.<br/>;

}

function editUser($value, $age){
    //edit user
    echo 'Edit'.$value.'<br/>';
    echo 'Edit'.$age.'<br/>';
    


}
generateUser();
editUser('value', 9)
?>