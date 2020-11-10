<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bazait";
        
            try{
                $conn = new PDO("mysql:host = $servername; dbname = $dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Falied - ".$e->getMessage();
            }

            $name_company = $position = $the_resume = $details = $the_day = $the_month = "";
            if (!empty($_POST['name_company'])) {
            $name_company = $_POST['name_company'];
            }
            if (!empty($_POST['position'])) {
            $position = $_POST['position'];
            }
            if (!empty($_POST['the_resume'])) {
            $the_resume = $_POST['the_resume'];
            }
            if (!empty($_POST['details'])) {
            $details = $_POST['details'];
            }
            if (!empty($_POST['the_day'])) {
            $the_day = $_POST['the_day'];
            }
            if (!empty($_POST['the_month'])) {
            $the_month = $_POST['the_month'];
            }
            try {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sqlQuer = "INSERT INTO bazait.notebook (name_company, position, the_resume, details, the_day, the_month) VALUES ('$name_company', '$position', '$the_resume', '$details', '$the_day', '$the_month');";
                $conn->exec($sqlQuer);
            }
            catch(PDOException $e) {
                echo $sqlQuer."<br>".$e->getMessage();
            }

            $conn = null;
            header ("Location: ".$_SERVER['HTTP_REFERER']);
        ?>
