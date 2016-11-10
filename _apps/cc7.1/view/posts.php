<?php 
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">
    
    <h1 class="inner_content_title apg_h1">Posts</h1>
    
    <?php 
    foreach ($this->result['fetch'] as $value) {
    ?>
        <div class="inner_content">
            
            <a href="<?php echo $this->URL('APP') . 'blog/' . $value['post_link']; ?>">
                
                <h2><?php echo $value['post_title']; ?></h2>
                
                <p class="inner_content_description"><?php echo ucwords($value['post_description']); ?></p>
                
            </a>
            
        </div>
    <?php
    }    
    ?>

</div>