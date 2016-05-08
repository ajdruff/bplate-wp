readme-contributor.md
#Description

These instructions are intended for contributors who wish to help to maintain the [`BPLATE-WP`](https://github.com/ajdruff/bplate-wp)` project.

#How to Update the `BPLATE-WP` project




1. Clone the project to a directory on your development machine.

        git clone https://github.com/ajdruff/bplate-wp.git

2. Setup the Virtual Host 

    On your devlopment machine's web server, setup a virtual host (e.g.: `bplate-wp.com`) to point to the path to the `public_html` subfolder just created within the directory created by cloning the project. 

    **For example**, if my development machine uses [WAMP](http://www.wampserver.com) and I cloned the project into the `c:/wamp/www/bplate-wp-dev.com` directory , the path I'd use for my virtual host's web root would be `c:/wamp/www/bplate-wp-dev.com/bplate-wp/public_html`

2. Create a new branch for the update

    Checkout a new branch labeled `wp-x.y.x-v1` where x.y.z is the WordPress version of the update. v1 is the version of bplate-wp for that WordPress version. 
    
    For example:
    
            git checkout -b wp-4.5.2-v1
    
    
    
    If you modify the supporting files in the future without updating the actual WordPress version, simply update v1 to v2.



6. Install a WordPress database. The details of how to do that are specific to your development machine and won't be covered in this readme.
3. Make a copy of  `config/wp-config-db-sample.php` , renaming the copy to  `config/wp-config-db.php` 

        cp config/wp-config-db-sample.php  config/wp-config-db.php

4. Edit `config/wp-config-db.php` , replacing each value beginning with 'YOUR' with values that match your site. e.g.: `YOUR_DB_NAME`  with the name of the database you just created.
6. Visit your site's domain to start the WordPress installation process. Follow the prompts to complete the WordPress installation.

3. Once setup is complete, login to your site
4. If necessary, update WordPress to the latest version by clicking the 'Please update now' link
5. As a final update check, click the 'Dashboard' link, click 'Updates' if it appears and update any themes or plugins that require updating.

##Release

**Once WordPress is installed and updated:**

1. Commit to the new branch you created when you started. This should be something like: `wp-4.X.Y-v1`

    **Be sure to replace the X and Y with the correct release numbers.**

        git commit -a -m 'updated to WordPress 4.X.Y'

    Pull to update to the latest branches. Resolve any potential conflicts. If you receive conflicts, it may be better to rebase your working branch before proceeding with the following merges.

            git pull


2. Merge `wp-4.X.Y-v1` to the `dev` branch

        git checkout dev
        git merge --no-ff wp-4.X.Y-v1


3. Merge `dev` branch to the `master` branch


        git checkout master
        git merge --no-ff dev

4. Delete the branch you were working on but don't need any more because you merged it with dev and master. This is necessary so we don't get naming conflicts when we add our tag for this release.

        git branch -D wp-4.X.Y-v1


6. Tag the `master` branch with the name of your original branch, similar to : `wp-4.X.Y-v1`

        git tag -a wp-4.X.Y-v1 -m "WordPress update 4.X.Y"


7. Push the master, dev, and tags to origin (github)


        git push --tags "origin" master:master
        git push --tags "origin" dev:dev















