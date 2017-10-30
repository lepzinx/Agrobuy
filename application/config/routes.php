<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'anuncios';
$route['anuncios/visualizarproduto/(:num)'] = 'anuncios/visualizarproduto/$1';
$route['anuncios/editaranuncio/(:num)'] = 'anuncios/editaranuncio/$1';
$route['anuncios/alteraranuncio/(:num)'] = 'anuncios/alteraranuncio/$1';
$route['anuncios/deletarranuncio/(:num)'] = 'anuncios/deletaranuncio/$1';
$route['anuncios/pesquisa/p'] = 'anuncios/pesquisa';
$route['anuncios/pesquisa/(:num)'] = 'anuncios/pesquisa';
$route['anuncios/pesquisaav/p'] = 'anuncios/pesquisaav';
$route['anuncios/pesquisaav/(:num)'] = 'anuncios/pesquisaav';
$route['anuncios/categoria1/p'] = 'anuncios/categoria1';
$route['anuncios/categoria1/(:num)'] = 'anuncios/categoria1/$1';
$route['orcamentos/visualizarorcamento/(:num)'] = 'orcamentos/visualizarorcamento/$1';
$route['orcamentos/p'] = 'orcamentos';
$route['orcamentos/p/(:num)'] = 'orcamentos';
$route['usuarios/mensagens/(:num)'] = 'usuarios/mensagens/$1';
$route['usuarios/atualizarmensagens/(:num)'] = 'usuarios/atualizarmensagens/$1';
$route['usuarios/mandarmensagem/(:num)'] = 'usuarios/mandarmensagem/$1';
$route['usuarios/mandararquivo/(:num)'] = 'usuarios/mandararquivo/$1';
$route['dashboard/venda/p'] = 'dashboard/venda';
$route['dashboard/venda/(:num)'] = 'dashboard/venda';
$route['dashboard/meusanuncios/p'] = 'dashboard/meusanuncios';
$route['dashboard/meusanuncios/(:num)'] = 'dashboard/meusanuncios';
$route['dashboard/meusorcamentos/p'] = 'dashboard/meusorcamentos';
$route['dashboard/meusorcamentos/(:num)'] = 'dashboard/meusorcamentos';
$route['orcamentos/editarorcamento/(:num)'] = 'orcamentos/editarorcamento/$1';
$route['orcamentos/alterarorcamento/(:num)'] = 'orcamentos/alterarorcamento/$1';
$route['orcamentos/pesquisa/p'] = 'orcamentos/pesquisa';
$route['orcamentos/pesquisa/(:num)'] = 'orcamentos/pesquisa';
$route['dashboard/novadisputa/(:num)'] = 'dashboard/novadisputa/$1';
$route['dashboard/criardisputapagamento/(:num)'] = 'dashboard/criardisputapagamento/$1';
$route['dashboard/criardisputacompra/(:num)'] = 'dashboard/criardisputacompra/$1';
$route['dashboard/criardisputaarrependimento/(:num)'] = 'dashboard/criardisputaarrependimento/$1';
$route['dashboard/finalizardisputa/(:num)'] = 'dashboard/finalizardisputa/$1';
$route['dashboard/disputas/p'] = 'dashboard/disputas/$1';
$route['anuncios/iniciarnegociacao/(:num)'] = 'anuncios/iniciarnegociacao/$1';
$route['dashboard/c1'] = 'dashboard';
$route['dashboard/c1/(:num)'] = 'dashboard';
$route['dashboard/c2'] = 'dashboard';
$route['dashboard/c2/(:num)'] = 'dashboard';
$route['dashboard/c3'] = 'dashboard';
$route['dashboard/c3/(:num)'] = 'dashboard';
$route['dashboard/c4'] = 'dashboard';
$route['dashboard/c4/(:num)'] = 'dashboard';
$route['dashboard/c5'] = 'dashboard';
$route['dashboard/c5/(:num)'] = 'dashboard';
$route['dashboard/c6'] = 'dashboard';
$route['dashboard/c6/(:num)'] = 'dashboard';
$route['dashboard/o1'] = 'dashboard';
$route['dashboard/o1/(:num)'] = 'dashboard';
$route['dashboard/venda/v1'] = 'dashboard/venda';
$route['dashboard/venda/v1/(:num)'] = 'dashboard/venda';
$route['dashboard/venda/v2'] = 'dashboard/venda';
$route['dashboard/venda/v2/(:num)'] = 'dashboard/venda';
$route['dashboard/venda/v3'] = 'dashboard/venda';
$route['dashboard/venda/v3/(:num)'] = 'dashboard/venda';
$route['dashboard/venda/v4'] = 'dashboard/venda';
$route['dashboard/venda/v4/(:num)'] = 'dashboard/venda';
$route['dashboard/venda/v5'] = 'dashboard/venda';
$route['dashboard/venda/v5/(:num)'] = 'dashboard/venda';
$route['dashboard/venda/v6'] = 'dashboard/venda';
$route['dashboard/venda/v6/(:num)'] = 'dashboard/venda';
$route['dashboard/aceitarproposta/(:num)'] = 'dashboard/aceitarproposta/$1';
$route['dashboard/fecharnegocio/(:num)'] = 'dashboard/fecharnegocio/$1';
$route['dashboard/recusarproposta/(:num)'] = 'dashboard/recusarproposta/$1';
$route['dashboard/excluirproposta/(:num)'] = 'dashboard/excluirproposta/$1';
$route['dashboard/alterarnegociacao/(:num)'] = 'dashboard/alterarnegociacao/$1';
$route['dashboard/editarnegociacao/(:num)'] = 'dashboard/editarnegociacao/$1';
$route['dashboard/transportes/p'] = 'dashboard/transportes';
$route['dashboard/transportes/c'] = 'dashboard/transportes';
$route['dashboard/transportes/r'] = 'dashboard/transportes';
$route['dashboard/transportes/(:num)'] = 'dashboard/transportes';
$route['dashboard/criarCotacao/(:num)'] = 'dashboard/criarCotacao/$1';
$route['dashboard/aceitarCotacao/(:num)'] = 'dashboard/aceitarCotacao/$1';
$route['dashboard/recusarCotacao/(:num)'] = 'dashboard/recusarCotacao/$1';
$route['dashboard/recusarorcamento/(:num)'] = 'dashboard/recusarorcamento/$1';
$route['dashboard/aceitarexw/(:num)'] = 'dashboard/aceitarexw/$1';
$route['dashboard/aceitarddp/(:num)'] = 'dashboard/aceitarddp/$1';
$route['dashboard/aceitarcorreios/(:num)'] = 'dashboard/aceitarcorreios/$1';
$route['dashboard/aceitarbuscar/(:num)'] = 'dashboard/aceitarbuscar/$1';
$route['dashboard/aceitarentrega/(:num)'] = 'dashboard/aceitarentrega/$1';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
