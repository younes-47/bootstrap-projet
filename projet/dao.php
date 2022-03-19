<?php

class dao extends PDO{
    public function __construct($file = 'param.ini'){

        $settings = parse_ini_file($file);
        
        $dns = $settings['database']['driver'].
                ':host='.$settings['database']['host'].
                ';port='.$settings['database']['port'].
                ';dbname='.$settings['database']['schema'];

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
    
}


?>
