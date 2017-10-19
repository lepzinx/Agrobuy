<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Iniciar disputa | Agrobuy</title>
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/dispute.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
	<!-- Generic page styles JQUERY UPLOAD -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fileupload.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<header>
	<div class="header-middle">
		<!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/home/logo.png" alt="" /></a>
					</div>

				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href=""><i class="fa fa-user"></i> Minha Conta</a></li>
							<li><a href=""><i class="fa fa-question-circle"></i> Ajuda</a></li>
							<li><a href="checkout.html"><i class="fa fa-get-pocket"></i> Compra Garantida</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</header><!--/header-->
<body>
	<section>

		<div class="container">
			<div class="row">
				<div class="col-sm-2" id="sidebarnav">
					<div class="container sidebars">
						<div id="sidebar1">
							<div id="sidebar">
								<div class="well">
									<div class="btn-group radio-group nav nav-pills">
										<div id="pillbg">
											<a href=""><label class="btn btn-primary">Comprar</label></a>
											<a href=""><label class="btn btn-primary active">Vender</label></a>
										</div>
									</div>
									<div class="tab-content">
										<div id="menu2" class="tab-pane fade in active">
											<br>
											<ul>
												<a><li><span class="glyphicon glyphicon-home "></span><p> Painel de Negócios</p></li></a>
												<a><li><span class="glyphicon glyphicon-comment"></span><p> Mensagens</p></li></a>
												<a><li><span class="glyphicon glyphicon-bullhorn"></span><p> Criar Anúncio</p></li></a>
												<a><li><span class="glyphicon glyphicon-list-alt"></span><p> Meus Anúncios</p></li></a>
												<a><li id="m4" class="active"><span class="glyphicon glyphicon-thumbs-up"></span><p> Reputação e Disputas</p></li></a>
												<a id="m5"><li><span class="glyphicon glyphicon-sort-by-attributes"></span><p> Serviços</p></li></a>
												<a><li id="m6"><span class="glyphicon glyphicon-user"></span><p> Perfil e Configurações</p></li></a>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="sidebar2">
							<ul id="reputation">
								<h4> Reputação e Disputas</h4>
								<hr>
								<a><li>Minha Reputação</li></a>
								<a><li>Iniciar uma Disputa</li></a>
								<a><li>Denunciar</li></a>
							</ul>
						</div>
						<div id="sidebar3">
							<ul id="servicesb">
								<h4> Serviços</h4>
								<hr>
								<a><li>Minha Conta Virtual</li></a>
								<a><li><hr></li></a>
								<a><li>Agentes de Compra</li></a>
							</ul>
						</div>
						<div id="sidebar4">
							<ul id="servicess">
								<h4> Serviços</h4>
								<hr>
								<a><li>Cotações de Frete</li></a>
								<li role="separator"><hr class="divider"></li>
								<a><li>Minha Conta Virtual</li></a>
							</ul>
						</div>
						<div id="sidebar5">
							<ul id="profile">
								<h4>Perfil e Configurações</h4>
								<hr>
								<a><li>Editar meu Perfil</li></a>
								<a><li>Editar Minhas Informações</li></a>
								<a><li>Editar Minhas Informações de Pagamento</li></a>
								<a><li>Editar Minhas Configurações</li></a>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-sm-10">
					<div class="page-header">
						<h2>Como podemos ajudar?</h2>
						<p class="lead">Por favor, nos ajude a entender melhor o seu problema</p>
					</div><!-- page-header -->

					<ul class="nav nav-tabs" role="tablist" id="myTabs">
						<li class="regtab active"><a id="nav1" href="#filtro" role="tab" data-toggle="tab">1.Onde ocorreu o problema?</a></li>
						<li class="space">.</li>
						<li class="regtab"><a id="nav2" href="#problema" role="tab" data-toggle="tab">2. Por favor, solicite uma ação.</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active col-md-8" id="filtro">
							<h3>Onde ocorreu o problema?</h3>
							<button id="produto" class="btn-default btn-lg cartinv">Tive um problema com minha Compra<span class="glyphicon glyphicon-chevron-right"></span></button>
							<button id="pagamento" class="btn-default btn-lg cartinv">Tive um problema com meu Pagamento<span class="glyphicon glyphicon-chevron-right"></span></button>
							<button id="arrependimento" class="btn-default btn-lg cartinv">Eu me arrependi da Compra<span class="glyphicon glyphicon-chevron-right"></span></button>

						</div>

						<div role="tabpanel" class="tab-pane fade col-md-8" id="problema">



							<div class="return">

								<form class="form-inline">
									<div class="form-group">
										<label> Você tem certeza? </label>
										<select id="dv0" class="form-control">
											<option selected disabled>Por favor, confirme sua escolha</option>
											<option value="n">Sim, estou arrependido da compra e desejo ser reembolsado</option>
											<option value="s1">Não, mudei de ideia e gostaria de ficar com o produto </option>
										</select>
										<br>
										<button class="btn-default btn-sm cartinv">Exercer direito de arrependimento</button>
										<a>Cancelar</a>
									</div>
								</form>
							</div>

							<div class="payment">
								<form class="form-inline">
									<div class="form-group">
										<div class="pb">
											<label> Qual foi o problema que ocorreu com o pagamento? </label>
											<select id="pm0" name="disputa_qual" class="form-control">
												<option selected disabled>Por favor, escolha o problema</option>
												<option value="Eu efetuei um pagamento há mais de 3 dias úteis e ele ainda não foi compensado">Eu efetuei um pagamento há mais de 3 dias úteis e ele ainda não foi compensado</option>
												<option value="Meu boleto expirou e não consegui pagá-lo a tempo">Meu boleto expirou e não consegui pagá-lo a tempo</option>
												<option value="Meu cliente ainda não efetuou o pagamento do produto que comprou">Meu cliente ainda não efetuou o pagamento do produto que comprou </option>
											</select>
										</div>
									</div>
									<br>
									<button type="submit" class="btn-default btn-sm cartinv">Iniciar disputa</button>
									<a>Cancelar</a>
								</form>

							</div>

							<div class="product">
								<form class="form-inline">
									<div class="form-group">

										<h3> Qual foi o problema com sua compra? </h3>
										<select id="pb0" name="disputa_qual" class="form-control">
											<option selected disabled>Por favor, escolha um problema da lista</option>
											<option value="Eu ainda não recebi o produto">Eu ainda não recebi o produto</option>
											<option value="Eu recebi um produto defeituoso, incompleto ou diferente das condições anunciadas">Eu recebi um produto defeituoso, incompleto ou diferente das condições anunciadas</option>
										</select>


										<div id="actionn">
											<label>O que deseja fazer?</label>
											<select class="form-control" name="disputa_oque">
												<option selected disabled>Por favor, escolha uma opção da lista</option>
                                                                                                <option value="Gostaria de receber o produto">Gostaria de receber o produto</option>
                                                                                                <option value="Gostaria de cancelar o pedido de receber meu dinheiro de volta">Gostaria de cancelar o pedido de receber meu dinheiro de volta</option>
											</select>
											<label>
												Por favor, escreva uma mensagem ao seu vendedor detalhando seu problema.
												<em> Se o fornecedor não responder em 3 dias úteis, iremos interceder para ajudar você.</em>
												<textarea class="form-control" name="disputa_mensagem" placeholder="Embora você possa estar nervoso, por gentileza, mantenha a calma e a gentileza ao tratar com o fornecedor; nós faremos o melhor para ajudá-los a resolver esse problema da melhor forma possível." rows="6" cols="120"></textarea>
											</label>
											<br>

											<br>
											<button type="submit" class="btn-default btn-sm cartinv">Iniciar disputa</button>
											<a>Cancelar</a>

										</div>

										<div id="actions">
											<label>O que deseja fazer?</label>
											<select id="pb1" class="form-control" name="disputa_oque">
												<option selected disabled>Por favor, escolha uma opção da lista</option>
												<option value="Gostaria de trocar o produto que recebi por um novo">Gostaria de trocar o produto que recebi por um novo</option>
												<option value="Gostaria pedir um abatimento no preço total">Gostaria pedir um abatimento no preço total</option>
												<option value="Gostaria de devolver o produto e receber meu dinheiro de volta">Gostaria de devolver o produto e receber meu dinheiro de volta</option>
											</select>
											<div id="description0">
												<label>O que, exatamente, aconteceu?</label>
												<select id="pb2" class="form-control" name="disputa_detalhe1">
													<option selected disabled>Por favor, escolha um evento da lista</option>
													<option value="O produto que recebi veio com defeito">O produto que recebi veio com defeito</option>
													<option value="O produto que recebi veio incompleto">O produto que recebi veio incompleto</option>
													<option value="O produto que recebi é diferente do anunciado">O produto que recebi é diferente do anunciado</option>
                                                                                                        <option value="O produto que recebi é falso">O produto que recebi é falso</option>
                                                                                                        <option value="O produto que recebi chegou com atraso">O produto que recebi chegou com atraso</option>
												</select>

												<select id="event0" class="form-control" name="disputa_detalhe2">
													<option selected disabled>Por favor, escolha um defeito da lista</option>
                                                                                                        <option value="O produto que recebi está quebrado ou avariado">O produto que recebi está quebrado ou avariado</option>
                                                                                                        <option value="O produto que recebi não funciona">O produto que recebi não funciona</option>
                                                                                                        <option value="Outro &#40;Favor descrever no campo abaixo &#41;">Outro &#40;Favor descrever no campo abaixo &#41;</option>
												</select>

												<select id="event1" class="form-control" name="disputa_detalhe3">
													<option selected disabled>Por favor, escolha uma inconformidade da lista</option>
                                                                                                        <option value="O produto que recebi não é o mesmo que era mencionado no anúncio">O produto que recebi não é o mesmo que era mencionado no anúncio</option>
                                                                                                        <option value="O produto que recebi difere em marca/modelo/tamanho/etc">O produto que recebi difere em marca/modelo/tamanho/etc</option>
                                                                                                        <option value="Outro &#40;Favor descrever no campo abaixo &#41;">Outro &#40;Favor descrever no campo abaixo &#41;</option>
												</select>

												<select id="event2" class="form-control" name="disputa_detalhe4">
													<option selected disabled>Por favor, escolha uma opção da lista</option>
                                                                                                        <option value="Recebi menos produtos do que comprei">Recebi menos produtos do que comprei</option>
                                                                                                        <option value="Faltam partes/acessórios">Faltam partes/acessórios</option>
                                                                                                        <option value="Outro &#40;Favor descrever no campo abaixo &#41;">Outro &#40;Favor descrever no campo abaixo &#41;</option>
												</select>
											</div>
											<label>
												Por favor, escreva uma mensagem ao seu vendedor detalhando seu problema.
												<em> Se o fornecedor não responder em 3 dias úteis, iremos interceder para ajudar você.</em>
												<textarea class="form-control" name="disputa_mensagem" placeholder="Embora você possa estar nervoso, por gentileza, mantenha a calma e a gentileza ao tratar com o fornecedor; nós faremos o melhor para ajudá-los a resolver esse problema da melhor forma possível." rows="6" cols="120"></textarea>
											</label>
											<div class="iimg">
												<br>
												<label> Insira imagens para justificar suas observações, comentários, etc</label>
												<span class="btn btn-default cartinv fileinput-button">
													<i class="glyphicon glyphicon-plus"></i>
													<span>Inserir Imagens</span>
													<!-- The file input field used as target for the file upload widget -->
													<input id="fileupload" type="file" name="files[]" multiple>
												</span>
												<br>
												<!-- The global progress bar -->
												<div id="progress" class="progress">
													<div class="progress-bar progress-bar-success"></div>
												</div>
												<!-- The container for the uploaded files -->
												<div id="files" class="files"></div>

												<div class="panel panel-default">
													<div class="panel-heading" data-toggle="collapse" data-target="#notascont">
														<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> Notas</h3>
													</div>
													<div id="notascont" class="panel-body collapse">
														<ul>
															<li>O tamanho máximo para o upload de imagens é de <strong>999 KB</strong> .</li>
															<li>Apenas extensões (<strong>JPG, GIF, PNG</strong>) são permitidas para upload .</li>
															<li>Imagens não enviadas para upload serão deletadas automaticamente após <strong>5 minutos</strong>.</li>
														</ul>
													</div>
												</div>
											</div>
                                                                                        <button type="submit" class="btn-default btn-sm cartinv">Iniciar disputa</button>
											<a>Cancelar</a>

										</div>

									</div>
								</form>
							</div>

							<br>
							<button id="back" class="btn btn-default btn-sm cartinv"> <span class="glyphicon glyphicon-chevron-left"></span> Voltar </button>
						</div><!-- container -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
	<script src="<?=base_url()?>assets/js/price-range.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<script src="<?=base_url()?>assets/js/dispute.js"></script>
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="<?=base_url()?>assets/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-image.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="<?=base_url()?>assets/js/jquery.fileupload-validate.js"></script>

	<script>
        /*jslint unparam: true, regexp: true */
        /*global window, $ */
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === '127.0.0.1/agrobuyci' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/',
                uploadButton = $('<button/>')
                    .addClass('btn btn-primary')
                    .prop('disabled', true)
                    .text('Processing...')
                    .on('click', function () {
                        var $this = $(this),
                            data = $this.data();
                        $this
                            .off('click')
                            .text('Abort')
                            .on('click', function () {
                                $this.remove();
                                data.abort();
                            });
                        data.submit().always(function () {
                            $this.remove();
                        });
                    });
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                autoUpload: false,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 999000,
                // Enable image resizing, except for Android and Opera,
                // which actually support image resizing, but fail to
                // send Blob objects via XHR requests:
                disableImageResize: /Android(?!.*Chrome)|Opera/
                    .test(window.navigator.userAgent),
                previewMaxWidth: 100,
                previewMaxHeight: 100,
                previewCrop: true
            }).on('fileuploadadd', function (e, data) {
                data.context = $('<div/>').appendTo('#files');
                $.each(data.files, function (index, file) {
                    var node = $('<p/>')
                        .append($('<span/>').text(file.name));
                    if (!index) {
                        node
                            .append('<br>')
                            .append(uploadButton.clone(true).data(data));
                    }
                    node.appendTo(data.context);
                });
            }).on('fileuploadprocessalways', function (e, data) {
                var index = data.index,
                    file = data.files[index],
                    node = $(data.context.children()[index]);
                if (file.preview) {
                    node
                        .prepend('<br>')
                        .prepend(file.preview);
                }
                if (file.error) {
                    node
                        .append('<br>')
                        .append($('<span class="text-danger"/>').text(file.error));
                }
                if (index + 1 === data.files.length) {
                    data.context.find('button')
                        .text('Upload')
                        .prop('disabled', !!data.files.error);
                }
            }).on('fileuploadprogressall', function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }).on('fileuploaddone', function (e, data) {
                $.each(data.result.files, function (index, file) {
                    if (file.url) {
                        var link = $('<a>')
                            .attr('target', '_blank')
                            .prop('href', file.url);
                        $(data.context.children()[index])
                            .wrap(link);
                    } else if (file.error) {
                        var error = $('<span class="text-danger"/>').text(file.error);
                        $(data.context.children()[index])
                            .append('<br>')
                            .append(error);
                    }
                });
            }).on('fileuploadfail', function (e, data) {
                $.each(data.files, function (index) {
                    var error = $('<span class="text-danger"/>').text('File upload failed.');
                    $(data.context.children()[index])
                        .append('<br>')
                        .append(error);
                });
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });
	</script>
	<!--<script src="js/validation-reg.js"></script>-->
	<script src="<?=base_url()?>assets/js/messages_pt_BR.js"></script>
</body>
</html>
