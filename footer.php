<!-- Footer
============================================= -->
<footer id="footer" class="dark">

  <div class="footer-top">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="footer-top-content">
  <i class="icon-map-marker"></i>
<h2>ADDRESS</h2>
<p>Duke House, 15 Seymour Street<br>
Woolwich,London</p>
</div>
</div>

<div class="col-md-4">
  <div class="footer-top-content">
    <i class="icon-mobile"></i>
  <h2>CALL US</h2>
  <p>208 317 4933, 0793 072 5746</p>
  </div>
</div>
<div class="col-md-4">
  <div class="footer-top-content">
    <i class="icon-mail"></i>
  <h2>EMAIL</h2>
  <p><a href="mailto:info@shinetech.com">info@shinetech.com</a></p>
  </div>
</div>
</div>
</div>
  </div>

  <!-- Copyrights
  ============================================= -->
  <div id="copyrights">

    <div class="container clearfix">

      <div class="col_half">
        © ShineTech Electrical Services Ltd 2014 - 2017. All rights reserved. <br>Registered in England and Wales. Registered No. 09037622 VAT Registered 264040335<br>
        <!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
      </div>

      <div class="col_half col_last tright">
        <div class="fright clearfix">
          <a href="#" class="social-icon si-small si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>



          <!-- <a href="#" class="social-icon si-small si-borderless si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a> -->

          <!-- <a href="#" class="social-icon si-small si-borderless si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
          </a> -->
          <a href="#" class="social-icon si-small si-borderless si-skype2">
            <i class="icon-skype2"></i>
            <i class="iicon-skype2"></i>
          </a>







          <!-- <a href="#" class="social-icon si-small si-borderless si-linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
          </a> -->
        </div>

        <div class="clear"></div>

        <!-- <i class="icon-envelope2"></i> info@shinetech.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> 0208 317 4933 <span class="middot">&middot;</span> <i class="icon-skype2"></i> ShinetectonSkype -->
      </div>

    </div>

  </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<div id="requestCallback" class="popup-holder">
<span class="close"></span>
<div class="popup-box">
  <h2>Request a Callback</h2>
  <form>
    <ul>
      <li>
        <input type="text" placeholder="Full Name">
      </li>
      <li>
        <input type="text" placeholder="Phone Number">
      </li>
      <li>
        <input type="email" placeholder="Email Address">
      </li>
      <li>
        <input class="button button-rounded" type="submit" value="Submit">
      </li>
    </ul>
  </form>
</div>
</div>

<!-- Footer Scripts
============================================= -->

<script type="text/javascript" src="js/functions.js"></script>
<script>
$(document).ready(function(){
$('.main-slider .slider').bxSlider({
  mode: 'horizontal',
captions: true
});

//---------------
  $('.slider').bxSlider({
    slideWidth: 400,
    minSlides: 4,
    maxSlides: 5,
    slideMargin: 10
  });

	$("[data-fancybox]").fancybox({
			// Options will go here
		});
    //----
    $('.matchHeight').matchHeight();



		jQuery("#gallery").unitegallery();

		jQuery("#gallery2").unitegallery({

			theme_enable_fullscreen_button: true,	//show, hide the theme fullscreen button. The position in the theme is constant
			theme_enable_play_button: true,			//show, hide the theme play button. The position in the theme is constant
			theme_enable_hidepanel_button: true,	//show, hide the hidepanel button
			theme_enable_text_panel: true,			//enable the panel text panel.

			theme_text_padding_left: 20,			//left padding of the text in the textpanel
			theme_text_padding_right: 5,			//right paddin of the text in the textpanel
			theme_text_align: "left",				//left, center, right - the align of the text in the textpanel
			theme_text_type: "title",				//title, description - text that will be shown on the text panel, title or description

			theme_hide_panel_under_width: 480		//hide panel under certain browser width, if null, don't hide

		});

	});

</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOTSBqohEGO4zHfb8Ye7acqKcTxkV6ySo"></script>
<script src="js/plugins/gmaps.js"></script>
<script src="js/plugins/gmaps.init.js"></script>
</body>
</html>
