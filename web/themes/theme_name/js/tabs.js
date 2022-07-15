"use strict";

var tabs = function tabs($) {
  function tabsToggle() {
    var tabID = $(this).attr('data-tab');
    $(this).addClass('active').siblings().removeClass('active');
    $('#tab_' + tabID).addClass('active').siblings().removeClass('active');
  }

  Drupal.behaviors.tabsRequst = {
    attach: function attach(context) {
      $('.nav-tabs__btn', context).on('click', tabsToggle);
    }
  };
};

tabs(jQuery);