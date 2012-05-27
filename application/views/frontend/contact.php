<!-- Google Location Service -->
<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCQB_jpJTgKTIum-ofIxsgutBmc-gcThQg"></script>
    <script type="text/javascript">
    $(function(){ 
        //Map Jquery
        $("#map").gMap({ controls: false,
            scrollwheel: false,
            markers: [{ latitude: -6.229555086277892,
                        longitude: 106.82551860809326 }],
            icon: { image: "images/map-marker.png", 
                    iconsize: [85, 95],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0] },
            latitude: 34.008447,
            longitude: -118.134803,
            zoom: 15 
        });
    });
    </script>
<!-- Google Location Service End -->

<!-- begin of pagetitle area -->
    <div id="pagetitle-container">
    	<div class="row">
        	<div class="grid_10">
    			<h2>Contact Us</h2>
                <p>Call Let's Go Freight and get in touch with an representative to find out all of the services we can offer. We look forward to hearing from you.</p>
            </div>           
        </div>    
    </div>
    <div id="breadcumb">
        <div class="row">
          <div class="grid_12">
              <span class="bread-img"><img src="<?= base_url(); ?>images/home-icon.gif" alt="" class="bread-img" /></span>
              <span class="bread-txt">&nbsp; &raquo; &nbsp; contact</span>
          </div>
        </div>
    </div>
    <!-- end of pagetitle area -->    
      
    <!-- begin of content area -->
    <div id="maincontent-contact">
        <!-- Two Column Layout -->
        <div class="row">
            <div class="column grid_6">
                <h4>Get in touch</h4>
                <p>Please use the link to request a free quote. If you wish to inquire about your shipment, then please call. For all other questions, you may use this form.</p>
                <div class="row">
                    <div class="grid_6">
                    	<img src="<?= base_url(); ?>images/sample-images/contact-icon1.png" alt="" class="contact-icon" />
                    	<h5>Sales & General Inquiries</h5>
                        <p>6434 Ferguson Drive <br />
                        Commerce, CA 90022</p>
                        <ul class="square">
                        	<li>323 720 8400 Tel</li>
                            <li>info@letsgofreight.com</li>
                        </ul>
                    </div>
                    <div style="margin-left: 30px; ">
                        <img src="<?= base_url(); ?>images/usdot-logo.png" align="middle">USDOT: 2196424
                    </div>
                    
                </div>
                
                <div id="map-box">
                    <div id="map"></div>
                </div>
            </div>            
            <div class="grid_6 contact-right">
                <h4>Send Us a Message</h4>
                <div id="contact-form-area">
                	<!-- Contact Form Start //-->
                    <form action="#" id="contactform"> 
                        <fieldset>
                        <label>Name</label>
                        <input type="text" name="name" class="textfield" id="name" value="" />
                        <div class="clear"></div>
                        <label>E-mail</label>
                        <input type="text" name="email" class="textfield" id="email" value="" />
                        <div class="clear"></div>
                        <label>Subject</label>
                        <input type="text" name="subject" class="textfield" id="subject" value="" />
                        <div class="clear"></div>    
                        <label>Message</label>
                        <textarea name="message" id="message" class="textarea" cols="2" rows="4"></textarea>
                        <div class="clear"></div> 
                        <label>&nbsp;</label>
                        <input type="submit" name="submit" class="buttoncontact" id="buttonsend" value="Submit" />
                        <span class="loading" style="display: none;">Please wait..</span>
                        <div class="clear"></div>
                        </fieldset> 
                    </form>
                    <!-- Contact Form End //-->
                </div>
                <h5>We would like to hear from you. <br />
                Please fill out this form and we<br />
                will get in touch with you shortly.</h5>
            </div>
        </div>       
    </div>
    <!-- end of content area -->    