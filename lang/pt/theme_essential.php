<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_essential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* Core */
$string['configtitle'] = 'Essential';
$string['pluginname'] = 'Essential';
$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>Essential</h2>
<p><img class=img-polaroid src="essential/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>About Essential</h3>
<p>Essential is a modified Moodle bootstrap theme which inherits styles and renderers from its parent theme.</p>
<h3>Parents</h3>
<p>This theme is based upon the Bootstrap theme, which was created for Moodle 2.5, with the help of:<br>
Stuart Lamour, Mark Aberdour, Paul Hibbitts, Mary Evans.</p>
<h3>Theme Credits</h3>
<p>Authors: Julian Ridden<br>
Contact: julian@moodleman.net<br>
Website: <a href="http://www.moodleman.net">www.moodleman.net</a>
</p>
</div></div>';

/* General */
$string['geneicsettings'] = 'Definições gerais';
$string['autohide'] = 'Incluir a funcionalidade Autohide';
$string['autohidedesc'] = 'A funcionalidade Autohide foi desenvolvida para tornar o Moodle menos intimidante. Quando o modo de edição é ativado, os ícones de edição apenas aparecerão quando o rato passar po cima do item respetivo.';
$string['editicons'] = 'Editar Ícones V2';
$string['editiconsdesc'] = 'É utilizada a fonte Awesome para apresentar os ícones de edição de uma forma mais colorida e mais contextualizados, nas páginas das disciplinas e nos blocos. Por favor, tenha em atenção que esta opção não é atualmente compatível com o Autohide.';
$string['customcss'] = 'CSS Personalizado';
$string['customcssdesc'] = 'Quaisquer regras de CSS que colocar nesta área de texto serão refletidas em todas as páginas, permitindo uma personalização mais simples deste tema.';
$string['footnote'] = 'Pé de página';
$string['footnotedesc'] = 'O que colocar nesta área de texto será apresentado no final de todas as páginas do Moodle.';
$string['invert'] = 'Inverter a barra de navegação';
$string['invertdesc'] = 'Inverte as cores do texto e da barra de navegação existente no topo, de branco ara preto e viceversa.';
$string['logo'] = 'Logótipo';
$string['logodesc'] = 'Por favor, carregue aqui um logótipo se o pretender adicionar ao cabeçalho.<br>Ao carregar um logótipo, irá eliminar o ícone paadrão e o nome que seria apresentado por padrão.';
$string['bootstrapcdn'] = 'FontAwesome a partir da CDN';
$string['bootstrapcdndesc'] = 'Se ativa, irá carregar a FontAwesome a partir da fonte online Bootstrap CDN. Deverá ativar esta opção se estiver com problemas na apresentação dos ícones Awesome.';
$string['copyright'] = 'Copyright';
$string['copyrightdesc'] = 'O nome da sua organização.';
$string['profilebarcustomtitle'] = 'Título do bloco personalizado da Barra do Perfil';
$string['profilebarcustomtitledesc'] = 'Título para o bloco personalizado da Barra do Perfil.';
$string['contactinfo'] = 'Infomação de Contacto';
$string['contactinfodesc'] = 'Introduza a sua informação de contacto';
$string['siteicon'] = 'Ícone do Sítio';
$string['siteicondesc'] = 'Não tem um logótipo? Introduza o nome do ícone que pretende utilizar. A lista pode ser consultada em <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">aqui</a>. Digite apenas o que aparece após "icon-". ';
$string['yourprofile'] = 'Tu';
$string['headerprofilepic'] = 'Apresentar a imagem do utilizador';
$string['headerprofilepicdesc'] = 'Se ativo, apresenta a foto do perfil do utilizador no cabeçalho da página.';
$string['layout'] = 'Utilizar um layout de curso padrão';
$string['layoutdesc'] = 'Este tema está definido para colocar ambas as colunas de blocos de lado. Se preferir utilizar o layout padrão do Moodle, pode ativar esta opção e terá de volta o enfadonho layout com três colunas.';
$string['perfinfo'] = 'Modo de apresentação da informação da performance';
$string['perfinfodesc'] = 'Muitos sítios não necessitam da informação detalhada acerca da performance (especialmente para ser apresentada a todos os utilizadores). Ao ativar esta opção, será apresentado de uma forma simples um conjunto de informação mínimo com informação acerca do carregamento da página.';
$string['perf_max'] = 'Detalhado';
$string['perf_min'] = 'Mínimo';
$string['visibleadminonly'] = 'Os blocos movidos para esta área só serão vistos pelos administradores';
$string['backtotop'] = 'Regressar ao topo';

/* CustomMenu */
$string['custommenuheading'] = 'Menu Personalizado';
$string['custommenuheadingsub'] = 'Adicionar funcionalidades adicionais ao menu personalizado.';
$string['custommenudesc'] = 'Estas configurações permitem adicionar funcionalidades dinâmicas ao menu personalizado (também conhecido como menu Dropdown)';

