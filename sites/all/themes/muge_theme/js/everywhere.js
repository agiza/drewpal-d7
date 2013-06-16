(function ($) {

Drupal.behaviors.nscs2013 = {
  attach: function (context, settings) {
    // create flyouts
    Drupal.nscs2013.setup(context, settings);

    // Auto-hide non-active menu.
    Drupal.nscs2013.setActiveClassOnMenu(context);
  },
};

/**
 * NSCS Full Page Background utility functions.
 */
Drupal.nscs2013 = Drupal.nscs2013 || {

  /**
   * Set the right active state on the main and utility menus.
   */
  setActiveClassOnMenu: function(context) {
    if(!$('body', context).hasClass('front')) {
      if($('#main-menu .menu', context).has('.active-trail').length == 0) {
        $('#main-menu', context).addClass('hidden');
      }
      if($('#utility-menu .menu', context).has('.active-trail').length == 0) {
        $('#utility-menu', context).addClass('hidden');
      }
    }
  },
  /**
   * Activate the flyout navigation menus & selectBoxIt
   */
  setup: function(context, settings) {
    $('#top-level-menus, #sub-menu', context).once(
      function(){
        $(this).flexNav();
      }
    );
    $('#search-tools .form-select').selectBoxIt({autoWidth:false});
  }

};

})(jQuery);
