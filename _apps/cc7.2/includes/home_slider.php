<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>
<div class="imageSlider">
    <img alt="Web Designer" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/design.png" />
    <img alt="Web Developer" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/develop.png" />
    <img alt="Search Engine Optimization" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/seo.png" />
    <img alt="Web Security" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/security.png" />
    <img alt="Hire or Consult" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/hire.png" />
    <div class="imageSlider_title"></div>
</div>