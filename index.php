

<?php include('layouts/header.php'); ?>



     

      <!--Home-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>Best Prices</span> This Season</h1>
          <p>Eshop offers the best products for the most affordable prices</p>
          <a href="shop.php"> <button class="text-uppercase" >Shop Now</button></a>
        </div>
      </section>


      <!--New-->
      <section id="new" class="w-100" >
        <div class="row p-0 m-0">
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0" >
            <img class="img-fluid" src="assets/imgs/dates1.jpg"/>
            <div class="details" >
              <h2>Dates</h2>
              <a href="shop.php"> <button class="text-uppercase" >Shop Now</button></a>
            </div>
          </div>
          <!--Two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/nuts.jpg"/>
            <div class="details">
              <h2>Nuts</h2>
              <a href="shop.php"> <button class="text-uppercase" >Shop Now</button></a>
            </div>
          </div>

          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/honey.jpg"/>
            <div class="details">
              <h2>Honey</h2>
              <a href="shop.php"> <button class="text-uppercase" >Shop Now</button></a>
            </div>
          </div>
        </div>
      </section>

 
 <!--chat bot -->
 <section>
             <div class="container_chat">
                 <div class="chatbox">
                      <div class="chatbox__support">
                             <div class="chatbox__header">
                                 <div class="chatbox__image--header">
                                     <img  src="./assets/imgs/logoa.jpeg" alt="image">
                                  </div>

                                  <div class="chatbox__content--header">
                                      <h4 class="chatbox__heading--header">Aldughaish Chat</h4>
                                      <p class="chatbox__description--header">Hello , How can i help ?</p>
                                  </div>
                              </div>

                              <div class="chatbox__messages">

                                   <!--<div class="messages__item messages__item--operator">  Hello I'm ChatBot, How can i help ? </div> -->

                                   <!-- <div class="messages__item messages__item--visitor"> Hello I'm Ghamdan User </div> -->

                              </div> 

                              <div class="chatbox__footer">
                                     <input id="data"  type="text"  placeholder="Write a message...">
                                     <button id="emoji-btn"> &#127773;</button>
                                     <button  class="chatbox__send--footer send__button" id="send-btn" >Send</button>
                               </div>
                     </div>
                               <div class="chatbox__button">
                                 <button>
                                     <img src="https://img.icons8.com/bubbles/50/000000/chat.png"/>
                                  </button>
                               </div>
                 </div>
             </div>
         </section> 
 <!--end chat bot-->






      <!--Featured-->
    <section id="featured" class="my-5 pb-5">
          <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
          </div>
        <div class="row mx-auto container-fluid">

           <?php include('server/get_featured_products.php'); ?>
           <?php while($row= $featured_products->fetch_assoc()){ ?>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i><br>
                <span class="review-strar">42 Reviews</span>
              </div>
              <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
              <h4 class="p-price">RM <?php echo $row['product_price']; ?></h4>
             <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
            </div>
      
 
          <?php } ?>
        </div>
    </section>

          

         


      <!--Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>The Original Collection <br> UP to 30% OFF</h1>
          <a href="shop.php"> <button class="text-uppercase" >Shop Now</button></a>
        </div>
      </section>
   

      <!--Yemeni Honey-->
      <section id="honey" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Honey</h3>
          <hr class="mx-auto">
          <p>Here you can check out our Honey</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_honey.php'); ?>

        <?php while($row=$honey_products->fetch_assoc()){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">RM <?php echo $row['product_price']; ?> </h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>
          
          <?php } ?>
         
          
        </div>
      </section>


      <!--dates-->
     <section id="dates" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Dates</h3>
        <hr class="mx-auto">
        <p>Check out our Dates</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_dates.php'); ?>
      <?php while($row=$dates->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">RM<?php echo $row['product_price'];?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
        </div>

      <?php } ?>
        
     
      </div>
     </section>

      <!--nuts-->
      <section id="nuts" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Nuts</h3>
          <hr class="mx-auto">
          <p>Here you can check out our Nuts</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_nuts.php');?>
        <?php while($row=$nuts->fetch_assoc()){ ?>


          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">RM<?php echo $row['product_price'];?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>

        <?php } ?>
         
        
        </div>
      </section>


    

    
 


<?php include('layouts/footer.php'); ?>
