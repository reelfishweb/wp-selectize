jQuery( document ).ready( function ( $ ) {

    var options = [];

    /* Targets */
   $( '.media-toolbar select' ).selectize(options);
   $( '.wrap .form-table select' ).selectize(options);
   $( '.wrap .actions select' ).selectize(options);
   $( '#customize-theme-controls select' ).selectize(options);
   $( '#posts-filter .filter-items select' ).selectize(options);

} );
