
<html>

<body>
<div id="container">
<div id="wrapper">
<h2>Update Data</h2>

<div id="detail">
<!-- Fetching All Details of Selected User From Database And Showing In a Form -->

<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_user_id1"?>">
<label>Name :</label> 
<input type="text" name="uname" value="<?php echo set_value('uname'); ?>">
<label>Email :</label>
<input type="text" name="uemail" value="<?php echo set_value('uemail'); ?>">
<label>Password :</label>
<input type="text" name="upassword" >

<input type="submit" id="submit" name="usubmit" value="Update">
</form>
<h2> Upload Pattern <h2>
<form method="post" action="<?php echo site_url('image_controller/image_gallery'); ?>" enctype="multipart/form-data" />

<input type="file" name="userfile" size="20" />



<input type="submit" value="Upload" />

</form>



</div>
</div>
</div>
</body>
</html>

