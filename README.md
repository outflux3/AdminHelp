AdminHelp module for ProcessWire
================

Processwire helper modules for managing site documentation in [ProcessWire CMS](http://processwire.com/).

Currently alpha state - please use with caution and report all errors.

## Instructions

There are 3 modules included with this: the master module holds the settings for the other 2.

This is a helper module which expects you to have already setup a hidden part of your page tree to establish your help documentation, using any template (e.g. 'help-doc') and a body field (ckeditor).

The help-doc template does not need to have an output template, as the module will only echo the body field inside the admin.

In addition this 'help-doc' template will require a template select field (separate module) which should be named template_select.

Once you have setup your docs template, template_select field and some help pages, you should install the AdminHelpTab module, then select the template(s) to show the docs on, as well as the root page of your docs.

At this point the 'Help' tab should show up for the relevant template (as specified with the template_select field), and show the help docs that have that template specified.

To have a global help page, which renders all of the help docs in an accordion view, you can install the ProcessAdminHelp module, which will setup a page to view the help docs, under setup.


## Example Help Tab

![Desc](https://raw.githubusercontent.com/outflux3/AdminDocsTab/master/images/admin_docs.jpg)