$string['mydashboardinfo'] = 'Painel de utilizador personalizado';
$string['mydashboardinfodesc'] = 'Apresenta uma lista de funções comuns utilizadas peos utilizadores.';
$string['displaymydashboard'] = 'Apresentar Painel';
$string['displaymydashboarddesc'] = 'Apresenta o Painel com as hiperligações dos utilizadores no menu personalizado';

$string['mycoursesinfo'] = 'Lista dinâmica de disciplinas';
$string['mycoursesinfodesc'] = 'Apresenta uma lista dinâmica com as disciplinas onde o utilizador se encontra inscrito.';
$string['displaymycourses'] = 'Apresenta lista das minhas disciplinas';
$string['displaymycoursesdesc'] = 'Apresenta lista de disciplinas onde o utilizador se encontra inscrito';

$string['mycoursetitle'] = 'Terminologia';
$string['mycoursetitledesc'] = 'Altera a terminologia utilizada para identificar os "My Courses" no menu personalizado';
$string['mycourses'] = 'As minhas disciplinas';
$string['myunits'] = 'As minhas unidades';
$string['mymodules'] = 'Os meus módulos';
$string['myclasses'] = 'As minhas aulas';
$string['allcourses'] = 'Todas as disciplinas';
$string['allunits'] = 'Todas as unidades';
$string['allmodules'] = 'Todos os módulos';
$string['allclasses'] = 'Todas as aulas';
$string['noenrolments'] = 'Não está inscrito em nenhuma disciplina presentemente';

/* My Dashboard custommenu dropdown */
$string['mydashboard'] = 'O meu painel';

/* Navbar Seperator */
$string['navbarsep'] = 'Separador da barra de navegação';
$string['navbarsepdesc'] = 'Aqui pode-se alterar o tipo de separador apresentado na barra de navegação (breadcrumb)';
$string['nav_thinbracket'] = 'Sinal de maior (fino)';
$string['nav_doublebracket'] = 'Duplo sinal de maior (fino)';
$string['nav_thickbracket'] = 'Sinal de maior (grosso)';
$string['nav_slash'] = 'Barra inclinada';
$string['nav_pipe'] = 'Linha vertical';

/* Regions */
$string['region-side-post'] = 'Direita';
$string['region-side-pre'] = 'Esquerda';
$string['region-footer-left'] = 'Pé de página (Esquerda)';
$string['region-footer-middle'] = 'Pé de página  (Centro)';
$string['region-footer-right'] = 'Pé de página  (Direita)';
$string['region-hidden-dock'] = 'Oculto aos utilizadores';

/* Colours */
$string['colorheading'] = 'Definições de Cor';
$string['colorheadingsub'] = 'Defina as cores a utilizar no tema';
$string['colordesc'] = 'Aqui pode encontrar vários parâmetros que permitem alterar muitas das cores utilizadas neste tema.';

$string['themecolor'] = 'Cor do Tema';
$string['themecolordesc'] = 'What colour should your theme be.  This will change mulitple components to produce the colour you wish across the moodle site';
$string['themehovercolor'] = 'Theme Hover Colour';
$string['themehovercolordesc'] = 'What colour should your theme hovers be. This is used for links, menus, etc';
$string['footercolor'] = 'Footer Background Colour';
$string['footercolordesc'] = 'Set what colour the background of the Footer box should be.';
$string['footersepcolor'] = 'Footer Seperator Colour';
$string['footersepcolordesc'] = 'Seperators are lines used to seperate content.  Set their colour here.';
$string['footertextcolor'] = 'Footer Text Colour';
$string['footertextcolordesc'] = 'Set the colour you want your text to be in the footer.';
$string['footerurlcolor'] = 'Footer Link Colour';
$string['footerurlcolordesc'] = 'Set the colour for your linked text in the footer.';
$string['footerhovercolor'] = 'Footer Link Hover Colour';
$string['footerhovercolordesc'] = 'Set the colour for your linked text when hovered over in the footer.';
$string['footerheadingcolor'] = 'Footer Heading Colour';
$string['footerheadingcolordesc'] = 'Set the colour for block headings in the footer.';
$string['pagebackground'] = 'Page Background Image';
$string['pagebackgrounddesc'] = 'Upload your own background image.  This will be tiled in the background on all pages.  If none is uploaded a default image is used.';

/* Frontpage Content */
$string['frontcontentheading'] = 'Conteúdo da Página Inicial';
$string['frontcontentheadingsub'] = 'Adicione informação para os utilizadores à página inicial';
$string['frontcontentdesc'] = 'Permite adicionar uma área parametrizada no espaço entre o Slideshow e as zonas de Marketing com conteúdo parametrizado';

