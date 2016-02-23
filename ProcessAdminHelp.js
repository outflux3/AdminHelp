/* global $ */

$(document).ready(function () {
  var hash = location.hash.substring(1);
  var $selectedItem;
  var $body = $('html, body');
  var $list = $('#cbp-ntaccordion');

  // call jquery plugin
  $list.cbpNTAccordion();

  // if there is a hash, get related item,
  // slide it up by adding specific class
  // and scroll to that item
  if (hash) {
    $selectedItem = $list.find('li[name="' + hash + '"]');

    if ($selectedItem.length) {
      $selectedItem.addClass('cbp-ntopen');

      // important: otherwise the item isn't expanded
      // and scrollTop() won't work
      setTimeout(function () {
        $body.scrollTop($selectedItem.offset().top);
      }, 500);
    }
  }

  // change hash depending on item
  $list.children().on('click.cbpNTAccordion', function () {
    var $this = $(this);

    // change hash and scroll to item
    if ($this.hasClass('cbp-ntopen')) {
      location.hash = $this.attr('name');
      $body.scrollTop($this.offset().top);
    } else {
      // reset hash
      location.hash = '';
    }
  });

});
