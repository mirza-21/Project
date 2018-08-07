<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<?php include ("include/head.php"); ?>
<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
    <?php include ("include/header.php"); ?>
    
    <div id="content" class="wrapper bgded overlay" style="background-image:url(img/contact.jpg);">
    <div class="container-fluid" style="margin-top:-0;">
    <div class="heading">
    <h2 style="color:#ffffff;padding-top:43px;text-align:center;">CONTACT US</h2>
    <hr style="margin:10px;">
    </div>
    <div class="row" style="margin-top:20px;">
    <div class="col-md-6" style="padding:20px;">
    <h2 class="title1" ><b>Contact</b> Form</h2>
      	<form id="contact-form-face" action="#">
		<input class="form-control" type="text" name="name" value="Name" style="margin-bottom:20px;" onfocus="if (this.value == 'Name') this.value = '';" onblur="if (this.value == '') this.value = 'Name';">
                                
        <input class="form-control" type="text" name="mobile" value="mobile" style="margin-bottom:20px;" onfocus="if (this.value == 'mobile') this.value = '';" onblur="if (this.value == '') this.value = 'mobile';">
                                
		<textarea class="form-control" name="message" style="margin-bottom:20px;" onfocus="if (this.value == 'Message') this.value = '';" onblur="if (this.value == '') this.value = 'Message';">Message</textarea>
		<input class="btn btn-success" type="submit" value="Send message">
		</form>
    </div>
        
    <div class="col-md-6" style="padding:20px;">
    <h2 class="title1"><b>Contact</b> Details</h2>
 		<ul class="list-unstyled">
        	<li><h4>Riseonex Solutions Pvt. Ltd.<br>2nd Floor,Plot-572/1087,<br> Lewis Road, B.J.B Nagar, 751014</h4></li>
            <li><h4>0674-602-5555</h4></li>
            <li><h4>info@rxindia550.com</h4></li>
        </ul>
    </div>
    </div>
    </div>
    
    </div>

    
    <?php include ("include/footer.php"); ?>
  </div>
</div>
</body>
</html>
