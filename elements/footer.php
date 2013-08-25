<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>       
<?php Loader::element('footer_required'); ?>
<footer>
<div id="footer">
  <?php Loader::element('footer_required'); ?>
      <div class="container">
        <?php
        $a = new Area('footer');
        $a->display($c);
        ?>
        <p>&copy;<?php  echo date('Y')?> <?php  echo SITE?>  |  <?php echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5 - an open source CMS</a>')?></p>
      </div>
    </footer>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/vendor/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/main.js"></script>
    </body>
</html>
