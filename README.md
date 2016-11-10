# Katie M Fritz, LLC on Craft CMS

## Installation
.   Run [Wamp64](http://download.cnet.com/WampServer-64-Bit/3000-10248_4-75544590.html) as administrator.
.   [Download Craft](https://craftcms.com/) and follow [installation instructions](https://craftcms.com/docs/installing). Put site in a new folder in `wamp64/www`.
.   Create `.gitignore` and initialize repo.
.   Add `'devMode' => true,` to `config/general.php`

## Config

.   Set timezone in General Settings > Timezone.
-   (Optional) Update user profile by clicking on empty image field in sidebar.
.   Install Field Manager and Sprout Fields plugins right away.
.   Configure [asset sources](https://craftcms.com/docs/assets). I create an `uploads` folder in the root and add subfolders and Asset Sources for major asset types depending on the site.
.   Import site-wide settings fields from `site-wide-settings.json`.
    .   Adjust asset fields as needed.
.   In `Settings > Globals`, create a set called `Site Info` and add the site-wide settings.
    .   (Optional) Add content to Globals

### Plugins

-   [Contact Form (Pixel and Tonic)](https://github.com/pixelandtonic/ContactForm)
-   [Field Manager (Engram Design)](https://github.com/engram-design/FieldManager)
-   [Sprout Fields (Barrel Strength Design)](http://sprout.barrelstrengthdesign.com/craft-plugins/fields)

## Theme Development

Rename `.html` files to `.twig` for better linting.

## Version Control & Deployment (notes to self)

Local machine - `dev` branch. Production is `prod`.

To back up WIP changes: `git push origin dev`.
To push to production: `git push origin dev:prod`.
