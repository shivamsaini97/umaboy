<?php 
@ob_start();
include('header.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  
      $site_owners_email = 'enquiry@umiyamachines.com'; // Replace this with your own email address
      $site_owners_name = 'umiyamachines.com'; // replace with your name
    
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['tel'];
      $message=$_POST['message'];
	
	
    $nameText = null;
    $subject = "Contact Request";
    $telText  = null;
    $emailText   = null;
	
	if ( !empty($name) ) {
		$nameText .= '<b>Name:</b> ' . $name . '<br/>';
	}
	
	if ( !empty($phone) ) {
		$telText .= '<b>Telephone:</b> ' . $phone . '<br/>';
	}
	
	if ( !empty($email) ) {
		$emailText .= '<b>E-mail:</b> ' . $email . '<br/>';
	}
	if ( !empty($message) ) {
		$content = '<b>Message:</b> ' . $message . '<br/>';
	}
		require_once('PHPMailer/src/PHPMailer.php');
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = $subject;
        $mail->SMTPDebug  = 2; 
		$mail->AddAddress($site_owners_email, $site_owners_name); 
		
		$mail->Body = '<html><body>'.$nameText . $telText . $emailText . $content . '</body></html>';
		
		$mail->isHTML(true);
		if($mail->Send())
		{
		$_SESSION["message"]='Thank you. Your message has been sent.';
		}else{
		    $_SESSION["error_message"]='Somthing went wrong!.';
		}
		header('Location: contact.php');
	
}
 ?>

  <div class="home-slider-area contact contact-page-banner">
    <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox"> 
        <div class="item active">
          <div class="single-slide-item slide-5">
            <div class="single-slide-item-table">
              <div class="single-slide-item-table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 style="text-transform:capitalize; font-size: 72px;">CONTACT US</span></h2>
                    
                    <!-- <a class="slide-btn" href="javascript:void(0)">Contact Us</a>--></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>     
      </div>
    </div>
  </div>

  <section class="contact-us-form">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <div class="about-text">
            <h2 style="margin-bottom: 60px;"><span>Get in Touch  </span><span class="blue-color">With Us</span></h2>

          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7118.4227789546885!2d80.99903464589806!3d26.86502417763704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be39ab5cd7e47%3A0x870f6dfd0896b36b!2sRohtas%20Plumeria!5e0!3m2!1sen!2sin!4v1688458291747!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
        </div>
          <div class=" col-lg-6 col-sm-12">
              <?php if(isset($_SESSION["message"])){ ?>
                <div class="alert alert-success alert-sm"  role="alert"><?php echo $_SESSION["message"]; ?></div>
                <?php } ?>
                
                <?php if(isset($_SESSION["error_message"])){ ?>
                <div class="alert alert-danger alert-sm"  role="alert"><?php echo $_SESSION["error_message"]; ?></div>
                <?php } ?>
          <form  action=""  id="contact_form" method="POST">
                <div>
                  <label for="">Name</label>
                  <input type="text" name="name" id="name" value=""  class=""  placeholder="Name" onkeydown="return /[a-z ]/i.test(event.key)" >
                </div>
                <div>
                  <label for="">Email</label>
                  <input type="email" name="email" id="email" value=""  class=""  placeholder="Email">
                </div>
                <div>
                  <label for="">Phone</label>
                  <input type="tel" name="tel" id="tel" value=""  class=""  placeholder="Phone" maxlength="10">
                </div>
                <div>
                  <label for="">Message</label>
                    <textarea name="message" id="" cols="30" rows="4"placeholder="Message"></textarea>
                </div>
               <div>  
                <input type="submit" class="btn">
               </div>
             </form>  
       </div>
    </div>
 </section>

<section class="social-section" style="background: #105ea91c;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-address">
          <div class="contact-detail d-flex1">
            
                <div >
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                </div>
                <div>
                  <h4>Address:</h4>
                <p>E 005 Rohtash Plumeria Homes
                    besides Sumeet Building
                    Vibhuti Khand, Gomatinagar
                    Lucknow Uttar Pradesh 226010</p>
                </div>
            
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-detail d-flex1">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
          </div>
            <div>
              <h4>Mail:</h4>
              <p><a href="mailto:enquiry@umiyamachines.com">enquiry@umiyamachines.com</a></p>
            </div>
        </div>
      </div>   
        <div class="col-md-4">
          <div class="contact-detail d-flex1">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
              </div>
           
              <div>
                <h4>Phone:</h4>
                <p><a href="tel:+919723468755" class=""> +91 9723468755</a></p>
              </div>
          </div>
        </div>
        
      </div>
    </div>
</section>
</div>
<?php include('footer.php'); ?>