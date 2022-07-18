# mednet-block-patterns

# Purpose
This plugin will provide block patterns for the UBC Faculty of Medicine to use on the UBC CMS platform. The FoM is moving a portion of it's intranet, MedNet, from SharePoint to CMS. These layouts will be used exclusively on the MedNet website.

# Requirements
Design implementation will extend the CLF when possible.

Patterns will use core blocks and existing ones from UBC

Access can be provided for these blocks:
- https://github.com/ubc/ubc-tabs-block
- https://github.com/ubc/ubc-wiki-embed-block
- https://repo.code.ubc.ca/ctlt-plugins/advanced-table-block
- https://wordpress.org/plugins/accordion-blocks/

## Example of a block pattern implementation at UBC

https://repo.code.ubc.ca/ctlt-plugins/ubc-block-patterns


# Design Resources
__As of May 17 2022__
UBC MedNet Styles, Specs, and Components:
https://xd.adobe.com/view/5c0081c8-3bec-44ce-9840-957600ca0e82-0953/grid

Page designs:
https://xd.adobe.com/view/421d1120-ee14-4971-8996-b2f4e1ecbd1b-174e/grid

# Test site
https://med-fom-powershifter-22.sites.olt.ubc.ca/ 
This site can be used to test layouts inside of the UBC CMS. The content of a pattern can be copy and pasted from code view.

# Resources:
Read about CMS
https://cms.ubc.ca/
CMS Features
https://cms.ubc.ca/features/
Manual and support available at
https://support.cms.ubc.ca/

# CMS Theme

Built with Bootstrap 2
Designed with the UBC Common Look and Feel (CLF)
https://clf.ubc.ca/
Includes a google powered search input.
Get the CLF. The theme used on CMS is not the same as below. That is only available on the staging environment.


# Concerns

## Plugins

CMS does not add plugins. The only plugin that can be added is one that the Faculty of Medicine agrees to support long term.
The Faculty of Medicine does not have a dedicated support resource for CMS development. Any customization needs to be lightweight.
Custom plugin will need to adhere to normal WordPress coding standards, https://developer.wordpress.org/coding-standards/wordpress-coding-standards/.
If a plugin causes a security breach, there's no appointed team or the access to fix such issue. 
We have got tickets from clients saying they get spam emails from their website forms but we can't add more layers of security to the form.

## Files

CMS has a maximum filesize limit of 19mb.
The media library does not have any organizational features. No folders or file access restrictions.
All files in the media library are indexed by search engines.
Files that do not work on CMS will need to be identified and solved for. 

## Customization limitations

The server cannot be customized in any way outside of WordPress.
The theme cannot be customized in any way.
The robots file cannot be edited.
Content security policies cannot be implemented.
Content needs to be behind SSL
CORS policies cannot be created or edited.

## Design criteria

Design and layouts must as a minimum use responsive design following the CLF standards, https://clf.ubc.ca/design-specifications/. The layouts will need to perform on all popular devices and in the last two major versions of the following browsers:
iOS Safari
windows Chrome
Android Chrome
Mac Chrome
Mac Safari
Windows Edge
iOS Chrome
Windows Firefox
Content needs to utilize ARIA and semantic markup.
WCAG AA compliant.

## External resource usage

Do not use external resources. Libraries cannot be used that are hosted from an external CDN. The libraries will need to be added to the site or page they are being used.

## Coding

Any javascript implemented on a page must be documented and have a comment that links to the comment.
SASS can be used but the current theme uses LESS. The preference is to avoid the useage of preprocessors for writing CSS.
Any styles needed for the layout of blocks should be enqued for the user
Work must use GIT version control. If a plugin is created it will need to live inside of the CTLT organization at UBC.

## Multi User installation

CMS is a WordPress MU. The impact of this needs to be considered with any implementations.
Site performance

Any asset used must be optimized for the web. This includes referencing the item in an appropriate way. As an example with images it would mean using the srcset attribute and with script tags it would mean using the async attribute.
Content must be optimized for web delivery using standard and available tools. Additional cache or content policies cannot be added to the server.

## CMS Environments

### Production

Multiple servers behind a load balancer managed by CTLT.
No database access.

### Development

No database access.
Only accessible on the UBC VPN
Access needs to be provisioned.

### Test environments

Websites for testing are created by request on the production environment.
Development sites can be made on cms by the FoM Dean's Office or Digital Solutions.
Plugin repositories cannot be shared with external organizations. Local environments will not have the same configuration and plugins.