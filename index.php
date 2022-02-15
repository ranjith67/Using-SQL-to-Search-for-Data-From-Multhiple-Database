<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <div class="hai">
        <h1>Database Search</h1>
    </div>
    <div class="ground">
        <h4>Search Here</h4>
        <form action="" method="GET">
            <input type="number"  name="phone" placeholder="Enter Number" required>
            <input type="submit" name="submit" value="submit">
        </form>
            </div>
        <div class="data">
            <table>
            <tr>
                <th>id</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Username</th>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','kp');
                if(isset($_GET['submit'])){
                $phone = $_GET['phone'];
                    $sql = (
                        "SELECT
                        *
                    FROM `king1`
                    WHERE
                        phone LIKE '%$phone%'
                        
                UNION
                
                    SELECT
                        *
                    FROM `king2`
                    WHERE
                        phone LIKE '%$phone%'
                
                UNION
                
                    SELECT
                        *
                    FROM `playwin567`
                    WHERE
                        phone LIKE '%$phone%'
                UNION
                
                    SELECT
                        *
                    FROM `play567`
                    WHERE
                        phone LIKE '%$phone%'
                UNION
                
                    SELECT
                        *
                    FROM `winexch567`
                    WHERE
                        phone LIKE '%$phone%' 
                UNION
                
                    SELECT
                        *
                    FROM `gameexch567`
                    WHERE
                        phone LIKE '%$phone%'
                ");
                $exe = mysqli_query($con,$sql) or die("Query Failled!!");
                if(mysqli_num_rows($exe) > 0){
                $count=0;
                while ($row = mysqli_fetch_assoc($exe)){
                $count++;
            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo $row['username']; ?></td>
            </tr>
                    <?php }}else{
        echo "<p style='color:red; width:100%; background:white; text-align: center; padding:10px; margin: 0.2rem 0rem; font-family: Arial, sans-serif; font-weight
        : bold; font-size: 1rem;'>No data Found</P>";
                    }} ?> 
            </table>
        </div>
</body>
</html>
