<!DOCTYPE html>
<html>
    <head>
    <?php //include("_head.php"); 
    $this->load->view("includes/_head");?>
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <!--header_top-->
            <?php //include("_menu-contact.php"); ?>
            <?php $this->load->view("includes/_menu-contact");?>
            <!--//header_top-->

            <!--header-middle-->
            <?php //include("_menu-top.php"); 
            $this->load->view("includes/_menu-top");
            ?>
            <!--//header-middle-->

            <!--header-bottom-->
            <?php //include("_menu-horizontal.php"); 
            $this->load->view("includes/_menu-horizontal");
            ?>
            <!--//header-bottom-->        
        </header><!--/header-->

        <!-- Content -->
        <section id="slider"><!--slider-->
        <?php //include("_slider.php"); 
        $this->load->view("includes/_slider");
        ?>
        </section><!--/slider-->

        <section>
            <div class="container">
                <div class="row">
                <!-- sidebar - esquerda -->
                <?php //include("_sidebar-left.php");
                $this->load->view("includes/_sidebar-left");?>
                <!-- //sidebar - esquerda -->

                <!-- content area -->
                <?php //include("_content-area.php"); 
                $this->load->view("includes/_content-area");?>
                <!-- //content area -->
                </div>
            </div>
        </section>
        <!-- //Content -->

        <!--Footer-->
        <footer id="footer">
            <!-- footer top -->
            <?php //include("_footer-top.php"); 
             $this->load->view("includes/_footer-top");?>?>
            <!-- //footer top -->

            <!-- footer menu -->
            <?php //include("_footer-menu.php"); 
            $this->load->view("includes/_footer-menu");?>
            <!-- //footer menu -->

            <!-- footer credits -->
            <?php //include("_footer-credits.php"); 
            $this->load->view("includes/_footer-credits");?>
            <!-- //footer credits -->
        </footer><!--/Footer-->

        <?php //include("_load-scripts.php"); 
        $this->load->view("includes/_load-scripts");?>
    </body>
</html>