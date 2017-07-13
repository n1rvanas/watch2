<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.51" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1499618196" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1499618196" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
<meta name="description" content="Часы TVG KM-468. Характеристики, фотографии, отзывы. Купить в Киеве с доставкой."/>
<meta name="keywords" content="TVG, KM-468, наручные часы ТГВ, LED часы TGV, армейские часы"/>
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance23" class="wb_element wb-menu"><ul class="hmenu menu-landing"><li><a href="#%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F" target="_self" title="Главная">Главная</a></li><li><a href="#description" target="_self" title="Описание">Описание</a></li><li><a href="#characteristic" target="_self" title="Характеристика">Характеристика</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance24" class="wb_element wb_element_picture"><a href="#%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F"><img alt="gallery/m" src="gallery_gen//ec48dd153a7011d1873cef7e408dedde_100x100.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance26" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance26");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance26").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance25" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">© 2017 <a href="http://army-watch.com.ua">army-watch.com.ua</a></p>
</div><div id="wb_element_instance27" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
