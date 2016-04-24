
<section class="title">
    <div class="container">
          <h1>Login</h1>   
    </div>
  </section>
  <!-- / .title -->   

<section id="login-page" class="container">
    <form class="center" action='' method="POST">
      <fieldset class="login-form">
        <div class="control-group">
          <!-- Username -->
           <div class="controls">
          </div>
        </div>

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
          
            <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge" required="required">
            <?php echo form_error('email');?>
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
          
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge"required="required">
            <?php echo form_error('password'); ?>
          </div>
        </div>


        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Login</button>
          </div>

         <html>

<div id="main">
<div id="login">

<?php echo "<a href='$login_url'><img class='fb' src=".base_url()."images/fb.png"."></a>"; ?>
</div>
</div>
        </div>
      </fieldset>
    </form>
  </section>
