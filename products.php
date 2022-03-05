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
            <li><a href="adminstration.php">admin</a></li>


            </ul>
        </nav>
            <a href="cart.php"><img src="images/cart.png"width="30px"; hight="30px";></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
            
        </div>
        
        <div class="small-container">
            <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="images/msi.jpg" >
                  </div>
                  <div class="slide">
                    <img src="images/lg.jpg" >
                  </div>
                  <div class="slide">
                    <img src="images/V253215456_IN_WLME_SamsungGalaxy_S20_GA__S20-FE_1242x450._SX1242_CB403247530_.jpg"  >
                  </div>
                  <div class="slide">
                    <img src="images/banner2.jpg"  >
                  </div>
                  <div class="navigation-auto" >
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                  </div>

            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
              </div>
             
            </div>
            
             <div class="row row-2">
                <h2>All Products</h2>
                 <select id="categories" onchange="catHandler(this.value)">
                 <option value="products">All products</option>
                 <option value="cameracat">Camera & Photo Products</option>
                <option value="products">Car & Vehicle Electronics</option>
                <option value="pccat">Computers, Components & Accessories</option>
                <option value="products">eBook Readers & Accessories</option>
                <option value="products">Headphones, Earbuds & Accessories</option>
                <option value="products">Home Audio & Theater Products</option>
                <option value="products">Home Theater, TV & Video Products</option>
                <option value="products">Household Batteries & Chargers</option>
                <option value="mobilecat">Mobile Phones & Communication Products</option>
                <option value="products">Portable Sound & Vision Products</option>
                <option value="products">Electrical Power Accessories</option>
                <option value="products">GPS & Navigation Equipment</option>
                <option value="products">Computer Tablets</option>
                <option value="products">Telephones, VoIP & Accessories</option>
                <option value="products">Wearable Technology  </option>

                 </select>
            </div>
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
                <a href="samsungdetails.php"><img src="images/71vaN3F+ZvL._AC_SL1428_.jpg" ></a>
                <h4>Samsung S20</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
                <p>16.000 EGP</p>
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
        
             
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
              document.getElementById('radio' + counter).checked = true;
              counter++;
              if(counter > 4){
                counter = 1;
              }
            }, 3700);
            </script>

<script>
    function catHandler(value) {
        window.location.assign(`${value}.php`);
    }
</script>

    
    </body>
</html>