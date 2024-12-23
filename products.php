<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagify | Online Bags Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Bagify !</h1>
            <p>We have wide range of Bags for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="backpacks">
        <div class="col-md-3 col-6 py-2">
                
            <div class="card">

                <img src="./images/backpacks/bp1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>American Tourister Valex 28 Ltr Large Laptop Bag</h6>
                    <h6>Price :Rs 1399</h6>
                </div>
                <div class="row">
                    <div class="col-6">
                        <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
        
                    </div>
                    <div class="col-6">
                        <p><a href="product_details.php?pid=1" role="button" class="btn btn-warning text-white">Details</a></p>
                    </div>

                </div>


            </div>
    
       
        </div>

        <div class="col-md-3 col-6 py-2">

                <div class="card">

                <img src="./images/backpacks/bp2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Aristrocrat
                        Unisex Laptop Bag Blue</h6>
                    <h6>Price :Rs 649</h6>
                </div>
                <div class="row">
                    <div class="col-6">
                        <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
        
                    </div>
                    <div class="col-6">
                        <p><a href="product_details.php?pid=2" role="button" class="btn btn-warning text-white">Details</a></p>
                    </div>

                </div>
                </div>
                
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
            
                <img src="./images/backpacks/bp3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>uppercase Medium 17 Ltrs Vegan Leather Backpack</h6>
                    <h6>Price :Rs 1349</h6>
                    
                </div>
                <div class="row">
                    <div class="col-6">
                        <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
        
                    </div>
                    <div class="col-6">
                        <p><a href="product_details.php?pid=3" role="button" class="btn btn-warning text-white">Details</a></p>
                    </div>

                </div>
            </div>
   


        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="./images/backpacks/bp4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>uppercase Medium 23 Ltrs Tall Boy </h6>
                    <h6>Price :Rs 2400</h6>
                </div>
                <div class="row">
                    <div class="col-6">
                        <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
        
                    </div>
                    <div class="col-6">
                        <p><a href="product_details.php?pid=4" role="button" class="btn btn-warning text-white">Details</a></p>
                    </div>

                </div>
       
                </div>
            </div>
          
      
      
    </div>
    

    <div class="row text-center" id="totebags">
            <div class="col-md-3 col-6 py-3" >
     
                <div class="card">
                        
                    <img src="./images/totebags/tb1.jpg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Miraggio Rosalind Tote Handbag</h6>
                    <h6>Price :Rs 2834</h6>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <?php if (!isset($_SESSION['email'])) {?>
                                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                    ?>
                                    <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                    <?php
                                    }
                                }
                                ?>
            
                        </div>
                        <div class="col-6">
                            <p><a href="product_details.php?pid=5" role="button" class="btn btn-warning text-white">Details</a></p>
                        </div>
    
                    </div>
                   


                </div>
      
            </div>
            <div class="col-md-3 col-6 py-3">
  
                    <div class="card">
                       
                    <img src="./images/totebags/tb2.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Miraggio Grace Solid Tote Bag </h6>
                    <h6>Price :Rs 2484</h6>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <?php if (!isset($_SESSION['email'])) {?>
                                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                    ?>
                                    <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                    <?php
                                    }
                                }
                                ?>
            
                        </div>
                        <div class="col-6">
                            <p><a href="product_details.php?pid=6" role="button" class="btn btn-warning text-white">Details</a></p>
                        </div>
    
                    </div>

            </div>
            </div>

            <div class="col-md-3 col-6 py-3">
                    <div class="card">
                 
                    <img src="./images/totebags/tb3.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Aliza Women's Tote Bag</h6>
                        <h6>Price :Rs 1999</h6>
    
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <?php if (!isset($_SESSION['email'])) {?>
                                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                    ?>
                                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                    <?php
                                    }
                                }
                                ?>
            
                        </div>
                        <div class="col-6">
                            <p><a href="product_details.php?pid=7" role="button" class="btn btn-warning text-white">Details</a></p>
                        </div>
    
                    </div>
            </div>
            </div>
            
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="./images/totebags/tb4.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Lavie Women's Nova Tote Bag </h6>
                        <h6>Price :Rs 3499</h6>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <?php if (!isset($_SESSION['email'])) {?>
                                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                    ?>
                                    <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                    <?php
                                    }
                                }
                                ?>
            
                        </div>
                        <div class="col-6">
                            <p><a href="product_details.php?pid=8" role="button" class="btn btn-warning text-white">Details</a></p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="handbags" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/handbags/hb1.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Lino Perros Women Handbag</h6>
                            <h6>Price :Rs 4490</h6>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php if (!isset($_SESSION['email'])) {?>
                                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(9)) {
                                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                        } else {
                                        ?>
                                        <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                        <?php
                                        }
                                    }
                                    ?>
                
                            </div>
                            <div class="col-6">
                                <p><a href="product_details.php?pid=9" role="button" class="btn btn-warning text-white">Details</a></p>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/handbags/hb2.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Miraggio Victoria Handbag</h6>
                            <h6>Price :Rs 7500</h6>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php if (!isset($_SESSION['email'])) {?>
                                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(10)) {
                                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                        } else {
                                        ?>
                                        <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                        <?php
                                        }
                                    }
                                    ?>
                
                            </div>
                            <div class="col-6">
                                <p><a href="product_details.php?pid=10" role="button" class="btn btn-warning text-white">Details</a></p>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/handbags/hb3.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Lino Perros Women's Handbag</h6>
                            <h6>Price :Rs 4495</h6>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php if (!isset($_SESSION['email'])) {?>
                                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(11)) {
                                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                        } else {
                                        ?>
                                        <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                        <?php
                                        }
                                    }
                                    ?>
                
                            </div>
                            <div class="col-6">
                                <p><a href="product_details.php?pid=11" role="button" class="btn btn-warning text-white">Details</a></p>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/handbags/hb4.jpg" alt="" class="img-fluid pb-1" >
                        <div class="figure-caption">
                        <h6>Van Heusen Women's</h6>
                        <h6>Price :Rs 5400</h6>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php if (!isset($_SESSION['email'])) {?>
                                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(12)) {
                                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                        } else {
                                        ?>
                                        <p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                        <?php
                                        }
                                    }
                                    ?>
                
                            </div>
                            <div class="col-6">
                                <p><a href="product_details.php?pid=12" role="button" class="btn btn-warning text-white">Details</a></p>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="slingbags">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/slings/sl1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>DailyObjects Trapeze Sling Crossbody Bag</h6>
                                <h6>Price :Rs 2499</h6>
                           </div>
                           <div class="row">
                            <div class="col-6">
                                <?php if (!isset($_SESSION['email'])) {?>
                                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                    <?php
                                    } else {
                                        if (check_if_added_to_cart(13)) {
                                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                        } else {
                                        ?>
                                        <p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                        <?php
                                        }
                                    }
                                    ?>
                
                            </div>
                            <div class="col-6">
                                <p><a href="product_details.php?pid=13" role="button" class="btn btn-warning text-white">Details</a></p>
                            </div>
        
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/slings/sl2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Fastrack Quilted Sling Bag for Women</h6>
                                <h6>Price :Rs 1299</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <?php if (!isset($_SESSION['email'])) {?>
                                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                            <?php
                                            } else {
                                                if (check_if_added_to_cart(14)) {
                                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                                } else {
                                                ?>
                                                <p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                                <?php
                                                }
                                            }
                                            ?>
                        
                                    </div>
                                    <div class="col-6">
                                        <p><a href="product_details.php?pid=14" role="button" class="btn btn-warning text-white">Details</a></p>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/slings/sl3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Lavie Women's Broxa Flap Over Sling Bag</h6>
                                <h6>Price :Rs 2289</h6>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                        <?php
                                        } else {
                                            if (check_if_added_to_cart(15)) {
                                            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                            } else {
                                            ?>
                                            <p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                            <?php
                                            }
                                        }
                                        ?>
                    
                                </div>
                                <div class="col-6">
                                    <p><a href="product_details.php?pid=15" role="button" class="btn btn-warning text-white">Details</a></p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/slings/sl4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>EXOTIC Women's Sling Bag Shoulder Strap</h6>
                                <h6>Price :Rs 1599</h6>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <?php if (!isset($_SESSION['email'])) {?>
                                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                                        <?php
                                        } else {
                                            if (check_if_added_to_cart(16)) {
                                            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                            } else {
                                            ?>
                                            <p><a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                            <?php
                                            }
                                        }
                                        ?>
                    
                                </div>
                                <div class="col-6">
                                    <p><a href="product_details.php?pid=16" role="button" class="btn btn-warning text-white">Details</a></p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>