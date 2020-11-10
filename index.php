<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8".>
        <title>Hackathon</title>
    </head>
    <body>
        <form action = "funct.php" method = "post">
            <fieldset>
                <legend title = "ВНЕСЕННЯ КОНТАКТІВ" text-align = "left">ВНЕСЕННЯ КОНТАКТІВ</legend>
                <div class = "form-group">
                    <input autocomplete = "off" type = "text" name = "name_company" placeholder = "КОМПАНІЯ" required>
                    <input autocomplete = "off" type = "text" name = "position" placeholder = "ПОСАДА" required>
                </div>
                <br>
                <div>
                    <textarea placeholder = "РЕЗЮМЕ" autocomplete = "off" name = "the_resume" required></textarea>
                    <textarea placeholder = "ДЕТАЛІ" autocomplete = "off" name = "details" required></textarea>
                </div>
                <br>
                <div>
                <input autocomplete = "off" type = "text" name = "the_day" placeholder = "ЧИСЛО" required>
                <input autocomplete = "off" type = "text" name = "the_month" placeholder = "МІСЯЦЬ ЦИФРАМИ" required>
                <input type = "submit" value = "ЗБЕРЕГТИ">
                </div>
            </fieldset>
        </form>

        <br>

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

        ?>

        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
            <fieldset>
                <legend title = "Оберіть число і місяць" text-align = "left">ОБЕРІТЬ ЧИСЛО І МІСЯЦЬ</legend>
                <div class = "form-group">
                    <input autocomplete = "off" type = "text" name = "theday" placeholder = "ЧИСЛО" required>
                    <input autocomplete = "off" type = "text" name = "themonth" placeholder = "МІСЯЦЬ ЦИФРАМИ" required>
                    <input type = "submit" name = "submit" value = "ВИВЕСТИ">
                </div>
            </fieldset>
        </form>

        <br>

        <?php
        if (isset($_POST['submit'])) {
        echo "<h3>Представлення контактів записника</h3>";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $theday = $_POST["theday"];
        $themonth = $_POST["themonth"];
        $sql = "SELECT * FROM bazait.notebook WHERE the_day = '$theday' && the_month = '$themonth'";
        foreach ($conn->query($sql) as $row) {
            $name_company = $row['name_company'];
            $position = $row['position'];
            $the_resume = $row['the_resume'];
            $details = $row['details'];
            $the_day = $row['the_day'];
            $the_month = $row['the_month'];
            echo "<p>НАЗВА КОМПАНІЇ - $name_company &emsp; ПОСАДА - $position &emsp; РЕЗЮМЕ - $the_resume &emsp; ПОДРОБИЦІ - $details &emsp; ЧИСЛО - $the_day &emsp; МІСЯЦЬ - $the_month</p>";
        }
        $conn = null;
        } 
        ?>
    </body>
</html>

