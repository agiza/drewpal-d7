  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"></a>
  
  <?php if ($site_name): ?>
    <header>
      <?php if ($title): ?>
        <div id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </div>
      <?php else: /* Use h1 when the content title is empty */ ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php print render($page['header']); ?>

  <section id="menus">
  
    <h2 class="menu-button" id="toggle-top-menu"><?php print $main_menu_title; ?></h2>
    <nav id="top-level-menus" class="flexnav" data-breakpoint="768">
    <nav id="main-menu">
      <div class="toggle-button">
        <div class="arrow-up"><div class="arrow"></div></div>
      </div>
      <?php print render($main_menu); ?>
    </nav>

    <nav id="utility-menu">
      <?php print render($utility_menu); ?>
      <div class="social-icons">
        <a href="http://www.facebook.com/nscs94" class="facebook" title="Facebook"><span></span></a>
        <a href="http://twitter.com/NSCS" class="twitter" title="Twitter"><span></span></a>
        <a href="http://www.pinterest.com/NSCS" class="pinterest" title="Pinterest"><span></span></a>
        <a href="http://nscs.tumblr.com" class="tumblr" title="Tumblr"><span></span></a>
        <a href="http://www.instagram.com/nscs" class="instagram" title="Instagram"><span></span></a>
      </div>
      <div class="toggle-button">
        <div class="arrow-down"><div class="arrow"></div></div>
      </div>
    </nav>
    </nav>
    
    <?php if ($sub_menu_title): ?>
      <h2 class="menu-button" id="toggle-sub-menu"><?php print $sub_menu_title; ?></h2>
      <nav id="sub-menu" class="flexnav" data-breakpoint="768">
        <?php print render($sub_menu); ?>
      </nav>
    <?php endif; ?>

  </section>

  <?php print $messages; ?>

  <section id="content">
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </section>

  <section id="sidebar-fly-in">
    <div class="title"></div>
    <div class="body-wrapper">
      <div class="body"></div>
    </div>
    <?php print $return_button; ?>
  </section>

  <?php if ($page['sidebar_first']): ?>
    <section id="sidebar-first" class="column sidebar"><div class="section">
      <?php print render($page['sidebar_first']); ?>
    </div></section> <!-- /.section, /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <section id="sidebar-second" class="column sidebar"><div class="section">
      <?php print render($page['sidebar_second']); ?>
    </div></section> <!-- /.section, /#sidebar-second -->
  <?php endif; ?>

  <footer>
  <?php print render($page['footer']); ?>
  </footer>