$string['usefrontcontent'] = 'Ativar o conteúdo da Página Inicial';
$string['usefrontcontentdesc'] = 'Se ativo, irá apresentar o conteúdo desta área de texto no espaço entre o Slideshow e as zonas de Marketing com conteúdo parametrizado.';

$string['frontcontentarea'] = 'Conteúdo da Página Inicial';
$string['frontcontentareadesc'] = 'O que aqui for introduzido será apresentado a toda a largura, no espaço entre o Slideshow e as zonas de Marketing com conteúdo parametrizado.';

/* Slideshow */
$string['slideshowheading'] = 'Slideshow da Página Inicial';
$string['slideshowheadingsub'] = 'Slideshow dinâmico para a Página Inicial';
$string['slideshowdesc'] = 'Cria um slideshow dinâmico com até quatro diapositivos, para promoção de elementos importantes.';

$string['hideonphone'] = 'Slideshow em dispositivos móveis';
$string['hideonphonedesc'] = 'Escolher se pretende apresentar o slideshow em dispositivos móveis ou não';
$string['display'] = 'Mostrar';
$string['dontdisplay'] = 'Não mostrar';
$string['readmore'] = '[+] Ver mais';

$string['slideshowTitle'] = 'Slideshow';
$string['slideinfodesc'] = 'Introduza as definições do diapositivo.';
$string['slide1'] = 'Diapositivo Um';
$string['slide2'] = 'Diapositivo Dois';
$string['slide3'] = 'Diapositivo Três';
$string['slide4'] = 'Diapositivo Quatro';

$string['slidetitle'] = 'Título do diapositivo';
$string['slidetitledesc'] = 'Introduza um título descritivo para o diapositivo';
$string['slideimage'] = 'Imagem do Diapositivo';
$string['slideimagedesc'] = 'A imagem resulta melhor se utilizar transparências (tamanho máximo de 256px x 256px)';
$string['slidecaption'] = 'Legenda da imagem';
$string['slidecaptiondesc'] = 'Introduza o texto da legenda da imagem do primeiro diapositivo';
$string['slideurl'] = 'Hiperligação do diapositivo';
$string['slideurldesc'] = 'Introduza a hiperligação a utilizar na imagem do primeiro diapositivo';

/* Marketing Spots */
$string['marketingheading'] = 'Marketing Spots';
$string['marketinginfodesc'] = 'Enter the settings for your marketing spot.';
$string['marketingheadingsub'] = 'Three locations on the front page to add information and links';
$string['marketingheight'] = 'Height of Marketing Images';
$string['marketingheightdesc'] = 'If you want to display images in the Marketing boxes you can specify their hight here.';
$string['marketingdesc'] = 'This theme provides the option of enabling three "marketing" or "ad" spots just under the slideshow.  These allow you to easily identify core information to your users and provide direct links.';

$string['togglemarketing'] = 'Toggle Marketing Spot display';
$string['togglemarketingdesc'] = 'Choose if you wish to hide or show the three Marketing Spots.';


$string['marketing1'] = 'Marketing Spot One';
$string['marketing2'] = 'Marketing Spot Two';
$string['marketing3'] = 'Marketing Spot Three';

$string['marketingtitle'] = 'Title';
$string['marketingtitledesc'] = 'Title to show in this marketing spot';
$string['marketingicon'] = 'Icon';
$string['marketingicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "icon-".';
$string['marketingimage'] = 'Image';
$string['marketingimagedesc'] = 'This provides the option of displaying an image above the text in the marketing spot';
$string['marketingcontent'] = 'Content';
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketingbuttontext'] = 'Link Text';
$string['marketingbuttontextdesc'] = 'Text to appear on the button.';
$string['marketingbuttonurl'] = 'Link URL';
$string['marketingbuttonurldesc'] = 'URL the button will point to.';

/* Social Networks */
$string['socialheading'] = 'Redes Sociais';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/mycollege)';

$string['twitter'] = 'URL do Twitter';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/mycollege)';

$string['googleplus'] = 'URL do Google+';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e http://plus.google.com/107817105228930159735)';

$string['linkedin'] = 'URL do LinkedIn';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/mycollege)';

$string['youtube'] = 'URL do YouTube';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/mycollege)';

$string['flickr'] = 'URL do Flickr';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

$string['vk'] = 'URL do VKontakte';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/mycollege)';

$string['skype'] = 'Conta Skype';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';

$string['pinterest'] = 'URL do Pinterest';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';

$string['instagram'] = 'URL do Instagram';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';

$string['website'] = 'URL do Website';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';

