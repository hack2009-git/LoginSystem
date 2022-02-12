<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
      <!-- Font Awesome CND  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     
 <!-- Header Design -->
 <header>
        <img class="logo" src="logo.png" alt="logo">
        <nav>
            <ul class="nav_items">
                <li><a href="#">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact-Us</a></li>
                <li><a href="#">About</a></li>
                <a href="logout.php">Logout</a>
            </ul>
        </nav>
        <a href="#" class="search"><button>Search</button></a>
        <h5>Hello, <?php echo $_SESSION['name']; ?></h5>
            
    </header>

    <!-- Header Design End  -->

    <!-- Design Section  -->
    <section>
        <div class="wrapper">
            <h1><span>G</span>allery</h1>
            <hr><br>

        </div>
    </section>
    <!-- Design Section End  -->

    <!-- Service Start  -->
    <section>
        <div class="Service">
            <h2><span>S</span>ervice</h2>
            <hr><br>
        </div>
    </section>
    <!-- Service End  -->

    <!-- Contact Start  -->
    <section>
        <div class="Conatct">
            <h2><span>C</span>ontact Us</h2>
            <hr><br>
        </div>
    </section>
    <!-- Contact End  -->

    <!-- About Design Start  -->
    <section>
        <div class="About">
            <h2><span>A</span>bout</h2>
            <hr><br>
        </div>
    </section>
    <!-- About Design Start  -->

    <!-- Footer Design -->
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2><span>A</span>bout Us</h2>
                <hr><br>
                <div class="content">
                    <p>Hey. I'am Roshan Bawne I am create footer page and desgin responsive page, so let's start create this page. </p>
                    <div class="social">
                        <a href=""><span class="fa fa-facebook-f" aria-hidden="true"></span></a>
                        <a href=""><span class="fa fa-whatsapp" aria-hidden="true"></span></a>
                        <a href=""><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a href=""><span class="fa fa-github" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2><span>A</span>ddress</h2>
                <hr><br>
                <div class="content">
                    <div class="place">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h5 class="text">Shelu Bk, Tq.Wani Yavatmal</h5>
                    </div>
                    <div class="phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h5 class="text">+091-9359924810</h5>
                    </div>
                    <div class="envelope">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5 class="text">abc@example.com</h5>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2><span>C</span>ontact Us</h2>
                <hr><br>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Massage *</div>
                            <textarea cols="30" rows="3" required></textarea>
                        </div>
                        <div class="btn1">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
