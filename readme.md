

#BPLATE-WP Readme

##Description

[`bplate-wp`](https://github.com/ajdruff/bplate-wp) is a boiler plate (website template) to install WordPress and was originally created to support easier installation for WordPress projects using the [Slide Rule](https://github.com/ajdruff/slide-rule) project.

The differences from the standard WordPress installation include:

* separating the configuration files into a directory above the web root. 
* includes separate folders for dev, live, and staging configuration. 
* removal of all plugins (hello dolly)
* custom default installation options (limited widgets, no Hello World post, no sample page, and the forcing of pretty links (permalinks).
* allows creation of separate git branches to include custom plugin distributions



#Installation:


1. Download and extract the package to your web server just above the web root (typically the web root directory is named `public_html` or `htdocs`)

    ```
    
    
    **Manually**
    
    Click the `download zip` link at [https://github.com/ajdruff/bplate-wp](https://github.com/ajdruff/bplate-wp) or visit [https://github.com/ajdruff/bplate-wp/archive/master.zip](https://github.com/ajdruff/bplate-wp/archive/master.zip) or [https://github.com/ajdruff/bplate-wp/archive/master.tar.gz](https://github.com/ajdruff/bplate-wp/archive/master.tar.gz) 
    
    **From a command line:**
    
        wget -qO- https://github.com/ajdruff/bplate-wp/archive/master.tar.gz | tar xvz

    
    ```



3. Copy the contents of `public_html` to your web root

        cp -r bplate-wp-master/public_html/* public_html/

3. Copy the config folder to a directory just above the web root

        cp -r bplate-wp-master/config ./


4. Cleanup, removing the downloaded project files.

        rm -rf bplate-wp-master


5.  Your directory should now look something like this :

    ```
    
        +---config
        +---public_html
            +---wp-admin
            +---wp-content
            +---wp-includes
    
    ```


6. Install a WordPress database.
3. Make a copy of  `config/wp-config-db-sample.php` , renaming the copy to  `config/wp-config-db.php` 

        cp config/wp-config-db-sample.php  config/wp-config-db.php

4. Edit `config/wp-config-db.php` , replacing each value beginning with 'YOUR' with values that match your site. e.g.: `YOUR_DB_NAME`  with the name of the database you just created.
6. Visit your site's domain to start the WordPress installation process. Follow the prompts to complete the WordPress installation.

#Updating

Because BPLATE-WP requires manual updating by the project's contributors, it inevitably lags behind the latest version of WordPress. However, this should not deter you from installing BPATE-WP and then just updating to the latest WordPress version the normal way via the WordPress dashboard.


1. Login to your WordPress site that was installed using bplate-wp.
2. Update WordPress to the latest version by clicking the 'Please update now' link
3. As a final update check, click the `Dashboard` link, click `Updates` if it appears and update any themes or plugins that require updating.


#Plugins & Themes

Although plugins are not included in the `master` branch distribution, you can checkout the various `plugin` branches that are available. Simply download the plugin branch you are interested in (or create your own) and then copy them over to the wp-content/plugins folder.


Theme distributions work the same way. You can replace the default themes with any of the themes located in the various theme branches.


#Faqs



##How do I modify whether a post gets created, which widgets are installed or which WordPress options are selected on installation?


Edit the file wp-content/install.php to modify the default installation options.

This file is run by WordPress on initial installation and upgrade instead of creating its normaly default posts (Hello World) for example.



#Contributors

<andrew@nomstock.com>


#Notes

##_live and _stage directories

`bplate-wp` contains (2) optional directories `_live` and `_stage`. These are directories you can use to hold your production and staging server configurations. The [Slide Rule](https://github.com/ajdruff/slide-rule) project uses these directories to configure in its installation script. If you don't use Slide Rule, you can safely delete them.

