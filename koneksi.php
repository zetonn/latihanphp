<?php
            $db = new mysqli("localhost","root","","db_sekolah");

            if(!$db){
                mysqli_errno($db);
            };

            
