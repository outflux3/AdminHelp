AdminHelp module for ProcessWire
================

Processwire helper modules for managing site documentation in [ProcessWire CMS](http://processwire.com/).

Currently beta state - please use with caution and report all errors or things that don't work as expected.

## Instructions

### Overview:
There are 3 modules included with this: the master module holds the settings for the other 2.

The Admin Help Setup module is capable of assisting in the creation of the fields, templates and pages needed for setting up documentation.

!Important
If you are planning on using the AdminHelpTab module, then you should install the FieldtypeTemplates prior to running setup.

### Getting Started

If you already setup a hidden part of your page tree for help documentation you can simply specify the templates and root page of the help section in the module settings.

Otherwise you can run the setup and it will auto-create the *template_select* field, *help-index* template and *help-doc* template, and the example help pages. Once created you can move those pages out of the root into any area you want, such as below a 'config' or 'settings' branch.

### Using the Help Tab

Once you have setup your docs template, template_select field and some help pages, you should install the AdminHelpTab module, then select the template(s) to show the docs on, as well as the root page of your docs.

At this point the 'Help' tab should show up for the relevant template (as specified with the template_select field), and show the help docs that have that template specified.

### Using the Process Admin Help

To have a global help page, which renders all of the help docs in an accordion view, you can install the ProcessAdminHelp module, which will setup a page to view the help docs, under setup.


## Help Setup Module (AdminHelp)

This is how the setup module looks before setup is completed:
![Desc](https://raw.githubusercontent.com/outflux3/AdminHelp/master/images/help_setup_new.jpg)

If you use the automated setup, it will create the field, templates and pages, and will auto-set the module configuration:
![Desc](https://raw.githubusercontent.com/outflux3/AdminHelp/master/images/help_setup_done.jpg)

## Example Help Tab (when using AdminHelpTab)

![Desc](https://raw.githubusercontent.com/outflux3/AdminHelp/master/images/help_tab.jpg)

## Admin Help page (ProcessAdminHelp)
This shows all help docs in accordion; it is capable of displaying child pages also but this is not currently implemented in the module;

![Desc](https://raw.githubusercontent.com/outflux3/AdminHelp/master/images/help_page_c.jpg)

Accordion opened:
![Desc](https://raw.githubusercontent.com/outflux3/AdminHelp/master/images/help_page_o.jpg)