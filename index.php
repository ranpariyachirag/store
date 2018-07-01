<?php // Include data. 

    include 'includes/list-of-products.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<title>Creamy Cupcakes</title>
	<link rel="stylesheet" href="./css/main.css">
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
            
                <div class="content-box clearfix">
                    <h2>The Product List</h2>
                    <div class="container">
                        <ul class="store">
                        <?php
                        
                    /* Start looping through the products array */

                            for($i=0;$i<count($products);$i++)
                           {
                               $v = $products[$i]['id'];
                               $name = $products[$i]['name'];
                               $price = $products[$i]['price'];
                               echo "<li><figure><a href='details.php?ID=$v'><img src='img/$i.jpg'></a></figure>";
                                
                               echo "<figcaption><p><a href='details.php?ID=$v'> $name </a><br>price: $$price/piece</p></figcaption></li>"; 
                           }
            
                        ?>
                        </ul>
                    </div>
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
