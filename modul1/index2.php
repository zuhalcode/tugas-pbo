<?php 
require_once 'controller.php';
$book = [
    $novel1 = new Novel('Da Vinci Code', 'Doubleday', '2003', 100000),
    $novel2 = new Novel('Angels and Demons', 'Pocket Books', '2000', 150000),
    $novel3 = new Novel('Origin', 'Doubleday', '2017', 200000)
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="public/css/tailwind.css" />
    <title>Modul Conan</title>
</head>
<body>
    <form action="" method="post" class="form-2">
        <center><h1>Database Novel</h1></center>
        <div class="container-novel">
            <div class="content-1">
                <ul>
                    <li>
                        <input type="text" class="input-1" name="input-1" placeholder="Input title">
                    </li>
                    <li>
                        <input type="text" class="input-2" name="input-2" placeholder="Input publisher">
                    </li>
                    <li>
                        <input type="text" class="input-3" name="input-2" placeholder="Input published year">
                    </li>
                    <li>
                        <input type="text" class="input-4" name="input-3" placeholder="Input book price">
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </div>
            <div class="content-2 ">
                <div class="contain m-5 text-black">
                <?php if (isset($_POST['submit'])) {
                      echo "<center><h3 style='color:black; margin-bottom:10px'>Daftar Novel</h3></center>";
                    foreach ($book as $key) {
                       
                        echo "<h3> Novel : " . $novel1->getTitle() . "</h3>";
                        echo "<h3> Publisher : " . $novel1->getPublisher() . "</h3>";
                        echo "<h3> Published year : " . $novel1->getPublicate() . "</h3>";
                        echo "<h3> Price : " . $novel1->getPrice() . "</h3>";
                        echo "<br>";
                    }
                    
                }
                ?>
                </div>
            </div>
        </div>
    </form>
</body>
</html>