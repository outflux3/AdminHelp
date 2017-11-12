$(document).ready(function() {

	var helpTab = $('#_AdminHelpTabHelp'),
		helpContent = $('#AdminHelpTabHelp ul');

	var tabColor = helpContent.data('color');

	if(tabColor) {
		helpTab.css({color: '#'+tabColor});
	}

});