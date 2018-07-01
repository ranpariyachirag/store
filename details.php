<?php


include 'includes/list-of-products.php';

global $ID;
$ID = $_GET['ID']; 



// Include data. ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creamy Cupcakes</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <div class="content-box">
                    <h1>LOGO</h1>
                </div>
            </div>
            <div class="nav-bg">   
                <nav>
                    <div class="content-box">
                        <ul class="navbar clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Cupcakes</a></li>
                            <li><a href="#">Pies</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="masthead-bg">
                <div class="content-box">
                    <h1>Creamy Cupcakes</h1>
                </div>
            </div> 
        </header>
        <main>
            <div class="main-content-bg">
                <div class="content-box">
                   
                    <?php
                    /* Start looping through the products array */
                    
                    for($i=1; $i<=count($products);$i++)
                    {
                        
                        if($i == $ID)
                        {
                            $j = $i-1;
                            $name = $products[$j]['name']; 
                            $desc = $products[$j]['description'];
                            $price = $products[$j]['price'];
                            echo "<h2>$name</h2><section><article><img src='img/$j.jpg'></article> <ul><li><p>$desc</p></li><li><p>$$price/piece</p></li></ul></section>";

                        }
                    }
                    
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-bg">
                <div class="content-box">
                    <p>&copy; 2017 Creamy Cupcakes</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>