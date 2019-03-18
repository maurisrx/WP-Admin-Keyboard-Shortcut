jQuery( document ).ready( function( $ ) {
	var WPAKBSC_Plugins = {
		init: function()
		{
			this.plugin_shortcut();
		},

		plugin_shortcut: function()
		{
			var plugins = $( '.plugin-title' ).parent( 'tr' );
			
			$( window ).keypress( function( event ) {
				var plugin_el = $( WPAKBSC_Plugins.get_first_plugin_el( plugins, event.key ) );
				if ( typeof plugin_el[0] !== 'undefined' ) {
					$( this ).scrollTop( plugin_el.offset().top - 32 );
				}
			} );
		},

		get_first_plugin_el: function( plugins, letter )
		{
			var result = false;

			plugins.each( function( index, el ) {
				var plugin_name = $( el ).find( 'strong' ).text();
				var first_letter = plugin_name.substring( 0, 1 );
				first_letter = first_letter.toLowerCase();

				if ( letter == first_letter )
				{
					result = el;
					return false;
				}
			} );

			return result;
		}
	};

	WPAKBSC_Plugins.init();
} );