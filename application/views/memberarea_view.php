<h1>Hello, <?php echo $name; ?> !!</h1>


<html>

<hr/>
<body>
<div id="container">
<div id="wrapper">
<h2>Update Data</h2>

<div id="detail">
<!-- Fetching All Details of Selected User From Database And Showing In a Form -->

<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_user_name1"?>">
<label>Name :</label>
<input type="text" name="uname" >
<label>Email :</label>
<input type="text" name="uemail" >
<label>Password :</label>
<input type="text" name="upassword" >

<input type="submit" id="submit" name="usubmit" value="Update">
</form>
<h2> Upload Pattern <h2>
<form method="post" action="<?php echo site_url('welcome/image_gallery'); ?>" enctype="multipart/form-data" />

<input type="file" name="userfile" size="20" />



<input type="submit" value="Upload" />

</form>
<h2> View Pattern Gallery <h2>

<input type="submit" value="View" />

</div>
</div>
</div>
</body>
</html>

