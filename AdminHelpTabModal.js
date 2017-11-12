$(document).ready(function() {

	var helpModal = $('#_ProcessPageEditHelpModal');
	var popWidth = helpModal.data('mfp-width');

	helpModal.magnificPopup({
		type: 'inline',
		focus: '#name',
		closeBtnInside: true,

		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			},
			open: function() {
    			if(popWidth) $('.mfp-inline-holder .mfp-content').css({'max-width': popWidth+'px'});
  			},
		}
	});

	helpModal.click(function(e) {
		e.stopPropagation();
	});

	$('#PageEditTabs').find('a#_AdminHelpTabHelp').parent().addClass('offscreen');


});