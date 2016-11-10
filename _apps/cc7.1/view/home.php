<?php 
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents home_con">
    
    <div class="imageSlider">
        <img alt="Web Designer" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/design.png" />
        <img alt="Web Developer" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/develop.png" />
        <img alt="Search Engine Optimization" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/seo.png" />
        <img alt="Web Security" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/security.png" />
        <img alt="Hire or Consult" src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP'); ?>img/slide/hire.png" />
        <div class="imageSlider_title"></div>
    </div>
    
    <h1>Web Design</h1>
    <p>
        Club Coding can build any type or size website you require, from small custom designed websites or highly advanced online stores. 
        We also offer lots of help and advice along the way, so don't worry if you are not a web guru, we have you covered. 
    </p>
        
    <h1>Web Development</h1>
    <p>
        ClubCoding allows you to have a great web presence through your website by providing you with great web development 
        solutions exactly according to you need. Generates delicately customized PHP Web development, PHP custom development, 
        CMS Integration and E-Commerce Website development applying PHP as a server side scripting language. 
    </p>
    
    <h1>Security & Penetration</h1>
    To make your site safe, ClubCoding can test, find or consult about security issue for your web app or site.
    
    <h1 id="platforms">Languages & Platforms</h1>

    <?php     
    $cont = ['html', 'css', 'javascript', 'jquery', 'bootstrap', 'responsive', 'json', 'xml', 'ajax', 'regex', 
            'php', 'oop', 'mvc', 'mysql', 'pdo', 'apache', 'nginx', 'cpanel', 'ftp', 'wordpress', 'security', 'linux'];

    for($i = 0; $i < 22; $i++) {
        echo '<div class="home_box">
                <img src="' . $this->URL('APP') . $this->PATH('ACTIVE_APP') . 'img/boxs/' . $cont[$i] . '.png" alt="' . ucfirst($cont[$i]) . '" title="' . ucfirst($cont[$i]) . '" />
            </div>';
    }    
    ?>
    
    <h1>Hire or Consult</h1>
    <table class="table_noborder">
        <tr>
            <td>
                Security Issue or Find Bug (Front End/Back End)
            </td>
            <td>
                Penetration (Pen Tester)
            </td>
        </tr>
        <tr>
            <td>
                Search Engine Optimization
            </td>
            <td>
                Page Performance
            </td>
        </tr>
        <tr>
            <td>
                Regarding Hosting/Server
            </td>
            <td>
                Cpanel, FTP, or Server Management
            </td>
        </tr>
    </table>
    
    <br/><br/>
    
    <a class="btn btn_cbu cc_big_btn" href="<?php echo $this->URL('APP'); ?>contact">Contact US</a> 
    
    <br/><br/>

</div>