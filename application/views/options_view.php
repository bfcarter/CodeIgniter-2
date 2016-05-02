

<body>
<h2>Add<h2>
<?php echo form_open('site/create');?>

<p>
<label> for="title">Title:</label>
<input type="text" name="title" id="title"/>
</p>

<p>
<label> for="content">Content:</label>
<input type="text" name="content" id="content"/>
</p>

<p>
<label> for="pattern">Pattern:</label>
<input type="text" name="pattern" id="pattern"/>
</p>

<p>
<input type="submit"  value="submit"/>
</p>

<?php echo form_close();?>

<hr />

<h2> Read</h2>
<?php if(isset($records)) : foreach($records as $row) : ?>

	<h2><?php echo anchor("site/delete/$row->id",$row->title); ?> </h2>
	<div><?php echo $row->content; ?></div>

<?php endforeach; ?>

<?php else : ?>
	<h2> No Records were Returned. </h2>
<?php endif; ?>

<hr />

<h2> Delete</h2>
<p> To 

