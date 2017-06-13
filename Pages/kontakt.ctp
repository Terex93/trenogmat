<div id="contact_sec">
  <div class="container">
  <div class="contact_sec_inner">
  
  <?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    
     
    $email_subject = "TrenogMat contact form submissions";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $email_to =  "post@trenogmat.no";
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Fornavn: ".clean_string($first_name)."\n";
    $email_message .= "Etternavn: ".clean_string($last_name)."\n";
    $email_message .= "Email adresse: ".clean_string($email_from)."\n";
    $email_message .= "Mobilnummer: ".clean_string($telephone)."\n";
    $email_message .= "Kommentar: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
<div class="col-lg-6 col-md-offset-3 contct_msg">
 <div class="clearfix">
        <div class="alert alert-success">
   
<h3>Takk for at du kontakter oss. Vi vil behandle din forespørsel så raskt som mulig.</h3>
 </div>
         </div>
         </div>
<?php
}
?>
  
    <div class="col-lg-6 col-md-offset-3">
    
    <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" accept-charset="ISO-8859-1">
          <fieldset>
            <h1 class="text-center">KONTAKT OSS</h1>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Fornavn*</label>
              <div class="col-md-8">
				<input id="name" type="text" name="first_name" placeholder="Fornavn" class="form-control alphaonly" maxlength="50" size="30" required="required" pattern="[a-zA-Z][a-zA-Z0-9\s]*">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Etternavn</label>
              <div class="col-md-8">
				<input id="name" type="text" name="last_name" placeholder="Etternavn" class="form-control" maxlength="50" size="30" required="required" pattern="[a-zA-Z][a-zA-Z0-9\s]*">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email adresse*</label>
              <div class="col-md-8">
				<input id="email" type="email" name="email" placeholder="Email adresse" class="form-control" maxlength="80" size="30" required="required">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Mobilnummer*</label>			  
              <div class="col-md-8">
              <input maxlength="10" id="telephone"  type="text"  name="telephone" placeholder="Mobilnummer" class="form-control field" size="30" required="required">
              
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="message">Kommentar</label>
              <div class="col-md-8">
				<textarea id="message" name="comments" class="form-control" placeholder="Skriv din melding her…" maxlength="1000" cols="25" rows="5" required="required"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-md cont_smbt">SEND INN</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div><!--well well-sm-->

    <div class="clearfix"></div>
    </div>
   <div class="clearfix"></div>
  </div><!--contact_sec_inner-->
</div><!--container-->
</div><!--contact_sec-->
