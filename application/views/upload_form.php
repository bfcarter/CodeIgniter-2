

<section class="title">
    <div class="container">
          <h1>Upload Pattern</h1>   
    </div>
  </section>
<form method="post" action="<?php echo site_url('image_controller/image_gallery'); ?>" enctype="multipart/form-data" />

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>