/* Mobile Apps */
$string['mobileappsheading'] = 'Mobile Apps';
$string['mobileappsheadingsub'] = 'Link to your App to get your students using Mobiles';
$string['mobileappsdesc'] = 'Have you got a web app on the App Store or Google Play Store?  Provide a link here so your users can grab the apps online';

$string['android'] = 'Android (Google Play)';
$string['androiddesc'] = 'Prove a URL to your mobile App on the Google Play Store.  If you do not have one of your own maybe consider linking to the free official Moodle Mobile app.';

$string['ios'] = 'iPhone/iPad (App Store)';
$string['iosdesc'] = 'Prove a URL to your mobile App on the App Store.  If you do not have one of your own maybe consider linking to the free official Moodle Mobile app.';

/* iOS Icons */
$string['iosicon'] = 'iOS Homescreen Icons';
$string['iosicondesc'] = 'The them does provide a default icon for iOS and android homescreens. You can upload your custom icons if you wish.';

$string['iphoneicon'] = 'iPhone/iPod Touch Icon (Non Retina)';
$string['iphoneicondesc'] = 'Icon should be a PNG files sized 57px by 57px';

$string['iphoneretinaicon'] = 'iPhone/iPod Touch Icon (Retina)';
$string['iphoneretinaicondesc'] = 'Icon should be a PNG files sized 114px by 114px';

$string['ipadicon'] = 'iPad Icon (Non Retina)';
$string['ipadicondesc'] = 'Icon should be a PNG files sized 72px by 72px';

$string['ipadretinaicon'] = 'iPad Icon (Retina)';
$string['ipadretinaicondesc'] = 'Icon should be a PNG files sized 144px by 144px';

/* Google Analytics */
$string['analyticsheading'] = 'Google Analytics';
$string['analyticsheadingsub'] = 'Powerful analytics from Google';
$string['analyticsdesc'] = 'Here you can enable Google Analytics for your moodle site. You will need to sign up for a free account at the Google Analytics site (<a href="http://analytics.google.com" target="_blank">http://analytics.google.com</a>)';

$string['useanalytics'] = 'Enable Google Analytics';
$string['useanalyticsdesc'] = 'Enable or disable Google analytics functionaliy.';

$string['analyticsid'] = 'Your Tracking ID';
$string['analyticsiddesc'] = 'Enter the provided Tracking ID. Typically formatted like UA-XXXXXXXX-X';

$string['analyticsclean'] = 'Send Clean URLs';
$string['analyticscleandesc'] = 'This fantastic feature was created by <a href="https://moodle.org/user/profile.php?id=281671" target="_blank">Gavin Henrick</a> and <a href="https://moodle.org/user/view.php?id=907814" target="_blank">Bas Brands</a> and is implemented in this theme. Rather than standard Moodle URLs the theme will send out clean URLs making it easier to identify the page and provide advanced reporting. More information on using this feature and its uses can be <b><a href="http://www.somerandomthoughts.com/blog/2012/04/18/ireland-uk-moodlemoot-analytics-to-the-front/" target="_blank">found here</a></b>.';

/* Alerts */
$string['alertsheading'] = 'Alertas de Utilizadores';
$string['alertsheadingsub'] = 'Mostrar mensagens importantes aos utilizadores na Página Inicial';
$string['alertsdesc'] = 'Permite apresentar aos utilizadores um ou múltiplos alerta na Página Inicial, utilizando três estilos diferentes. Por favor, lembre-se de os desativar quando já não forem necessários.';

$string['enablealert'] = 'Ativar Alerta';
$string['enablealertdesc'] = 'Ativar ou desativar alertas';

$string['alert1'] = 'Primeiro Alert';
$string['alert2'] = 'Segundo Alerta';
$string['alert3'] = 'Terceiro Alerta';

$string['alerttitle'] = 'Título';
$string['alerttitledesc'] = 'Título/cabeçalho do alerta';

$string['alerttype'] = 'Nível';
$string['alerttypedesc'] = 'Defina o nível/tipo de aletra apropriado para melhor informar os utilizadores';

$string['alerttext'] = 'Texto do Alerta';
$string['alerttextdesc'] = 'Que texto pretende apresentar aos utilizadores no alerta';

$string['alert_info'] = 'Informação';
$string['alert_warning'] = 'Aviso';
$string['alert_general'] = 'Anúncio';

$string['ie7message'] = '<p id="ie7message">Desculpe, mas este sítio requer o <strong>Internet Explorer 8</strong> ou superior para ser apresentado e funcionar corretamente. Por favor, atualize o seu navegador através do Windows Update, ou <a href="http://windows.microsoft.com/pt-pt/internet-explorer/ie-10-worldwide-languages" target="_blank">escolha e descarregue a última versão aqui</a>. Se estiver a utilizar o IE8 ou superior, poderá ter o Modo de Compatibilidade ativo. Desligue-o para visualizar este sítio corretamente.</p>';
