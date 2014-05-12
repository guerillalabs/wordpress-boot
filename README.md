# WordPress Bootstrap

This is a WordPress install with our default plugins, themes, and config setting to make starting a new site faster and easier.

## Use

1. Setup your local (or live) domains and directories where the site should be installed.
2. Create a new database for WordPress that you can connect to from this environment.
3. Download and insert the contents of this repo into your site's root directory.
4. Edit the `/dashboard/wp-config.php` file to have the proper database information (lines 38-69).
5. Load the site in your browser. It will ask you to name the site and setup a user, and it will then install to the database you designated.
6. In the WordPress Dashboard, go to Settings>General. You want to take the `/dashboard` part off of the end of the Site Address (URL) field. You may need to log out and back into your dashboard after this (the login can be reached at `/dashboard/wp-login.php`).
7. Go to the Settings>Permalinks page and choose your permalink structure.
8. Visit the Plugins page to activate and enter the license key for the appropriate plugins.
9. Go to the Appearance>Themes page to choose your base theme.

At a later point, we may provide a base sql file that has the setting already chosen, with some content pre-populated.