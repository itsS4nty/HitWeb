
<?php
    function contact() {
       echo '
            <div class="popup-wrap" style="position:fixed;">
              <div class="popup-box">
                <h2>¡Contáctanos!</h2>
                <hr>
                <div id="contactDiv">
                  <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;administracio@hitsystems.es</p>
                  <script>
                      var telContact = document.getElementById("contactDiv");
                      if (typeof window.orientation !== "undefined") { 
                        $("#contactDiv").append(\'<p><i class="fas fa-phone-alt"></i><a href="tel:937161010" style="color: black; text-decoration: none;">&nbsp;&nbsp;¡Click para llamarnos!</a> </p>\');
                      } else {
                        $("#contactDiv").append(\'<p><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;937 16 10 10 </p>\');
                      }
                  </script>
                  <p><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Lunes - Viernes | 09:00 - 18:00</p>
                </div>
                <a class="close-btn popup-close" href="#">x</a>
              </div>
            </div>
            ';
       /*echo '<iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.7813329911673!2d2.096565015674284!3d41.55233159371591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a494e52bb260e7%3A0x42fa46bad940c363!2sHitSystems%20S.L.!5e0!3m2!1ses!2ses!4v1594806814205!5m2!1ses!2ses" 
            width="100%" height="105%" frameborder="0" style="border:0;" 
            allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        ';*/
      
    } 
?>