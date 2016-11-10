<?php 
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">

    <div class="inner_content">

        <h2 class="inner_content_title"><?php echo $this->result['fetch']['post_title']; ?></h2>

        <p class="inner_content_description">
            <u>On: <?php echo date('d-m-Y', strtotime($this->result['fetch']['post_date'])); ?></u>
            &emsp;
            <u>Update: <?php echo date('d-m-Y', strtotime($this->result['fetch']['post_update'])); ?></u>
        </p>

        <?php 
        echo str_replace('-APP-LINK-', $this->URL('APP'), $this->result['fetch']['post_content']);
        ?>

        <div>
            <?php
                $tags = explode(',', trim($this->result['fetch']['post_tags'], ','));
                foreach($tags as $tag) {
                    echo '<span class="tag post_tags">' . ucwords($tag) . '</span>';
                }
            ?>
        </div>
        
    </div>
</div>