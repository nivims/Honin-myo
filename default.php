        <?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1><a href="<?php  echo DIR_REL?>/"><?php $block = Block::getByName('My_Site_Name'); if($block && $block->bID) $block->display(); else echo SITE;?></a></h1>
       <?php
          $a = new Area('Site banner');
          $a->display($c);
          ?>
        </p>
      </div>
    <div class="main-content-area">
    <div class="row">
        <div class="span8">
    <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
      </div>
        <div class="span4">            
          <?php
        $a = new Area('Sidebar');
        $a->display($c);
        ?>
    </div>
    </div>
    </div> <!-- /container -->
</div>
</div>

<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/footer.php');
?>