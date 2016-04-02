$(document).ready(function() {

	$('#_ProcessPageEditHelpModal').magnificPopup({
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
			}
		}
	});


	$('#PageEditTabs').find('a#_AdminHelpTabHelp').parent().addClass('offscreen');


});