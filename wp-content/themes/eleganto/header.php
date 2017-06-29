<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body id="blog" <?php body_class( get_theme_mod( 'smooth_scroll', 'smooth-scroll-on' ) ); ?>>
	<!-- Rating@Mail.ru counter -->
	<script type="text/javascript">
		var _tmr = window._tmr || (window._tmr = []);
		_tmr.push({id: "2911759", type: "pageView", start: (new Date()).getTime()});
		(function (d, w, id) {
			if (d.getElementById(id)) return;
			var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
			ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
			var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
			if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
		})(document, window, "topmailru-code");
	</script><noscript><div>
			<img src="//top-fwz1.mail.ru/counter?id=2911759;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
		</div></noscript>
	<!-- //Rating@Mail.ru counter -->

