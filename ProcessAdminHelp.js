/* global $ */

$(document).ready(function () {
  var hash = window.location.hash.substring(1);
  var $selectedItem;
  var $body = $('html, body');
  var $list = $('#cbp-ntaccordion');

  $list.cbpNTAccordion();

  if (hash) {
    $selectedItem = $list.find('li[name="' + hash + '"]');

    if ($selectedItem.length) {
      $selectedItem.addClass('cbp-ntopen');

      setTimeout(function () {
        $body.scrollTop($selectedItem.offset().top);
      }, 500);
    }
  }

  $list.children().on('click.cbpNTAccordion', function () {
    var $this = $(this);

    if ($this.hasClass('cbp-ntopen')) {
      window.location.hash = $this.attr('name');
      $body.scrollTop($this.offset().top);
    } else {
      window.location.hash = '';
    }
  });

});
