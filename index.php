<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>nuelectronics</title>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <div class="header">
        <div class= "container">
        <div class= "navbar">
        
       <div class="logo">
    <a href="index.php"><img src="images/nu.png" width="100px"></a>
        
        </div> 
        
        <nav>
            <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">products</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            <li><a href="adminstration.php">admin</a></li>


            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png"width="30px"; hight="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
            <h1>Welcome to <br> NUElectronics</h1>
            <a href="products.php" class="btn">Explore Now &#8594;</a>
            
            </div>
            <div class="col-2">
            <img src="images/pngfind.com-electronics-items-png-891691.png" >
            </div>
            </div>    
        </div>
        </div>
        
        <!--- categories--->
        <div class="categories">
            <div class="small-container">
            <div class="row">
            <div class="col-3">
            <img src="images/air.jfif" ></div>
            <div class="col-3">
            <img src="images/1188773250.jpg" ></div>
            <div class="col-3">
            <img src="images/charger.jpg" ></div>
            </div>
             
            </div>
        
        </div>
        
        <!--- products--->
        <div class="small-container">
           
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="col-4">
                <a href="products details.php"><img src="images/2149883a5d15502d0b83f56da57e2281f75b2377.jpg" ></a>
                <h4>Canon EOS800D</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <p>12.000 EGP</p>
                </div>
                <div class="col-4">
                    <a href="nikondetails.php"><img src="images/nkl-25468_1.jpg" ></a>
                    <h4>Nikon D7000</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>13.000 EGP</p>
                    </div>
            <div class="col-4">
                <a href="lensdetails.php"><img src="images/backscatter-m52-wide-angle-wet-lens.jpg" ></a>
                <h4>Wide Angle Wet Lens</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p>1.000 EGP</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-4">
                    <a href="pcdetails.php"><img src="images/skytech1.jpg" ></a>
                    <h4>Skytech Prism II Gaming PC Desktop</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p> 50.000 EGP</p>
                    </div>
                <div class="col-4">
                    <a href="laptobdetails.php"><img src="images/mac1.jpg" padding="px"></a>
                    <h4>Apple MacBook Pro M1 Max</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                    <p>40.000 EGP</p>
                    </div>
                <div class="col-4">
                    <a href="mousedetails.php"><img src="images/mouse1.jpg" ></a>
                    <h4>Glorious Model O Gaming Mouse</h4>
                    <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
    
                    </div>
                    <p>450.00 EGP</p>
                    </div>
                </div>
        </div>
        
        <!----offer---->
        <div class="offer">
            <div class="small-container">
            <div class="row">
                <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusevily Available on our store</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Bnad 3) AMOLED color full-touch display with adjustable brightness,so everything is clear as can be.</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
                </div>
            </div>
        </div>
        
    <!-----testimon----
        
      <div class="testimon">
            <div class= "small-container">
                <div class="row">
                    <div class="col-3">
                        
                    </div>
                </div>
            </div>
        </div>
        -->
        
        
        
        <!---Brands-->
        
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" >
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png" >
                    </div>
                    
                    <div class="col-5">
                        <img src="images/logo-paypal.png" >
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png" >
                    </div>
                </div>
            </div>
        
        </div>
        
        <!------footer----->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our App</h3>
                        <p>Download App for Android and IOS Moobile phones</p>
                        <div class="app-logo">
                            <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/image-asset.png" >
                        <p>Our business concept is to offer fashion and quality at the best price in a sustainable way.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                     <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">© Copyright 2021 - EGYPT</p>
        </div>
        
        <!----js for toggle menu-------->
        <script>
            var MenuItems= document.getElementById("MenuItems");
            MenuItems.style.maxHeight= "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight= "200px";
                    }
                else{
                    MenuItems.style.maxHeight= "0px";
                }
            }
        </script>
        
        
        <script src="js/script.js"></script>

    
    </body>
</html>