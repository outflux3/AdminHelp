<style>

.module-instructions {
	background: #F8F8F8;
	margin-left: -15px;
	margin-right: -15px;
	margin-top: 8px;
	margin-bottom: -15px !important;
	padding: 20px;
}

.module-instructions strong {
	font-weight: 700;
}

.module-instructions h2,
.module-instructions h3 {
	color: #0A5B62;
}

.module-instructions h2 {
	font-weight: 700;
}

.module-instructions em {
	font-style: italic;
}

.module-instructions ul {
    list-style-type: disc !important;
    padding-left: 35px;
    margin-bottom: 15px;
}

.module-instructions ul li {
    margin: .2em 0;
    display: list-item !important;
}

</style>

<div class="module-instructions">

<h2>Admin Help Modules</h2>

<p>This module consists of three submodules as follows:</p>

<ol>
	<li>
		<h3>Admin Help Setup [Class: AdminHelp] <span style="color:red;">YOU ARE HERE</span></h3>
		<p>This is where you specify the locations and templates for the help pages, so that the other 2 modules know where to look. You can also run the setup which will create templates, fields and pages to get things started. If you are planning on using <strong>Admin Help Tab</strong>, you need to install <strong>FieldtypeTemplates</strong> first. You can do so by copying the class name and proceeding to your module install screen and installing by class.</p>

		<p><em>The reason that this module allows setup to be run without the existence of the <strong>FieldtypeTemplates</strong> module is that not everyone will be using the Help Tab module with this – some users will only be using the process module.</em></p>

	</li>

	<li>
		<h3>Admin Help Tab [Class: AdminHelpTab]</h3>

		<p>This is an optional module that you can use to selectively show specific help page content on specific template's editor screens. <span style="color:red;">This module requires you to install <strong>FieldtypeTemplates</strong> in order that you can select which template to show help content on.</span></p>

		<p>For example, if you create a help doc for pages using the <strong>Basic Page</strong> template, then you need to select that template (basic-page) on your help doc, in order for the help tab to show up on pages using that template. If you have multiple help docs with the same template selected, then all of those help doc's content will be shown consecutively in the help tab.</p>

		<p>By default this module will create a new tab in your editor, which when clicked shows the content of your help doc. You can also optionally enable that content to show in a popup lightbox (using native Magnific Popup). The width of the lightbox is configurable on the AdminHelpTab's module config screen. In addition to being able to set the width of the popup, you can also specify a color for the help tab, as well as set your preferences for the tab to have an icon or not</p>
	</li>

	<li>
		<h3>Process Admin Help [Class: ProcessAdminHelp]</h3>

		<p>This is another optional module that serves the purpose of creating a central page in the admin for viewing the help documents. The page is created under the setup menu, but may be moved wherever is preferred. Each help doc is placed inside an accordion, that when clicked is scrolled to and users able to view the document.</p>
	</li>

</ol>

<h3>Basic Usage</h3>

<p>
	You should create your help docs in any way you need to, using images or any other features (lists, tables, image captions, strong, emphasis etc.). The module's CSS file should provide the CSS required to make those elements look correct within the boundaries of the help doc's div. If you find some markup does not look correct, please report it so that the CSS can be adjusted.
</p>

<h3>Additional Help and Resources</h3>

<p>If you have any additional questions, comments or issues, please submit an issue on Github, or use the PW forum.</p>

<ul>
	<li>Github Repository: <a href="https://github.com/outflux3/AdminHelp" target="_blank">https://github.com/outflux3/AdminHelp</a></li>
	<li>Processwire Forum Thread: <a href="https://processwire.com/talk/topic/11817-module-adminhelp/" target="_blank">https://processwire.com/talk/topic/11817-module-adminhelp/</a></li>
</ul>

</div>



