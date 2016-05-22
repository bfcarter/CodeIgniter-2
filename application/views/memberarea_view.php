
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
<!--=========== Delete ===========-->

<body>
<div id="container">
<div id="wrapper">
<h1>Delete </h1>
<div id="menu">
<p>Click On Menu</p>
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($users as $user): ?>
<li><a href="<?php echo base_url() . "index.php/delete_ctrl/show_name/" . $user->name; ?>"><?php echo $user->name; ?></a>
</li><?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_user as $user): ?>
<p>user Detail</p>
<?php echo $user->name; ?>
<?php echo $user->email; ?>
<?php echo $user->password; ?>

<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/delete_ctrl/delete_name/" . $student->name; ?>">
<button>Delete</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>


</div>
</div>
</div>
</body>
</html>

