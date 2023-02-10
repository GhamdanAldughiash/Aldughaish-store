

 <?php include('layouts/header.php'); ?>



<!--Contact-->
<section id="contact" class="container my-5 py-5">
    <div class="container text-center mt-5">
        <h3>Contact us</h3>
        <hr class="mx-auto">
        <p class="w-50 mx-auto">
            Phone number: <span>+601127247147</span> 
        </p>
        <p class="w-50 mx-auto">
            Email address: <span>ghamdan77535a@gmail.com</span>
      </p>
      <p class="w-50 mx-auto">
          We work 24/7 to answer your questions
      </p>
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




<?php include('layouts/footer.php'); ?>