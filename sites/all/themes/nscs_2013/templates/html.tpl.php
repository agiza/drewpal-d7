<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="p:domain_verify" content="53c09a6b16843d9680c1f4daaf08c230" >

  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <!--[if lt IE 9]>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/html5shiv.js"></script>
  <![endif]-->
  <!-- /all in one seo pack -->
  <!-- Google Analytics Tracking by Google Analyticator 6.4.4.2: http://www.videousermanuals.com/google-analyticator/ -->
  <script type="text/javascript">
    var analyticsFileTypes = [''];
    var analyticsEventTracking = 'enabled';
  </script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-751563-1']);
          _gaq.push(['_addDevId', 'i9k95']); // Google Analyticator App ID with Google 
          
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
    <meta name="com.silverpop.brandeddomains" content="www.pages03.net,nscs.org,www.nscs.org" />
    <script src="http://content.mkt932.com/lp/static/js/iMAWebCookie.js?76319bf1-13101556bc8-85975e0cff1cb311ad2831d421d314b3&h=www.pages03.net" type="text/javascript"></script>

  <script type="text/javascript" src="//use.typekit.net/mhe1fvy.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <section id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </section>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
