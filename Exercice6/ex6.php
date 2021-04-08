<?php
    class Utilisateur{
        private $user_name;
        private $user_pass;
        
        public function __construct($n, $p){
            $this->user_name = $n;
            $this->user_pass = $p;
        }
        
        public function getNom(){
            return $this->user_name;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            require 'classes/utilisateur.class.php';
            
            $pierre = new Utilisateur('Pierre', 'abcdef');
            $mathilde = new Utilisateur('Math', 123456);
            
            echo $pierre->getNom(). '<br>';
            echo $mathilde->getNom(). '<br>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>