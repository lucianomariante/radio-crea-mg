<?php 
include_once('admin/includes/constantes.php'); 	

$vo_configuracoes_radio = searchConfiguracao();
?>	
	
<!DOCTYPE html>
<html lang="pt-BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    
<meta charset="UTF-8">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

<title>Rádio CRA-MG</title><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRamabhadra%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoiret%20One%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRamabhadra%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoiret%20One%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRamabhadra%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoiret%20One%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap" /></noscript>
<link rel="canonical" href="index.php" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:title" content="cra-mg - Agência Marketing Digital" />
<meta property="og:description" content="SUA RÁDIO CRA-MG Tecnologia, comunicação e integração Título do slide 1Lorem ipsum dolor sit amet consectetur adipiscing elit dolorClique aquiTítulo do slide 2Lorem ipsum dolor sit amet consectetur adipiscing elit dolorClique aquiTítulo do slide 3Lorem ipsum dolor sit amet consectetur adipiscing elit dolorClique aqui Anterior Próximo Envie seu Comentário Telefone: (31) 3218-4500 Negociações | E-mail: [&hellip;]" />
<meta property="og:url" content="cra-mg/index.html" />
<meta property="og:site_name" content="Agência Marketing Digital" />
<meta property="article:modified_time" content="2023-03-07T21:17:16+00:00" />
<meta property="og:image" content="wp-content/uploads/2023/03/CRA-DAS-GERAIS-PNG-1024x427.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:label1" content="Est. tempo de leitura" />
<meta name="twitter:data1" content="5 minutos" />
<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"cra-mg/","url":"cra-mg/","name":"cra-mg - Agência Marketing Digital","isPartOf":{"@id":"#website"},"primaryImageOfPage":{"@id":"cra-mg/#primaryimage"},"image":{"@id":"cra-mg/#primaryimage"},"thumbnailUrl":"wp-content/uploads/2023/03/CRA-DAS-GERAIS-PNG-1024x427.png","datePublished":"2023-02-16T11:52:37+00:00","dateModified":"2023-03-07T21:17:16+00:00","breadcrumb":{"@id":"cra-mg/#breadcrumb"},"inLanguage":"pt-BR","potentialAction":[{"@type":"ReadAction","target":["cra-mg/"]}]},{"@type":"ImageObject","inLanguage":"pt-BR","@id":"cra-mg/#primaryimage","url":"wp-content/uploads/2023/03/CRA-DAS-GERAIS-PNG.png","contentUrl":"wp-content/uploads/2023/03/CRA-DAS-GERAIS-PNG.png","width":1920,"height":800},{"@type":"BreadcrumbList","@id":"cra-mg/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Início","item":""},{"@type":"ListItem","position":2,"name":"cra-mg"}]},{"@type":"WebSite","@id":"#website","url":"","name":"Agência Marketing Digital","description":"Gerando resultado para sua empresa e aumentando suas vendas.","publisher":{"@id":"#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"pt-BR"},{"@type":"Organization","@id":"#organization","name":"Agência Marketing Digital","url":"","logo":{"@type":"ImageObject","inLanguage":"pt-BR","@id":"#/schema/logo/image/","url":"wp-content/uploads/2022/02/logo5.png","contentUrl":"wp-content/uploads/2022/02/logo5.png","width":1000,"height":500,"caption":"Agência Marketing Digital"},"image":{"@id":"#/schema/logo/image/"}}]}</script>

<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Feed para Agência Marketing Digital &raquo;" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para Agência Marketing Digital &raquo;" href="comments/feed/index.html" />
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='bdt-uikit-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit5829.css?ver=3.15.1' media='all' />
<link rel='stylesheet' id='ep-helper-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-helperd59f.css?ver=6.12.1' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min6a4d.css?ver=6.1.1' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.min68b3.css?ver=1' media='all' />
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
		
<link rel='stylesheet' id='hello-elementor-css' href='https://radioadm.org.br/novo/wp-content/uploads/elementor/css/post-3278.css?ver=1676321603' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='css/style.css' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='https://www.radiocramg.com.br/html/wp-content/uploads/elementor/css/post-711b7a7.css?ver=1678804774' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.minc141.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='wp-content/themes/hello-elementor/theme.minc141.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.mina3be.css?ver=3.11.5' media='all' />
<link rel='stylesheet' id='elementor-post-611-css' href='wp-content/uploads/elementor/css/post-6118ccf.css?ver=1678804687' media='all' />
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='wp-content/plugins/elementor-pro/assets/css/frontend-lite.mina5bd.css?ver=3.11.3' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/global23ba.css?ver=1678804689' media='all' />
<link rel='stylesheet' id='elementor-post-697-css' href='wp-content/uploads/elementor/css/post-697d403.css?ver=1678804771' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src='wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1' id='jquery-core-js'></script>
<script src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.1.1" />
<link rel='shortlink' href='index1c7e.html?p=697' />
<meta name="generator" content="Elementor 3.11.5; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">


<link rel="icon" href="wp-content/uploads/2021/10/cropped-logo-img-3-500x500-1-32x32.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2021/10/cropped-logo-img-3-500x500-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2021/10/cropped-logo-img-3-500x500-1-180x180.png" />
<meta name="msapplication-TileImage" content="wp-content/uploads/2021/10/cropped-logo-img-3-500x500-1-270x270.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
	
</head>
<body data-rsssl=1 class="page-template page-template-elementor_canvas page page-id-697 wp-custom-logo elementor-default elementor-template-canvas elementor-kit-611 elementor-page elementor-page-697" onload="atualizavolume(); musica_passando(); musica_passara();">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg> 
	
	<div data-elementor-type="wp-page" data-elementor-id="697" class="elementor elementor-697">
		<div class="elementor-element elementor-element-323bb43 e-con-full e-con" data-id="323bb43" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;:&quot;gradient&quot;}">
        
        <div class="container" style="display: flex; margin: 0px auto 0px auto; text-align: center">
        <div style="width: 50%; text-align: center"><img src="img/logo-radiocramg.png" width="250px" alt=""/></div>
        <div style="width: 50%; text-align: center; vertical-align: middle; padding-top: 10px"><img src="img/logo-cramgok.png" width="280px"  alt=""/></div>    
        
        </div>
        
        <div style="clear: both"></div>
            
			
		</div>
        
        <div class="container" style="position: relative; z-index: 9999; margin-top: -80px">
           
            
            <div class="row" style="padding: 50px 0px; border-radius: 30px; background-color: transparent; background-image: linear-gradient(90deg,#0F449B 0%,#0E87BA 100%);">
            
                
                        <div class="col-md-3 col-12">

                            <div class="row" style="color: white;">


                            <div class="col-12 col-md-2"></div>  

                            <div class="col-md-4 col-6">

				
                                    <a href="javascript:tocar_radio();">
                                        <div class="" style="color: white !important">
                                        <img style="width: 55px; vertical-align: middle" src="img/play.svg" alt=""/> </div>
                                     </a>
                                    <audio id="audio" src="<?= $vo_configuracoes_radio['dados'][0]['CFGSTREAM'];?>"></audio>
  



                            </div>
                            <div class="col-md-4 col-6">

                                          
                                                    <a href="javascript:parar_audio();">
                                                        <div class="" style="color: white !important">
                                                        <img style="width: 50px; vertical-align: middle" src="img/pause.svg" alt=""/> </div>
                                                    </a>
                                               
                                </div>

                                <div class="col-md-2 col-12"></div>  



                            </div>


                        </div>
                
    
                
                <div class="col-md-9 col-12">
                
                    <div class="row">
                        <div class="col-md-4 col-12">
                        
                            <div class="row">
                                    <div class="col-4 col-md-4">
												<div><a id="volume" href="javascript:baixar_volume();" style="display: flex;">
												<img style="width: 50px" src="img/volume.svg" alt=""/> </a></div>
				                        </div>
                        
                        <div class="col-8 col-md-8">
                            
                            
                        <div style="z-index: 99999;
                            position: relative;
                            color: white;
                            background: white;
                            width: 100%;
                            height: 9px;
                            border-radius: 20px;
                            display: flex;
                            vertical-align: middle;
                            margin: 21px 0px 0px -35px;" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="34" aria-valuetext="">
                            </div>
                            
                                <div class="elementor-progress-bar" data-max="34">
                                    <span class="elementor-progress-text" style="display: flex;"></span>
								</div>
                        </div>	
                    </div>
                    </div>
                    
                        <div class="col-md-4 col-6">
                        
                        <div class="" data-id="2c3bf34" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="" data-id="5c9c974" data-element_type="widget" data-widget_type="heading.default">
								<div class="" style="color: white !important; padding-left: 20px">
								
								<div class="font-weight-bold">No Ar:</div> 
								<div id="no_ar_conteiner" class="" style="font-size: 16px">
									<div style="font-size: 13px">
										<div id="musica_no_ar">Programação</div>
										<div id="artista_no_ar"><div>Rádio CRA-MG</div></div>
									</div>
								</div>
								</div>			
							</div>
						</div>
                        </div>
                    
                    
                        <div class="col-md-4 col-6">
                        
                            <div class="" data-id="0cdf98f" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
							<div class="" data-id="54e4a80" data-element_type="widget" data-widget_type="heading.default">
								<div class="" style="color: white !important;">
									<div class="font-weight-bold">A Seguir:</div> 
									<div id="a_seguir_conteiner" class="" style="font-size: 16px">
										<div style="font-size: 13px">
											<div id="musica_a_seguir"><div>Hora Certa</div></div>
											<div id="artista_a_seguir"><div>Rádio TJMG</div></div>
										</div>
									</div>
								</div>			
							</div>
						    </div>
                        </div>
                </div>
                </div>
            
            </div>
        </div>
        
        
		
		
	<div style="" class="elementor-element elementor-element-3174d63 e-con-boxed e-con" data-id="3174d63" data-element_type="container" id="home" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
		<div class="e-con-inner">
		<div class="elementor-element elementor-element-3de8db9 e-con-full e-con" data-id="3de8db9" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
			<div class="elementor-element elementor-element-f6d2a08 elementor-widget elementor-widget-heading" data-id="f6d2a08" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">SUA RÁDIO CRA-MG</h2> 
				</div>
			</div>
			<div class="elementor-element elementor-element-614e7b2 elementor-widget elementor-widget-text-editor" data-id="614e7b2" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<style>/*! elementor - v3.11.5 - 14-03-2023 */
				.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style> <p>Tecnologia, comunicação e</p><p>integração</p> 
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-3755b7d e-con-full e-con" data-id="3755b7d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
			<div class="elementor-element elementor-element-48016bc elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="48016bc" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
				<div class="elementor-widget-container">
					<style>/*! elementor-pro - v3.11.3 - 26-02-2023 */
					.elementor-slides .swiper-slide-bg{background-size:cover;background-position:50%;background-repeat:no-repeat;min-width:100%;min-height:100%}.elementor-slides .swiper-slide-inner{background-repeat:no-repeat;background-position:50%;position:absolute;top:0;left:0;bottom:0;right:0;padding:50px;margin:auto}.elementor-slides .swiper-slide-inner,.elementor-slides .swiper-slide-inner:hover{color:#fff;display:flex}.elementor-slides .swiper-slide-inner .elementor-background-overlay{position:absolute;z-index:0;top:0;bottom:0;left:0;right:0}.elementor-slides .swiper-slide-inner .elementor-slide-content{position:relative;z-index:1;width:100%}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:35px;font-weight:700;line-height:1}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:17px;line-height:1.4}.elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),.elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child){margin-bottom:30px}.elementor-slides .swiper-slide-inner .elementor-slide-button{border:2px solid #fff;color:#fff;background:transparent;display:inline-block}.elementor-slides .swiper-slide-inner .elementor-slide-button,.elementor-slides .swiper-slide-inner .elementor-slide-button:hover{background:transparent;color:inherit;text-decoration:none}.elementor--v-position-top .swiper-slide-inner{align-items:flex-start}.elementor--v-position-bottom .swiper-slide-inner{align-items:flex-end}.elementor--v-position-middle .swiper-slide-inner{align-items:center}.elementor--h-position-left .swiper-slide-inner{justify-content:flex-start}.elementor--h-position-right .swiper-slide-inner{justify-content:flex-end}.elementor--h-position-center .swiper-slide-inner{justify-content:center}body.rtl .elementor-widget-slides .elementor-swiper-button-next{left:10px;right:auto}body.rtl .elementor-widget-slides .elementor-swiper-button-prev{right:10px;left:auto}.elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner{display:none}@media (max-width:767px){.elementor-slides .swiper-slide-inner{padding:30px}.elementor-slides .swiper-slide-inner .elementor-slide-heading{font-size:23px;line-height:1;margin-bottom:15px}.elementor-slides .swiper-slide-inner .elementor-slide-description{font-size:13px;line-height:1.4;margin-bottom:15px}}</style> <div class="elementor-swiper">
					<div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInUp">
						<div class="swiper-wrapper elementor-slides">
							<div class="elementor-repeater-item-0236de2 swiper-slide"><div class="swiper-slide-bg"></div><div class="elementor-background-overlay"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"><div class="elementor-slide-heading">Destaque da Semana</div><div class="elementor-slide-description">CRA-MG recebe Cristiano Lopes para palestra sobre varejo.</div>
							<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=19uEgJKcb8qti4KhHfUkUCbEUiyfMBFSg')">
							<div class="elementor-button elementor-slide-button elementor-size-sm">Ouça Aqui</div>
							</a>
							</div></div></div>
							<div class="elementor-repeater-item-12c9e4b swiper-slide"><div class="swiper-slide-bg"></div><div class="elementor-background-overlay"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"><div class="elementor-slide-heading">Destaque de Fevereiro</div>
							<div class="elementor-slide-description">Lançamento rádio CRAMG</div>
							<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=19uEgJKcb8qti4KhHfUkUCbEUiyfMBFSg')">
							<div class="elementor-button elementor-slide-button elementor-size-sm">Ouça Aqui</div>
							</a>
							</div></div></div>	
						</div>
						<div class="swiper-pagination"></div>
						<div class="elementor-swiper-button elementor-swiper-button-prev">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg> <span class="elementor-screen-only">Anterior</span>
						</div>
						<div class="elementor-swiper-button elementor-swiper-button-next">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg> <span class="elementor-screen-only">Próximo</span>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<div class="elementor-element elementor-element-85b63a0 e-con-full e-con" data-id="85b63a0" data-element_type="container" id="sobre" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
	<div class="elementor-element elementor-element-fba49c0 elementor-widget__width-inherit elementor-widget elementor-widget-shortcode" data-id="fba49c0" data-element_type="widget" data-widget_type="shortcode.default">
	<div class="elementor-widget-container">
	<div class="elementor-shortcode"> <div data-elementor-type="section" data-elementor-id="916" class="elementor elementor-916">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-4e13fd17 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4e13fd17" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-no">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d08f1b3" data-id="d08f1b3" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<div class="elementor-element elementor-element-7cb003d elementor-widget elementor-widget-bdt-tabs" data-id="7cb003d" data-element_type="widget" data-widget_type="bdt-tabs.default">
	<div class="elementor-widget-container">
	<div class="bdt-tabs-area">
	<div id="bdt-tabs-7cb003d" class="bdt-tabs  bdt-tabs-default" data-settings="{&quot;id&quot;:&quot;bdt-tabs-7cb003d&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;hashTopOffset&quot;:70,&quot;hashScrollspyTime&quot;:1500,&quot;navStickyOffset&quot;:1,&quot;activeItem&quot;:2,&quot;linkWidgetId&quot;:&quot;7cb003d&quot;}">
	<div class="bdt-tab-wrapper ">
		<div class="bdt-tab bdt-tab-default bdt-child-width-expand" data-bdt-tab="connect: #bdt-tab-content-7cb003d; animation: bdt-animation-fade; duration: 200;" data-bdt-height-match="target: &gt; .bdt-tabs-item &gt; .bdt-tabs-item-title; row: false;">
			<div class="bdt-tabs-item">
				<a data-title="Pauta-1" class="bdt-tabs-item-title" id="bdt-tab-Pauta-1" data-tab-index="0" href="#">
					<div class="bdt-tab-text-wrapper bdt-flex-column">
						<div class="bdt-tab-title-icon-wrapper">
							<span class="bdt-button-icon-align-left">
							<svg aria-hidden="true" class="fa-fw e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg>
						</span>
						<span class="bdt-tab-text">Notícias do CRA-MG </span>
						</div>
					</div>
				</a>
			</div>
			<div class="bdt-tabs-item bdt-active">
				<a data-title="Pauta-2" class="bdt-tabs-item-title" id="bdt-tab-Pauta-2" data-tab-index="1" href="#">
					<div class="bdt-tab-text-wrapper bdt-flex-column">
						<div class="bdt-tab-title-icon-wrapper">
							<span class="bdt-button-icon-align-left">
								<svg aria-hidden="true" class="fa-fw e-font-icon-svg e-far-clock" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
							</span>
							<span class="bdt-tab-text">Especiais </span>
						</div>
					</div>
				</a>
			</div>
			<div class="bdt-tabs-item">
				<a data-title="Pauta-3" class="bdt-tabs-item-title" id="bdt-tab-Pauta-3" data-tab-index="2" href="#">
					<div class="bdt-tab-text-wrapper bdt-flex-column">
						<div class="bdt-tab-title-icon-wrapper">
							<span class="bdt-button-icon-align-left">
								<svg aria-hidden="true" class="fa-fw e-font-icon-svg e-far-address-book" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-68 304H48V48h320v416zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2z"></path></svg>
							</span>
							<span class="bdt-tab-text">Fique por dentro da Administração </span>
						</div>
					</div>
				</a>
			</div>
			<div class="bdt-tabs-item">
				<a data-title="Pauta-4" class="bdt-tabs-item-title" id="bdt-tab-Pauta-4" data-tab-index="3" href="#">
					<div class="bdt-tab-text-wrapper bdt-flex-column">
						<div class="bdt-tab-title-icon-wrapper">
							<span class="bdt-button-icon-align-left">
								<svg aria-hidden="true" class="fa-fw e-font-icon-svg e-far-address-book" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-68 304H48V48h320v416zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2z"></path></svg>
							</span>
							<span class="bdt-tab-text">Nova Aba </span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="bdt-switcher-wrapper">
	<div id="bdt-tab-content-7cb003d" class="bdt-switcher bdt-switcher-item-content">
	
	
	
	
	
	
	<div class="bdt-tab-content-item " data-content-id="pauta-1">
	<div>
	<div data-elementor-type="section" data-elementor-id="711" class="elementor elementor-711">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-5994bd76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5994bd76" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3553859c" data-id="3553859c" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<section class="elementor-section elementor-inner-section elementor-element elementor-element-3c765ba4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c765ba4" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26504289" data-id="26504289" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-1a5a78c7 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget elementor-widget-divider" data-id="1a5a78c7" data-element_type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
				<div class="elementor-divider">
					<span class="elementor-divider-separator">
						<span class="elementor-divider__text elementor-divider__element">Notícias do CRA-MG </span>
					</span>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-334a027 elementor-widget elementor-widget-image" data-id="334a027" data-element_type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
				
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a4944e7" data-id="1a4944e7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
				
					<div class="elementor-element elementor-element-225f7b55 elementor-posts--align-left elementor-posts--thumbnail-top elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="225f7b55" data-element_type="widget" data-settings="{&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:21,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;1&quot;,&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.custom">
					<div class="elementor-widget-container">
					  <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom" data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:12,&quot;load_method&quot;:&quot;numbers_and_prev_next&quot;,&quot;widget_id&quot;:&quot;225f7b55&quot;,&quot;post_id&quot;:2903,&quot;theme_id&quot;:3278,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
						<?php 			  
						$list = searchNoticias(3);		  
						//pre($list);
						foreach($list['dados'] as $value):    ?>
						<article style="padding: 40px 0 !important" id="post-21102" class="elementor-post elementor-grid-item ecs-post-loop post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
						<div data-elementor-type="loop" data-elementor-id="9" class="elementor elementor-9 post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4951f409 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4951f409" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cf41a23" data-id="2cf41a23" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3bbe1a56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bbe1a56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f07652" data-id="54f07652" data-element_type="column"  data-e-bg-lazyload=".elementor-element-populated">
														
														<img decoding="async" class="bdt-img swiper-lazy swiper-lazy-loaded" src="../admin/uploads/noticias/2457_1.png" alt="">																
														
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34bdd562" data-id="34bdd562" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="padding-left: 10px">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7839ed6 elementor-align-left elementor-widget elementor-widget-post-info" data-id="7839ed6" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-4cf5fd9 elementor-inline-item" itemprop="datePublished">																			
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
																			<?= formatar_data($value['NOTDATAPUBLICACAO']);?></span>																		
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-13f1cc1f elementor-widget__width-initial elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="13f1cc1f" data-element_type="widget" data-widget_type="theme-post-title.default">
																<div class="elementor-widget-container">
																<h1 class="elementor-heading-title elementor-size-default"><?= $value['NOTMANCHETE'];?></h1>		
																</div>
															</div>
															<div class="elementor-element elementor-element-74de5e18 elementor-widget elementor-widget-button" data-id="74de5e18" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">														
																		<span class="elementor-button-content-wrapper">	
																			<span class="elementor-button-text">
																				<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2')" id="play_materia" title="Ouvir Conteúdo">										
																					<img src="img/ouvir.png">
																				</a>
																				<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2&amp;export=download" title="Baixar Conteúdo">
																					<img src="img/baixar.png">
																				</a>
																				<a href="javascript:share_audio('2515')" title="Compartilhar Conteúdo">										
																					<img src="img/share.png">
																				</a>
																			</span>
																		</span>														
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
						</div>
						</article>
						<?php endforeach; ?>			
					</div>
					<!--
					<nav class="elementor-pagination" role="navigation" aria-label="Paginação">
				<span class="page-numbers prev">« Anterior</span>
	<span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Página</span>1</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/2/"><span class="elementor-screen-only">Página</span>2</a>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/3/"><span class="elementor-screen-only">Página</span>3</a>
	<span class="page-numbers dots">…</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/12/"><span class="elementor-screen-only">Página</span>12</a>
	<a class="page-numbers next" href="https://radioadm.org.br/novo/page/2/">Seguinte »</a>		</nav>
				-->

				</div>
			</div>
			</div>
			</div>
				
				
				
			</div>
		</div>
		
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	
	
	

	
	
	<div class="bdt-tab-content-item " data-content-id="pauta-2">
	<div>
	<div data-elementor-type="section" data-elementor-id="711" class="elementor elementor-711">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-5994bd76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5994bd76" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3553859c" data-id="3553859c" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<section class="elementor-section elementor-inner-section elementor-element elementor-element-3c765ba4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c765ba4" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26504289" data-id="26504289" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-1a5a78c7 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget elementor-widget-divider" data-id="1a5a78c7" data-element_type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
				<div class="elementor-divider">
					<span class="elementor-divider-separator">
						<span class="elementor-divider__text elementor-divider__element">Especiais</span>
					</span>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-334a027 elementor-widget elementor-widget-image" data-id="334a027" data-element_type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
				
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a4944e7" data-id="1a4944e7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
				
					<div class="elementor-element elementor-element-225f7b55 elementor-posts--align-left elementor-posts--thumbnail-top elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="225f7b55" data-element_type="widget" data-settings="{&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:21,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;1&quot;,&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.custom">
					<div class="elementor-widget-container">
					  <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom" data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:12,&quot;load_method&quot;:&quot;numbers_and_prev_next&quot;,&quot;widget_id&quot;:&quot;225f7b55&quot;,&quot;post_id&quot;:2903,&quot;theme_id&quot;:3278,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
						<?php 			  
						$list = searchNoticias(5);		  
						//pre($list);
						foreach($list['dados'] as $value):    ?>
						<article id="post-21102" class="elementor-post elementor-grid-item ecs-post-loop post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
						<div data-elementor-type="loop" data-elementor-id="9" class="elementor elementor-9 post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4951f409 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4951f409" data-element_type="section" >
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cf41a23" data-id="2cf41a23" data-element_type="column" >
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3bbe1a56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bbe1a56" data-element_type="section" >
												<div class="elementor-container elementor-column-gap-default">
													
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f07652" data-id="54f07652" data-element_type="column"  data-e-bg-lazyload=".elementor-element-populated">
														
														<img decoding="async" class="bdt-img swiper-lazy swiper-lazy-loaded" src="../admin/uploads/noticias/2457_1.png" alt="">																
													
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34bdd562" data-id="34bdd562" data-element_type="column" style="padding-left: 10px">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7839ed6 elementor-align-left elementor-widget elementor-widget-post-info" data-id="7839ed6" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-4cf5fd9 elementor-inline-item" itemprop="datePublished">																			
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
																			<?= formatar_data($value['NOTDATAPUBLICACAO']);?></span>																		
																		</li>
																	</ul> 
																</div>
															</div>
															<div class="elementor-element elementor-element-13f1cc1f elementor-widget__width-initial elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="13f1cc1f" data-element_type="widget" data-widget_type="theme-post-title.default">
																<div class="elementor-widget-container">
																<h1 class="elementor-heading-title elementor-size-default"><?= $value['NOTMANCHETE'];?></h1>		
																</div>
															</div>
															<div class="elementor-element elementor-element-74de5e18 elementor-widget elementor-widget-button" data-id="74de5e18" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">														
																		<span class="elementor-button-content-wrapper">	
																			<span class="elementor-button-text">
																				<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2')" id="play_materia" title="Ouvir Conteúdo">										
																					<img src="img/ouvir.png">
																				</a>
																				<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2&amp;export=download" title="Baixar Conteúdo">
																					<img src="img/baixar.png">
																				</a>
																				<a href="javascript:share_audio('2515')" title="Compartilhar Conteúdo">										
																					<img src="img/share.png">
																				</a>
																			</span>
																		</span>														
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
						</div>
						</article>
						<?php endforeach; ?>			
					</div>
					<!--
					<nav class="elementor-pagination" role="navigation" aria-label="Paginação">
				<span class="page-numbers prev">« Anterior</span>
	<span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Página</span>1</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/2/"><span class="elementor-screen-only">Página</span>2</a>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/3/"><span class="elementor-screen-only">Página</span>3</a>
	<span class="page-numbers dots">…</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/12/"><span class="elementor-screen-only">Página</span>12</a>
	<a class="page-numbers next" href="https://radioadm.org.br/novo/page/2/">Seguinte »</a>		</nav>
				-->

				</div>
			</div>
			</div>
			</div>
				
				
				
			</div>
		</div>
		
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	
	
	<div class="bdt-tab-content-item " data-content-id="pauta-3">
	<div>
	<div data-elementor-type="section" data-elementor-id="711" class="elementor elementor-711">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-5994bd76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5994bd76" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3553859c" data-id="3553859c" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<section class="elementor-section elementor-inner-section elementor-element elementor-element-3c765ba4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c765ba4" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26504289" data-id="26504289" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-1a5a78c7 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget elementor-widget-divider" data-id="1a5a78c7" data-element_type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
				<div class="elementor-divider">
					<span class="elementor-divider-separator">
						<span class="elementor-divider__text elementor-divider__element">Fique por dentro da Administração</span>
					</span>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-334a027 elementor-widget elementor-widget-image" data-id="334a027" data-element_type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
				
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a4944e7" data-id="1a4944e7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
				
					<div class="elementor-element elementor-element-225f7b55 elementor-posts--align-left elementor-posts--thumbnail-top elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="225f7b55" data-element_type="widget" data-settings="{&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:21,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;1&quot;,&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.custom">
					<div class="elementor-widget-container">
					  <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom" data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:12,&quot;load_method&quot;:&quot;numbers_and_prev_next&quot;,&quot;widget_id&quot;:&quot;225f7b55&quot;,&quot;post_id&quot;:2903,&quot;theme_id&quot;:3278,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
						<?php 			  
						$list = searchNoticias(3);		  
						//pre($list);
						foreach($list['dados'] as $value):    ?>
						<article id="post-21102" class="elementor-post elementor-grid-item ecs-post-loop post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
						<div data-elementor-type="loop" data-elementor-id="9" class="elementor elementor-9 post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4951f409 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4951f409" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cf41a23" data-id="2cf41a23" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3bbe1a56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bbe1a56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f07652" data-id="54f07652" data-element_type="column"  data-e-bg-lazyload=".elementor-element-populated">
														
														<img decoding="async" class="bdt-img swiper-lazy swiper-lazy-loaded" src="../admin/uploads/noticias/2457_1.png" alt="">																
														
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34bdd562" data-id="34bdd562" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="padding-left: 10px;">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7839ed6 elementor-align-left elementor-widget elementor-widget-post-info" data-id="7839ed6" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-4cf5fd9 elementor-inline-item" itemprop="datePublished">																			
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
																			<?= formatar_data($value['NOTDATAPUBLICACAO']);?></span>																		
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-13f1cc1f elementor-widget__width-initial elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="13f1cc1f" data-element_type="widget" data-widget_type="theme-post-title.default">
																<div class="elementor-widget-container">
																<h1 class="elementor-heading-title elementor-size-default"><?= $value['NOTMANCHETE'];?></h1>		
																</div>
															</div>
															<div class="elementor-element elementor-element-74de5e18 elementor-widget elementor-widget-button" data-id="74de5e18" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">														
																		<span class="elementor-button-content-wrapper">	
																			<span class="elementor-button-text">
																				<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2')" id="play_materia" title="Ouvir Conteúdo">										
																					<img src="img/ouvir.png">
																				</a>
																				<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2&amp;export=download" title="Baixar Conteúdo">
																					<img src="img/baixar.png">
																				</a>
																				<a href="javascript:share_audio('2515')" title="Compartilhar Conteúdo">										
																					<img src="img/share.png">
																				</a>
																			</span>
																		</span>														
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
						</div>
						</article>
						<?php endforeach; ?>			
					</div>
					<!--
					<nav class="elementor-pagination" role="navigation" aria-label="Paginação">
				<span class="page-numbers prev">« Anterior</span>
	<span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Página</span>1</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/2/"><span class="elementor-screen-only">Página</span>2</a>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/3/"><span class="elementor-screen-only">Página</span>3</a>
	<span class="page-numbers dots">…</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/12/"><span class="elementor-screen-only">Página</span>12</a>
	<a class="page-numbers next" href="https://radioadm.org.br/novo/page/2/">Seguinte »</a>		</nav>
				-->

				</div>
			</div>
			</div>
			</div>
				
				
				
			</div>
		</div>
		
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	
	<div class="bdt-tab-content-item " data-content-id="pauta-4">
	<div>
	<div data-elementor-type="section" data-elementor-id="711" class="elementor elementor-711">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-5994bd76 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5994bd76" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3553859c" data-id="3553859c" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<section class="elementor-section elementor-inner-section elementor-element elementor-element-3c765ba4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c765ba4" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26504289" data-id="26504289" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		<div class="elementor-element elementor-element-1a5a78c7 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget elementor-widget-divider" data-id="1a5a78c7" data-element_type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
				<div class="elementor-divider">
					<span class="elementor-divider-separator">
						<span class="elementor-divider__text elementor-divider__element">Nova Aba</span>
					</span>
				</div>
			</div>
		</div>
		<div class="elementor-element elementor-element-334a027 elementor-widget elementor-widget-image" data-id="334a027" data-element_type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
				
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a4944e7" data-id="1a4944e7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
				
					<div class="elementor-element elementor-element-225f7b55 elementor-posts--align-left elementor-posts--thumbnail-top elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts" data-id="225f7b55" data-element_type="widget" data-settings="{&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:21,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;1&quot;,&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.custom">
					<div class="elementor-widget-container">
					  <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom" data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:12,&quot;load_method&quot;:&quot;numbers_and_prev_next&quot;,&quot;widget_id&quot;:&quot;225f7b55&quot;,&quot;post_id&quot;:2903,&quot;theme_id&quot;:3278,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
						<?php 			  
						$list = searchNoticias(3);		  
						//pre($list);
						foreach($list['dados'] as $value):    ?>
						<article id="post-21102" class="elementor-post elementor-grid-item ecs-post-loop post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
						<div data-elementor-type="loop" data-elementor-id="9" class="elementor elementor-9 post-21102 podcast type-podcast status-publish has-post-thumbnail hentry tag-administracao tag-administracao-aplicada tag-decisoes tag-empresas series-podcast">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4951f409 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4951f409" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cf41a23" data-id="2cf41a23" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3bbe1a56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bbe1a56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f07652" data-id="54f07652" data-element_type="column"  data-e-bg-lazyload=".elementor-element-populated">
														
														<img decoding="async" class="bdt-img swiper-lazy swiper-lazy-loaded" src="../admin/uploads/noticias/2457_1.png" alt="">																
														
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34bdd562" data-id="34bdd562" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="padding-left: 10px">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7839ed6 elementor-align-left elementor-widget elementor-widget-post-info" data-id="7839ed6" data-element_type="widget" data-widget_type="post-info.default">
																<div class="elementor-widget-container">
																	<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
																		<li class="elementor-icon-list-item elementor-repeater-item-4cf5fd9 elementor-inline-item" itemprop="datePublished">																			
																			<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
																			<?= formatar_data($value['NOTDATAPUBLICACAO']);?></span>																		
																		</li>
																	</ul>
																</div>
															</div>
															<div class="elementor-element elementor-element-13f1cc1f elementor-widget__width-initial elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="13f1cc1f" data-element_type="widget" data-widget_type="theme-post-title.default">
																<div class="elementor-widget-container">
																<h1 class="elementor-heading-title elementor-size-default"><?= $value['NOTMANCHETE'];?></h1>		
																</div>
															</div>
															<div class="elementor-element elementor-element-74de5e18 elementor-widget elementor-widget-button" data-id="74de5e18" data-element_type="widget" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">														
																		<span class="elementor-button-content-wrapper">	
																			<span class="elementor-button-text">
																				<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2')" id="play_materia" title="Ouvir Conteúdo">										
																					<img src="img/ouvir.png">
																				</a>
																				<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=1Spl1-A90cCflINCnBs7BiQfYbk1tQwh2&amp;export=download" title="Baixar Conteúdo">
																					<img src="img/baixar.png">
																				</a>
																				<a href="javascript:share_audio('2515')" title="Compartilhar Conteúdo">										
																					<img src="img/share.png">
																				</a>
																			</span>
																		</span>														
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
						</div>
						</article>
						<?php endforeach; ?>			
					</div>
					<!--
					<nav class="elementor-pagination" role="navigation" aria-label="Paginação">
				<span class="page-numbers prev">« Anterior</span>
	<span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Página</span>1</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/2/"><span class="elementor-screen-only">Página</span>2</a>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/3/"><span class="elementor-screen-only">Página</span>3</a>
	<span class="page-numbers dots">…</span>
	<a class="page-numbers" href="https://radioadm.org.br/novo/page/12/"><span class="elementor-screen-only">Página</span>12</a>
	<a class="page-numbers next" href="https://radioadm.org.br/novo/page/2/">Seguinte »</a>		</nav>
				-->

				</div>
			</div>
			</div>
			</div>
				
				
				
			</div>
		</div>
		
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
	</div>
	
	
	
	</div>
	</div>
	<a href="#" id="bottom-anchor-7cb003d" data-bdt-hidden></a>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	<div class="elementor-element elementor-element-06b0726 e-con-full e-con" data-id="06b0726" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-44967c9 e-con-full e-con" data-id="44967c9" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="elementor-element elementor-element-35efc70 e-con-boxed e-con" data-id="35efc70" data-element_type="container" id="contato" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
	<div class="e-con-inner">
	<div class="elementor-element elementor-element-842f921 e-con-boxed e-con" data-id="842f921" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
	<div class="e-con-inner">
	<div class="elementor-element elementor-element-5e0ac7c elementor-widget elementor-widget-heading" data-id="5e0ac7c" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container">
	<h2 class="elementor-heading-title elementor-size-default">Envie seu Comentário</h2> </div>
	</div>
	<div class="elementor-element elementor-element-0673c72 elementor-button-align-start elementor-widget elementor-widget-form" data-id="0673c72" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Pr\u00f3ximo&quot;,&quot;step_previous_label&quot;:&quot;Anterior&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
	<div class="elementor-widget-container">
	<style>/*! elementor-pro - v3.11.3 - 26-02-2023 */
	.elementor-button.elementor-hidden,.elementor-hidden{display:none}.e-form__step{width:100%}.e-form__step:not(.elementor-hidden){display:flex;flex-wrap:wrap}.e-form__buttons{flex-wrap:wrap}.e-form__buttons,.e-form__buttons__wrapper{display:flex}.e-form__indicators{display:flex;justify-content:space-between;align-items:center;flex-wrap:nowrap;font-size:13px;margin-bottom:var(--e-form-steps-indicators-spacing)}.e-form__indicators__indicator{display:flex;flex-direction:column;align-items:center;justify-content:center;flex-basis:0;padding:0 var(--e-form-steps-divider-gap)}.e-form__indicators__indicator__progress{width:100%;position:relative;background-color:var(--e-form-steps-indicator-progress-background-color);border-radius:var(--e-form-steps-indicator-progress-border-radius);overflow:hidden}.e-form__indicators__indicator__progress__meter{width:var(--e-form-steps-indicator-progress-meter-width,0);height:var(--e-form-steps-indicator-progress-height);line-height:var(--e-form-steps-indicator-progress-height);padding-right:15px;border-radius:var(--e-form-steps-indicator-progress-border-radius);background-color:var(--e-form-steps-indicator-progress-color);color:var(--e-form-steps-indicator-progress-meter-color);text-align:right;transition:width .1s linear}.e-form__indicators__indicator:first-child{padding-left:0}.e-form__indicators__indicator:last-child{padding-right:0}.e-form__indicators__indicator--state-inactive{color:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-inactive-secondary-color,#fff)}.e-form__indicators__indicator--state-inactive object,.e-form__indicators__indicator--state-inactive svg{fill:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-active{color:var(--e-form-steps-indicator-active-primary-color,#39b54a);border-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active object,.e-form__indicators__indicator--state-active svg{fill:var(--e-form-steps-indicator-active-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed{color:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a);background-color:initial}.e-form__indicators__indicator--state-completed object,.e-form__indicators__indicator--state-completed svg{fill:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator__icon{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);font-size:var(--e-form-steps-indicator-icon-size);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;overflow:hidden;margin-bottom:10px}.e-form__indicators__indicator__icon img,.e-form__indicators__indicator__icon object,.e-form__indicators__indicator__icon svg{width:var(--e-form-steps-indicator-icon-size);height:auto}.e-form__indicators__indicator__icon .e-font-icon-svg{height:1em}.e-form__indicators__indicator__number{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;margin-bottom:10px}.e-form__indicators__indicator--shape-circle{border-radius:50%}.e-form__indicators__indicator--shape-square{border-radius:0}.e-form__indicators__indicator--shape-rounded{border-radius:5px}.e-form__indicators__indicator--shape-none{border:0}.e-form__indicators__indicator__label{text-align:center}.e-form__indicators__indicator__separator{width:100%;height:var(--e-form-steps-divider-width);background-color:#c2cbd2}.e-form__indicators--type-icon,.e-form__indicators--type-icon_text,.e-form__indicators--type-number,.e-form__indicators--type-number_text{align-items:flex-start}.e-form__indicators--type-icon .e-form__indicators__indicator__separator,.e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,.e-form__indicators--type-number .e-form__indicators__indicator__separator,.e-form__indicators--type-number_text .e-form__indicators__indicator__separator{margin-top:calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)}.elementor-field-type-hidden{display:none}.elementor-field-type-html{display:inline-block}.elementor-login .elementor-lost-password,.elementor-login .elementor-remember-me{font-size:.85em}.elementor-field-type-recaptcha_v3 .elementor-field-label{display:none}.elementor-field-type-recaptcha_v3 .grecaptcha-badge{z-index:1}.elementor-button .elementor-form-spinner{order:3}.elementor-form .elementor-button>span{display:flex;justify-content:center;align-items:center}.elementor-form .elementor-button .elementor-button-text{white-space:normal;flex-grow:0}.elementor-form .elementor-button svg{height:auto}.elementor-form .elementor-button .e-font-icon-svg{height:1em}.elementor-select-wrapper .select-caret-down-wrapper{position:absolute;top:50%;transform:translateY(-50%);inset-inline-end:10px;pointer-events:none;font-size:11px}.elementor-select-wrapper .select-caret-down-wrapper svg{display:unset;width:1em;aspect-ratio:unset;fill:currentColor}.elementor-select-wrapper .select-caret-down-wrapper i{font-size:19px;line-height:2}.elementor-select-wrapper.remove-before:before{content:""!important}</style> 
	<form class="elementor-form" method="post" name="form_comentario" action="enviar_comentario.php">
	<input type="hidden" name="post_id" value="697" />
	<input type="hidden" name="form_id" value="0673c72" />
	<input type="hidden" name="referer_title" value="cra-mg - Agência Marketing Digital" />
	<input type="hidden" name="queried_id" value="697" />
	<div class="elementor-form-fields-wrapper elementor-labels-above">
	<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
	<input size="1" type="text" name="vscomnome" id="vscomnome" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nome" required>
	</div>
	<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
	<input size="1" type="email" name="vscomemail" id="vscomemail" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="E-mail" required="required" aria-required="true">
	</div>
	<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
	<input size="1" type="text" name="vscomnome" id="vscomnome" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Assunto" required>
	</div>
	<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
	<textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="vscomtexto" id="vscomtexto" rows="4" placeholder="Mensagem" required> </textarea> </div>
	<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
	<button type="submit" class="elementor-button elementor-size-sm">
	<span>
	<span class=" elementor-button-icon">
	</span>
	<span class="elementor-button-text">Enviar</span>
	</span>
	</button>
	</div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="elementor-element elementor-element-f152933 e-con-boxed e-con" data-id="f152933" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}">
	<div class="e-con-inner">
	<div class="elementor-element elementor-element-1cd5630 e-con-full e-con" data-id="1cd5630" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
	<div class="elementor-element elementor-element-cb93f2c elementor-widget elementor-widget-image" data-id="cb93f2c" data-element_type="widget" data-widget_type="image.default">
	<div class="elementor-widget-container">
	<img decoding="async" width="800" height="223" src="wp-content/uploads/2023/02/CRAMG-1.fw_-1024x286.png.webp" class="attachment-large size-large wp-image-701" alt="" loading="lazy" srcset="wp-content/uploads/2023/02/CRAMG-1.fw_-1024x286.png.webp 1024w,wp-content/uploads/2023/02/CRAMG-1.fw_-300x84.png.webp 300w,wp-content/uploads/2023/02/CRAMG-1.fw_-768x214.png.webp 768w,wp-content/uploads/2023/02/CRAMG-1.fw_.png.webp 1430w" sizes="(max-width: 800px) 100vw, 800px" /> </div>
	</div>
	<div class="elementor-element elementor-element-54b7005 elementor-widget elementor-widget-text-editor" data-id="54b7005" data-element_type="widget" data-widget_type="text-editor.default">
	<div class="elementor-widget-container">
	<p>Telefone: (31) 3218-4500</p><p>Negociações | E-mail: imprensa@radiocramg.com.br</p> </div>
	</div>
	</div>
	<div class="elementor-element elementor-element-03841fd e-con-full e-con" data-id="03841fd" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
	<div class="elementor-element elementor-element-6ccb747 elementor-widget elementor-widget-heading" data-id="6ccb747" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container">
	<h2 class="elementor-heading-title elementor-size-default">Sobre nós</h2> </div>
	</div>
	<div class="elementor-element elementor-element-531e641 elementor-widget elementor-widget-text-editor" data-id="531e641" data-element_type="widget" data-widget_type="text-editor.default">
	<div class="elementor-widget-container">
	<p>Conselho Regional de Administração de Minas Gerais CNPJ: 16.863.664/0001-14 &#8211; Endereço: Av. Olegário Maciel, 1233 &#8211; Lourdes, BH &#8211; CEP: 30180-111 &#8211; Minas Gerais</p> </div>
	</div>
	</div>
	<div class="elementor-element elementor-element-41d730b e-con-full e-con" data-id="41d730b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
	<div class="elementor-element elementor-element-11a42fe elementor-widget elementor-widget-heading" data-id="11a42fe" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container">
	<h2 class="elementor-heading-title elementor-size-default">Expediente</h2> </div>
	</div>
	<div class="elementor-element elementor-element-deb1495 elementor-widget elementor-widget-text-editor" data-id="deb1495" data-element_type="widget" data-widget_type="text-editor.default">
	<div class="elementor-widget-container">
	<p>Diretor executivo de Comunicação:</p><p>Gerente de Imprensa:</p><p>Coordenador de Rádio e TV:</p><p>Coordenador Técnico:</p> </div>
	</div>
	</div>
	<div class="elementor-element elementor-element-0be9e49 e-con-full e-con" data-id="0be9e49" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
	<div class="elementor-element elementor-element-a9ce5e3 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="a9ce5e3" data-element_type="widget" data-widget_type="social-icons.default">
	<div class="elementor-widget-container">
	<style>/*! elementor - v3.11.5 - 14-03-2023 */
	.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#818a91;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#818a91}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}</style> <div class="elementor-social-icons-wrapper elementor-grid">
	<span class="elementor-grid-item">
	<a href="<?= $vo_configuracoes_radio['dados'][0]['CFGFACEBOOK'];?>" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-bebe17e" target="_blank">
	<span class="elementor-screen-only">Facebook</span>
	<svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg> </a>
	</span>
	<span class="elementor-grid-item">
	<a href="<?= $vo_configuracoes_radio['dados'][0]['CFGTWITTER'];?>" class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-51c40a8" target="_blank">
	<span class="elementor-screen-only">Twitter</span>
	<svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg> </a>
	</span>
	<span class="elementor-grid-item">
	<a href="<?= $vo_configuracoes_radio['dados'][0]['CFGINSTAGRAM'];?>" class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-5eabff6" target="_blank">
	<span class="elementor-screen-only">Instagram</span>
	<svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg> </a>
	</span>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>
<div class="copyright">
	<div class="center" align="center">			
		<span>
		<strong>Copyright 2023.</strong> AGÊNCIA RADIOWEB <a href="https://www.website.agenciaradioweb.com.br/" target="_blank" title="Agência Radioweb: Notícias e Jornalismo">
			<img src="img/rw.png" height="20px" alt="Agência Radioweb: Notícias e Jornalismo" border="0" >
			</a> - Desenvolvimento: <a href="http://www.teraware.com.br/" target="_blank" title="Teraware - ERP | E-commerce | Web Sites | Outsourcing | Projetos Especiais">
				<img src="img/signed-teraware.png" height="20px" alt="Teraware - ERP | E-commerce | Web Sites | Outsourcing | Projetos Especiais" border="0" >
			</a>
		</span>					
	</div>
</div>	
	
	<link rel='stylesheet' id='elementor-post-729-css' href='wp-content/uploads/elementor/css/post-729d291.css?ver=1678804772' media='all' />
	<link rel='stylesheet' id='elementor-post-916-css' href='wp-content/uploads/elementor/css/post-916ce0b.css?ver=1678804773' media='all' />
	<link rel='stylesheet' id='elementor-post-711-css' href='wp-content/uploads/elementor/css/post-711b7a7.css?ver=1678804774' media='all' />
	<link rel='stylesheet' id='ep-tabs-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-tabsd59f.css?ver=6.12.1' media='all' />
	<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.mina3be.css?ver=3.11.5' media='all' />
	
	<script id='rocket-browser-checker-js-after'>
		"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
	</script>
	<script id='rocket-preload-links-js-extra'>
		var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?(.*)wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/www.afroag.com","onHoverDelay":"100","rateThrottle":"3"};
		</script>
		<script id='rocket-preload-links-js-after'>
		(function() {
		"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("index.html")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("index.html")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
		}());
	</script>
	<script src='wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
	<script src='wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1' id='smartmenus-js'></script>
	<script src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script id='bdt-uikit-js-extra'>
		var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/www.afroag.com\/wp-admin\/admin-ajax.php","language":"pt","loadingmessage":"Sending user info, please wait...","unknownerror":"Unknown error, make sure access is correct!"};
		var ElementPackConfig = {"ajaxurl":"https:\/\/www.afroag.com\/wp-admin\/admin-ajax.php","nonce":"55c9e0f007","data_table":{"language":{"lengthMenu":"Show _MENU_ Entries","info":"Showing _START_ to _END_ of _TOTAL_ entries","search":"Search :","sZeroRecords":"No matching records found","paginate":{"previous":"Previous","next":"Next"}}},"contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"mailchimp":{"subscribing":"Subscribing you please wait..."},"search":{"more_result":"More Results","search_result":"SEARCH RESULT","not_found":"not found"},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
	</script>
	<script src='wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min5829.js?ver=3.15.1' id='bdt-uikit-js'></script>
	<script src='wp-content/plugins/elementor/assets/js/webpack.runtime.mina3be.js?ver=3.11.5' id='elementor-webpack-runtime-js'></script>
	<script src='wp-content/plugins/elementor/assets/js/frontend-modules.mina3be.js?ver=3.11.5' id='elementor-frontend-modules-js'></script>
	<script src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
	<script id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartilhar no Facebook","shareOnTwitter":"Compartilhar no Twitter","pinIt":"Fixar","download":"Baixar","downloadImage":"Baixar imagem","fullscreen":"Tela cheia","zoom":"Zoom","share":"Compartilhar","playVideo":"Reproduzir v\u00eddeo","previous":"Anterior","next":"Pr\u00f3ximo","close":"Fechar"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Celular","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Celular extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.11.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"container":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"landing-pages":true,"kit-elements-defaults":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/www.afroag.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":697,"title":"cra-mg%20-%20Ag%C3%AAncia%20Marketing%20Digital","excerpt":"","featuredImage":false}};
	</script>
	<script src='wp-content/plugins/elementor/assets/js/frontend.mina3be.js?ver=3.11.5' id='elementor-frontend-js'></script>
	<script src='wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-tabs.mind59f.js?ver=6.12.1' id='ep-tabs-js'></script>
	<script src='wp-content/plugins/bdthemes-element-pack/assets/js/common/helper.mind59f.js?ver=6.12.1' id='element-pack-helper-js'></script>
	<script src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina5bd.js?ver=3.11.3' id='elementor-pro-webpack-runtime-js'></script>
	<script src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
	<script src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script src='wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
	<script src='wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
	<script id='wp-i18n-js-after'>
		wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
	</script>
	
	<script src='wp-content/plugins/elementor-pro/assets/js/frontend.mina5bd.js?ver=3.11.3' id='elementor-pro-frontend-js'></script>
	<script src='wp-content/plugins/elementor-pro/assets/js/elements-handlers.mina5bd.js?ver=3.11.3' id='pro-elements-handlers-js'></script>

	<script src="js/libs/jquery-1.10.2.min.js"></script>
	<script src="js/libs/jquery.migrate-1.2.1.min.js"></script>
	<script src="js/libs/jquery.easing.1.3.js"></script>
	<script src="js/libs/jquery.mobile.customized.min.js"></script>
	<script src="js/libs/placeholdem.js"></script>
	<script src="js/libs/owl.carousel.min.js"></script>
	<script src="js/libs/hover.js"></script>
	<script src="js/libs/wait.js"></script>
	<script src="js/libs/jquery.fs.shifter.min.js"></script>
	<script src="js/libs/jquery.plugin.js"></script>
	<script src="js/libs/jquery.countdown.js"></script>
	
	<script>
	
		function checkVersion(){
	return "?id=" + Date();
}
	
		var musica_passando = function(){
	
	$.ajaxSetup({ cache: false });
	$w = 0;
	$.ajax({
		type: "GET",
		url: "radio.xml" + checkVersion(),
		dataType: "xml",
		success: function(xml) {
			$(xml).find('CurMusic').each(function(){
				if ($w == 0) {
					var titulo = $(this).find('Title').text();
					var musico = $(this).find('Artist').text();
					console.log(titulo);
					$('#musica_no_ar').html('');
					$('#artista_no_ar').html('');
					$('<div></div>').html(titulo).appendTo('#musica_no_ar');
					$('<div></div>').html(musico).appendTo('#artista_no_ar');
					//document.getElementById('audio_a_curtir').value = titulo + ' - ' + musico;
					$w++;
				}	
			});
		}
	});
	setTimeout(function(){ musica_passando(); },30000);//1000=a um segundo, altere conforme o necessario
}
		
var musica_passara = function(){
	
	$.ajaxSetup({ cache: false });
	$y = 0;
	$.ajax({
		type: "GET",
		url: "radio.xml" + checkVersion(),
		dataType: "xml",
		success: function(xml) {
			$(xml).find('Music').each(function(){
				if ($y == 0) {	
					var titulo = $(this).find('Title').text();
					var musico = $(this).find('Artist').text();
					$('#musica_a_seguir').html('');
					$('#artista_a_seguir').html('');
					$('<div></div>').html(titulo).appendTo('#musica_a_seguir');
					$('<div></div>').html(musico).appendTo('#artista_a_seguir');
				}
				$y++;	
			});
		}
	});
						
	setTimeout(function(){ musica_passara(); },30000);//1000=a um segundo, altere conforme o necessario
	
}
		
var voce_ouviu = function(){
	
	if($('#pagtocou_atual').val() <= 0) { 
		paginacao_tocou(1);
	}
	setTimeout(function(){ voce_ouviu(); },60000);//1000=a um segundo, altere conforme o necessario

}

function aumentar_volume() { vol(1); }

function baixar_volume() { vol(0); }
	
		function play_audio(origem){
			audio.src = origem;  
			audio.play();
		} 

		function tocar_radio() {
			//audio.src = $("#fonte").val();;  
			audio.play();	
		}

		function parar_audio() {
			audio.pause();	
		}
		function share_audio(audio){	
			window.open("app_curtir.php?id=" + audio, '_blank','width=600,height=550');
		}
		
	function vol(entrada) {
	$(this).mousedown(function(){ continua = 1; });
	$(this).mouseup(function(){ continua = 0; clearTimeout(ato); });
	$(this).mouseout(function(){ continua = 0; clearTimeout(ato); });
	
	ato = setTimeout(function(){ vol(entrada); },12);
	
	if(continua==1 & entrada!=2) {	
		if(entrada==0) {
			document.getElementById('controle_volume').stepDown(1);
		} else {
			document.getElementById('controle_volume').stepUp(1);
		}
	}

}

function atualizavolume() {
	//$('#indicador_volume').html('<label>Volume: </label> ' + document.getElementById('controle_volume').value);
	//$('#tempo_transcorrido').html(formata_tempo(audio.currentTime));
	
	audio.volume = document.getElementById('controle_volume').value * 0.01;
	setTimeout(function(){ atualizavolume(); },12);
}	
		
	</script>
</body>

</html>
