<?php $agro_email = "contato@agrobuy.com.br";
$agro_facebook = "https://www.facebook.com/agrobuy";
$agro_twitter = "https://www.twitter.com/agrobuy";
$agro_linkedin = "https://br.linkedin.com/in/agrobuy";    ?>
<div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li>
                                    <?php
																		if($agro_email != ""){
																		?>
                                    <a href="mailto:<?php echo $agro_email; ?>" title="Fale com a Agrobuy"><i class="fa fa-envelope"></i> <?php echo $agro_email; ?></a>
																		<?php
																		}
																		?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <?php
																		if($agro_facebook != ""){
																		?>
                                    <li><a href="<?php echo $agro_facebook; ?>" title="Agrobuy no Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <?php
																		}
																		if($agro_twitter != ""){
																		?>
                                    <li><a href="<?php echo $agro_twitter; ?>" title="Agrobuy no Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <?php
																		}
																		if($agro_linkedin != ""){
																		?>
                                    <li><a href="<?php echo $agro_linkedin; ?>" title="Agrobuy no LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <?php
																		}
																		?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->