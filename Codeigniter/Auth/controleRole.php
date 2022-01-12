<?php
require 'config.php';

class controleRole {
    
    public $role = ["client", "admin"];
    
    public function check($username) {
        
        $query = "SELECT role FROM User WHERE identifiant = '" . $username . "'" ;
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        if ($result == $role[0]) {
            
            echo "<p><a href='vueAdministration.php'>Administration</p>"; 
        }
        else {
            
            echo "Administration non autorisée";
        }

    }
    
}