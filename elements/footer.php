<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>       
<?php Loader::element('footer_required'); ?>
<footer>
 <?php
        $a = new Area('footer');
        $a->display($c);
        ?>
        <p>&copy;<?php  echo date('Y')?> <?php  echo SITE?>  |  <?php echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5</a>')?></p>
            </footer>

        </div> <!-- /container -->
    </div>
    <script type="text/javascript" src="<?php echo $this->getThemePath()?>/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/vendor/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/main.js"></script>
    </body>
</html>
