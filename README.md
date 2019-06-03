# Easy Website Template

### The following things need to be changed or known in order for this template to be usable in a particular situation:

1. In `/global/global-include.php`, $master_css_path needs to be edited according to the actual path of the website
2. Any styles used site-wide should be defined in `/global/master-style.css`.
3. Each new page should be a copy of `/template`, where <title> should be changed to fit the page, and `page.css` defines page-specific styles.
4. See instructions in `.htaccess` for configuring the homepage URL.
5. `/global/header.php` & `/global/footer.php` are for site-wide headers and footers. Site content should go in `.body-wrapper`.
6. In `/template/index.php` as well as in any new pages that are created by duplicating `/template`, the relative path to `/global/global-include.php` needs to be adjusted to be the proper relative path based on the level of the folder. Currently, it's configured for surface level folders. Alternatively, for more complex websites, you can utilize `SITEROOT` from `global/common-include` for absolute URLs.
7. In `/global/master-style.css`, `.body-wrapper` needs to be edited for footer height (see the stylesheet for more instructions).
