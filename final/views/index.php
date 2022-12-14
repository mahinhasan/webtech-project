<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="fnav">
            <div class="log">
            </div>
            <ul>
                <li class="logo"><a href="index.php"> Toursim</a></li>
                <?php if($_SESSION['status']){
                  echo "<li>" . "<a href='logout.php'>logout</a>" . "</li>";

                }
                else{
                  echo "<li>" . "<a href='login.php'>logout</a>" . "</li>";
                  echo "<li>" . "<a href='singup.php'>logout</a>" . "</li>";

                }

                ?>
 
                <li><a href="about.asp">About</a></li>
                <li><a href="about.php">Author</a></li>
                <li><a href="news.asp">Travel News</a></li>
                <li><a href="contact.asp">Travel Episode</a></li>
                <li><a href="about.asp">Inspiration</a></li>
                <li><a href="contact.asp">Explore</a></li>
                <li><a href="contact.asp">place</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="planing.php">Planning</a></li>
            </ul>
        </div>
    </div>
    <section>
      <div class="">
        <div class="bgimg">
           <!-- <img src="images>/hero-bg.jpeg" alt="">  -->
          <h1 id="find">Find Your Next<br>
            Tour Destinations</h1>
            <form action="searchData.php" method="post">
            <div class="search">
            <input id="search-box" type="text " name="search" placeholder="Enter Packege Name" >
            <a href="">Search</a>
           </div>
            </form>
          
            
        </div>
      </div>
    </section>
    <!-- image section complete -->
    <main >
        <h1 id="packege-header">Current Hot Packages</h1>
       <div class="Image-card-section container">
      <div class="image-cards">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/4.jpg" >
              </div>
              <div class="card-details">
                  <h1>Sylhet Premium Trip</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> 3500</span> $
                 </p>
                 <p><i class="fas fa-clock"></i> 1day & 2 night</p>
              </div>
            
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/2.jpg">
              </div>
              <div class="card-details">
                  <h1>Sreemangal Day Trip</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> 1200</span> $
                 </p>
                 <p><i class="fas fa-clock"></i> 1day </p>
              </div>
            
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/3.jpg">
              </div>
              <div class="card-details">
                  <h1>Lama-Alikadam Premium Package</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> 500</span> $
                 </p>
                 <p><i class="fas fa-clock"></i> 2day & 3 night</p>
              </div>
             
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/4.jpg">
              </div>
              <div class="card-details">
                  <h1>Debotakhum Day Trip</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> 500</span> $
                 </p>
                 <p><i class="fas fa-clock"></i> 2day & 3 night</p>
              </div>
              
          </div>
 </div>
</div> 
<!-- image card  -->
  </main>
  <!-- image carosoul start -->
  <section class="best-resorts">
    <h1 id="packege-header">Current Hot Packages</h1>
    <div class="Image-card-section container">
      <div class="image-cards">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/5.jpg">
              </div>
              <div class="card-details">
                  <h1>Sylhet Premium Trip</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span class="discount-price" >5000</span><span id="price">  3500</span> $
                 </p>
                 <p></p>
              </div>
            
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/6.jpg">
              </div>
              <div class="card-details">
                  <h1>Meghpalki Resort Sajek</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span class="discount-price" >5000</span> <span id="price"> 1200</span> $
                 </p>
                 <p> </p>
              </div>
            
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/7.jpg">
              </div>
              <div class="card-details">
                  <h1>Chander Bari Resort Sajek</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span class="discount-price" >5000</span><span id="price"> 1300</span> $
                 </p>
                 <p></p>
              </div>
             
          </div>
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../assets/images/8.jpg">
              </div>
              <div class="card-details">
                  <h1>Kadombini Eco Resort Sajek</h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span class="discount-price" >5000</span> <span id="price"> 1500</span> $
                 </p>
                 
              </div>
              
          </div>
 </div>
</div> 

  </section>
  <section>
    <div class="contact">
      <div class="halfw-left">
        <h1 id="conact-heading">Get the best holiday plan by expert</h1>
        <span >You can also call us or contact us through mail</span>
        <p id="par"><i class="fas fa-phone-alt"></i>01844244745</p> 
        <p><i class="far fa-envelope"></i> tourism@gmail.com</p>
        
      </div>
      <div class="halfw-right">
        <input class="input-item" type="text" name="" placeholder="Name">
        <input class="input-item" type="email" name=""  placeholder="Email"><br>
        <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter text here...">
          </textarea><br>
        <button class="btn">Get Quote</button><br>
        <span>We care about the protection of your data. Read our Privacy Policy.</span>
      </div>
    </div>
  </section>
  <footer>
    <div class="fotter">
      <div class="">
        <h2>CONTACT INFORMATION</h2>
        <p>137/12,Nurani Mosjid Road, Kuril Chowrasrta, Dhaka-1229.</p>
        <p><span class="info">Phone:</span>01744863036</p>
        <p><span class="info">Email:</span>tourism@gmail.com</p>
      </div>
      <div class="">
        <h2>LEGAL</h2>
        <p>Claim</p>
          <p>Privacy</p>
          <p>Terms</p>
      </div>
      <div class="">
      <h2>SITEMAPS</h2>
      </div>
    </div>
  </footer>
   
  


        

</body>

</html>