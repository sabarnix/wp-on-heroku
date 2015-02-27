# Wordpress on Heroku

using PHP/nginx + PostgreSQL + Memcached + Cloudinary + Sendgrid

## One Click Deploy to Heroku
[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/ya-s-u/wp-on-heroku/tree/production)
*required credit card

## for Developers
Clone the repository from Github

```
$ git clone git://github.com/ya-s-u/wp-on-heroku.git
```

Checkout branch

```
$ git checkout production
```

Remove ``wp-content/mu-plugins/force.php``

```
$ rm wp-content/mu-plugins/force.php
```

Develop!

Set config to Heroku

```
AUTH_KEY:                   xxxxxxxxxx
AUTH_SALT:                  xxxxxxxxxx
LOGGED_IN_KEY:              xxxxxxxxxx
LOGGED_IN_SALT:             xxxxxxxxxx
NONCE_KEY:                  xxxxxxxxxx
NONCE_SALT:                 xxxxxxxxxx
SECURE_AUTH_KEY:            xxxxxxxxxx
SECURE_AUTH_SALT:           xxxxxxxxxx
WP_CACHE:                   True
```

Deploy to Heroku

```
$ git push heroku production:master
```


## Contains

### 8-Addons
- Heroku Postgres
- PG Backups
- PostgreSQL Studio
- Sendgrid
- Cloudinary
- Memcached Cloud
- Newrelic
- Papertrail


### 25-Plugins
Default:Enable

- Batcache Manager
- Cloudinary
- Disable WordPress Core Updates
- Disable WordPress Plugin Updates
- Gigaom New Relic
- Google Analytics Dashboard for WP
- JP Markdown
- Memcached Cloud
- Resize images before upload
- SendGrid
- WordPress Gzip Compression
- WordPress HTTPS
- WordPress Importer

Default:Disable

- Acunetix Secure WordPress
- Akismet
- All In One SEO Pack
- Category Order and Taxonomy Terms Order
- Contact Form 7
- Google XML Sitemaps
- PuSHPress
- SyntaxHighlighter Evolved
- Ultimate TinyMCE
- WordPress Popular Posts
- WP-Optimize
- WP Social Bookmarking Light


### 10-Themes
- Hueman(http://alxmedia.se/themes/hueman/)
- Fukasawa(http://www.andersnoren.se/teman/fukasawa-wordpress-theme/)
- PORTFOLIO WORDPRESS THEME(https://www.gavick.com/wordpress-themes/portfolio,174)
- Griffin(https://wordpress.org/themes/griffin/)
- Pure(http://www.gt3themes.com/wordpress-themes/pure/)
- OnesieFree(http://justfreethemes.com/onesie-free-wordpress-theme/)
- DW Minion(http://www.designwall.com/wordpress/themes/dw-minion/)
- DW Timeline(http://www.designwall.com/wordpress/themes/dw-timeline/)
- Bushwick(https://wordpress.org/themes/bushwick/)
- ARCHITEKT(http://dessign.net/architekt-theme/)
