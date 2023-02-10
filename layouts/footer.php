   <!--Footer-->
   <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/imgs/aldughaish.jpeg"/>
            <p class="pt-3" style="color:burlywood;">ALdughaish</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
           <h5 class="pb-2">Featured</h5>
           <ul class="text-uppercase">
             <li><a href="shop.php">Honey</a></li>
             <li><a href="shop.php">Dates</a></li>
             <li><a href="shop.php">Nuts</a></li>
             <li><a href="shop.php">New arrivals</a></li>
             
           </ul>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div>
              <h6 class="text-uppercase">Address</h6>
              <p>PANGSAPURI SETIA IMPIAN PERSIARAN JADE HILL 43000 KAJANG SELANGOR </p>
            </div>
            <div>
              <h6 class="text-uppercase">Phone</h6>
              <p>+601127247147</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>ghamdan77535a@gmail.com</p>
            </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row">
              <img src="assets/imgs/f2.jpg" class="img-fluid w-25 h-100 m-2"/>
              <img  src="assets/imgs/f6.jpg" class="img-fluid w-25 h-100 m-2"/>
              <img src="assets/imgs/f1.jpg" class="img-fluid w-25 h-100 m-2"/>
              <img  src="assets/imgs/f4.jpg" class="img-fluid w-25 h-100 m-2"/>
              <img  src="assets/imgs/f3.jpg" class="img-fluid w-25 h-100 m-2"/>
              <img  src="assets/imgs/f5.jpeg" class="img-fluid w-25 h-100 m-2"/>
            </div>
          </div>
        </div>



        <div class="copyright mt-5">
          <div class="row container mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
              <img src="assets/imgs/payment.jpeg"/>
              
              <img src="assets/imgs/paypal.png"/>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
              <p>We provide the best products & prices</a></p>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
             <a href="#"><i class="fab fa-facebook"></i></a>
             <a href="https://www.instagram.com/aldughaish_store/"><i class="fab fa-instagram"></i></a>
             <a href="https://api.whatsapp.com/send/?phone=601127247147&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
          <script src="./assets/js/chat.js"></script>  
          <script>
            $(document).ready(function(){
                $("#send-btn").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="messages__item messages__item--visitor">'+ $value +'</div>';
                    $(".chatbox__messages").append($msg);
                    $("#data").val('');
                    
                    // start ajax code
                    $.ajax({
                        url: 'message.php',
                        type: 'POST',
                        data: 'text='+$value,
                        success: function(result){
                            $replay = '<div class="messages__item messages__item--operator">'+ result +'</div>';
                            $(".chatbox__messages").append($replay);
                            // when chat goes down the scroll bar automatically comes to the bottom
                            $(".chatbox__messages").scrollTop($(".chatbox__messages")[0].scrollHeight);
                        }
                    });
                });
            });
        </script>
         <script>

          //Phone Number 10 numbers only
 function formatPhoneNumber(value) {
        if (!value) return value;
        const phoneNumber = value.replace(/[^\d]/g, '');
        const phoneNumberLength = phoneNumber.length;
        if (phoneNumberLength < 4) return phoneNumber;
        if (phoneNumberLength < 7) {
          return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
        }
        return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(
          3,
          6
        )}-${phoneNumber.slice(6, 9)}`;
      }

      function phoneNumberFormatter() {
        const inputField = document.getElementById('checkout-phone');
        const formattedInputValue = formatPhoneNumber(inputField.value);
        inputField.value = formattedInputValue;
      }
         </script>
</body>
</html>