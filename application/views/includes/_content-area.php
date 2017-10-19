                    <div class="col-sm-9 padding-right">
                    	<!--novidades-->
                        <div class="features_items">
                            <h2 class="title text-center">Destaques</h2>
                            <?php foreach($anuncios as $anun){ ?>
                            <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=base_url().$anun->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$anun->anuncio_id?>"><h3 class="adtitle"> <?=$anun->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($anun->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($anun->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($anun->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$anun->anuncio_preco?></h5><h6 class="adunit">/<?=$anun->anuncio_unidade?></h6>
                                        <h6><b><?=$anun->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
                                   
									<div class="product-overlay">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
							</div>
                            
						</div><!--- /PRODUCT #1-->
						
                            <?php }?>
                        </div><!--//novidades-->
                        
                        <div class="category-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#animal" data-toggle="tab">Animal</a></li>
                                    <li><a href="#vegetal" data-toggle="tab">Vegetal</a></li>
                                    <li><a href="#florestal" data-toggle="tab">Florestal</a></li>
                                    <li><a href="#aquicultura" data-toggle="tab">Aquicultura</a></li>
                                    <li><a href="#prod_agropecuarios" data-toggle="tab">Produtos agropecuários</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="animal" >
                                    <?php foreach($animal as $ani){?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
								<div class="productinfo text-center">
										<img src="<?=base_url().$ani->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$ani->anuncio_id?>"><h3 class="adtitle"> <?=$ani->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($ani->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($ani->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($ani->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$ani->anuncio_preco?></h5><h6 class="adunit">/<?=$ani->anuncio_unidade?></h6>
                                        <h6><b><?=$ani->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									<div class="product-overlay sm">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                  
                                </div>
                                
                                <div class="tab-pane fade" id="vegetal" >
                                    <?php foreach($vegetal as $ani){?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
								<div class="productinfo text-center">
										<img src="<?=base_url().$ani->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$ani->anuncio_id?>"><h3 class="adtitle"> <?=$ani->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($ani->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($ani->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($ani->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$ani->anuncio_preco?></h5><h6 class="adunit">/<?=$ani->anuncio_unidade?></h6>
                                        <h6><b><?=$ani->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									<div class="product-overlay sm">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="tab-pane fade" id="aquicultura" >
                                    <?php foreach($pesca as $ani){?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
								<div class="productinfo text-center">
										<img src="<?=base_url().$ani->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$ani->anuncio_id?>"><h3 class="adtitle"> <?=$ani->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($ani->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($ani->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($ani->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$ani->anuncio_preco?></h5><h6 class="adunit">/<?=$ani->anuncio_unidade?></h6>
                                        <h6><b><?=$ani->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									<div class="product-overlay sm">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="florestal" >
                                    <?php foreach($florestal as $ani){?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
								<div class="productinfo text-center">
										<img src="<?=base_url().$ani->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$ani->anuncio_id?>"><h3 class="adtitle"> <?=$ani->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($ani->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($ani->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($ani->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$ani->anuncio_preco?></h5><h6 class="adunit">/<?=$ani->anuncio_unidade?></h6>
                                        <h6><b><?=$ani->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									<div class="product-overlay sm">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                    <div class="tab-pane fade" id="agropecuaria" >
                                    <?php foreach($agropecuaria as $ani){?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
								<div class="productinfo text-center">
										<img src="<?=base_url().$ani->anuncio_imagem1?>" alt="" />
										<a href="<?=base_url()?>index.php/anuncios/visualizarproduto/<?=$ani->anuncio_id?>"><h3 class="adtitle"> <?=$ani->anuncio_titulo?></h3></a>
                                        <a href=""><p class="adcompany"><?=$this->usuarios_model->nomeEmpresa($ani->usuario_id);?></p></a>
                                        <p class="companyloc"><em><?=$this->usuarios_model->enderecoEmpresa($ani->usuario_id);?> - <?=$this->usuarios_model->estadoEmpresa($ani->usuario_id);?> </em></p>
                                        <h5 class="adprice">R$ <?=$ani->anuncio_preco?></h5><h6 class="adunit">/<?=$ani->anuncio_unidade?></h6>
                                        <h6><b><?=$ani->anuncio_qtdminimo?></b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									<div class="product-overlay sm">
										<div class="overlay-content">
											<p><b> 10 Vendidos</b></p>
                                        <p class="adcredit"><b><i class="fa fa-credit-card" aria-hidden="true"></i> 12x R$ 8,33 sem juros</b></p>
                                        
                                        <p class="adevaluate">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </p> 
										</div>
									</div>
								</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>

                            </div>
                            
                        </div><!--/category-tab-->
                        
                        <!--recommended_items-->
                        <div class="recommended_items">
                            <h2 class="title text-center">Produtos sugeridos</h2>
                            
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                            <div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/recommend1.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice">R$ 100.00</h5><h6 class="adunit">/Peça</h6>
                                        <h6><b>10</b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									
								</div>
                                        </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
										<img src="images/home/recommend2.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice">R$ 100.00</h5><h6 class="adunit">/Peça</h6>
                                        <h6><b>10</b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
										<img src="images/home/recommend3.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice"><a class="btn btn-default add-to-cart"> Consultar</a></h5>
									</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                            <div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/recommend1.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice">R$ 100.00</h5><h6 class="adunit">/Peça</h6>
                                        <h6><b>10</b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
									
								</div>
                                        </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
										<img src="images/home/recommend2.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice">R$ 100.00</h5><h6 class="adunit">/Peça</h6>
                                        <h6><b>10</b> Peças (<b>Pedido Mín.</b>)</h6>
									</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
										<img src="images/home/recommend3.jpg" alt="" />
										<a href=""><h5 class="adtitle-sm"> Título do Anúncio (Limite de 30 Caracteres)</h5></a>
                                        <a href=""><p class="adcompany">Nome da Companhia Co., Ltd.</p></a>
                                        <p class="companyloc"><em>Santana do Parnaíba - SP</em></p>
                                        <h5 class="adprice"><a class="btn btn-default add-to-cart"> Consultar</a></h5>
									</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>			
                            </div>
                        </div><!--/recommended_items-->
                    </div>