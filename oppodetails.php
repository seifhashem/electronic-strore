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

            </ul>
        </nav>
          <a href="cart.php"><img src="images/cart.png"width="30px"; hight="30px";></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div> 
        </div>
        
        <!-------single product details------->
        
        <div class="small container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/51aoqiwqNnL._AC_.jpg" width="45%" id="ProductImg">
                      <div class="small-img-row">   
                <div class="small-img-col">
                    <img src="images/51aoqiwqNnL._AC_.jpg" width="60%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/215vND2EKmL._AC_.jpg" width="70%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/419cyYvM-+L._AC_.jpg" width="40%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/41dQCZi+XPL._AC_.jpg" width="60%" class="small-img">
                </div>
                </div>    
                
                </div>
          
                
        
                <div class="col-2">
                    <p>Mobile Phones & Communication Products</p>
                    <h1>
                        Oppo Reno 5 Pro  </h1>
                    <h4>10.000 EGP</h4>
                   
                    <input type="number" value="1">
                    <a href="" class="btn">Add to Cart</a>
                    <h3>Product Details<i class="fa fa-indent"></i>
                    </h3>
                    <br>
                    <p>Original Oppo Reno 5 Pro+ Plus 5G Smartphone 12G+256GB 6.55" 90HZ AMOLED Snapdragon865 Android11 50MP IMX766 Camera 65W SuperVOOC 4500mAh OTG NFC Support Google by（Real Star Technology） (Black 12+256)</p>
                </div>
            </div>
        </div>
        
    <!------------Title------->
        <div class="small-container">
            
            <div class ="row row-2">
                <h2>Related Products</h2>
                
            </div>
        </div>
             
        
        
        
        
         <!------------Products------->   
        <div class="small-container">
            
             <div class="row">
                <div class="col-4">
                    <a href="iphone details.php"><img src="images/71fVoqRC0wL._AC_SL1500_.jpg"  ></a>
                <h4>Iphone 12</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <p>15.000 EGP</p>
                </div>
           
                    <div class="col-4">
                        <a href="oppodetails.php"><img src="images/51aoqiwqNnL._AC_.jpg" ></a>
                        <h4>Oppo Reno 5 pro</h4>
                        <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
        
                        </div>
                        <p>10.000 EGP</p>
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
       
       <!----- js for product gallery----->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
            SmallImg[0].onclick = function()
                {
                    ProductImg.src = SmallImg[0].src;   
                }
            SmallImg[1].onclick = function()
                {
                    ProductImg.src = SmallImg[1].src;   
                }
            SmallImg[2].onclick = function()
                {
                    ProductImg.src = SmallImg[2].src;   
                }
            SmallImg[3].onclick = function()
                {
                    ProductImg.src = SmallImg[3].src;   
                }
        
    </script>
        
        
        
        
        
        
        <script src="js/script.js"></script>

        
        
        
        
        
    
    </body>
</html>