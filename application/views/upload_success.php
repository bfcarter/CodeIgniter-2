<?php echo "<h4>".$msg."</4>"; ?>

 <section id="portfolio" class="container main">    
        <ul class="gallery col-4">
        <?php 
         $priview = 1;
        foreach ($map as $filename) {
        $base_path = base_url()."upload/";  
         
         ?>    
            <li>
                <div class="preview">
                    <img alt=" " src="<?php echo $base_path.$filename ?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-<?php echo $priview ?>"><i class="icon-eye-open"></i></a><a href="<?php echo site_url("image_controller/download_image/$filename") ?>"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5><?php $filename ?></h5>
                    
                </div>
                <div id="modal-<?php echo $priview ?>" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="<?php echo $base_path.$filename ?>" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
        <?php 
        
         $priview = $priview +1;  
        
        } 
        
        ?>
        
    </section>
<?php echo '<p>'.anchor('image_controller/download_all','Download All'); ?>
