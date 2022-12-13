<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/hotel.css">

    <title>hotel</title>
</head>

<body>
    <?php require 'index.php'; ?>


    <main>
        <form method="post" action="hotelAdd.php">
            <input type="submit" value="Add Hotel">
        </form>

        <div class="cards">

            <div class="card-single">
                <div>
                    <h1>51</h1>
                    <span>Hotel</span>
                </div>
                <div>
                    <span class="fas fa-users"></span>
                </div>
            </div>
        </div>

        </div>
    </main>
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




</body>

</html>