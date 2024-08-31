<h1>Switch</h1>
<?php
    $role = "student";
    switch($role){
        case 'student':
            echo "You're a student, you're not allowed to access...";
            break;

        case 'instructor':
            echo 'Instructor, you have limited access to...';
        case 'admin':
            echo "Admin, full access";
        default:
        //code...
        break;
    }

?>