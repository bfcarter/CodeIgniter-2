<?php echo "<h4>".$msg."</h4>"; ?>

 <section id="portfolio" class="container main">    
        <ul class="gallery col-4">
        <?php 
        $preview = 1;
        foreach ($map as $filename) {
        $base_path = base_url()."upload/";
        ?>    
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo $base_path.$filename ?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="model" href="#model-<?php echo $preview ?>"><i class="icon-eye-open"></i></a><a href="<?php echo site_url("image_controller/download_image/$filename") ?>"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5><?php $filename ?></h5>
                    
                </div>
                <div id="model-<?php echo $preview ?>" class="model hide fade">
                    <a class="close-model" href="javascript:;" data-dismiss="model" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="model-body">
                        <img src="<?php echo $base_path.$filename ?>" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
        <?php 
        
         $preview = $preview +1;  
        
        } 
        
        ?>
        
    </section>
<?php echo '<p>'.anchor('image_controller/download_all','Download All'); ?>
