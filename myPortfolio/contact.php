<?php include 'inc/header.php'; ?>   
<?php include 'inc/check-submit.php'; ?>    
   <section id="contact">
   <div class="container">  
        <?php if($msg != ''): ?> 
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?>

            </div>
        <?php endif; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1>Let's Talk</h1>
    <fieldset>
      <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="subject" placeholder="Subject" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea name="message" placeholder="Type your Message Here...." tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-dark">Submit</button>
    </fieldset>
  </form> 
</div>
   </section>
<?php include 'inc/footer.php'; ?> 