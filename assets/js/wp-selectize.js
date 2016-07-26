jQuery(document).ready(function($) {

  var options = {
    create: true
  };

  $('.media-toolbar select').not('#WPLANG').selectize(options);
  $('.wrap .form-table select').not('#WPLANG').selectize(options);
  $('.wrap .actions select').not('#WPLANG').selectize(options);
  $('#customize-theme-controls select').not('#WPLANG').selectize(options);
  $('#posts-filter .filter-items select').not('#WPLANG').selectize(options);

});
