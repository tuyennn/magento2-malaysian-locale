# Magento 2 Malaysia LocalePack ms_MY

Malaysia language Pack for Magento 2 Community Edition (Version 2.3.0)

The translation was made by Malaysian native speakers at their own discretion. The translation is not fully 100% completed. You are welcome to make contribution for changes or to rework the entire repository if deviating translations are to be introduced.

# Installation
 - Copy all files to  `/app/i18n/ghoster/ms_MY/`

From the Magento root directory, invoke the following commands:
```bash
php bin/magento setup:static-content:deploy -f ms_MY
php bin/magento setup:upgrade
rm -rf var/di
php bin/magento setup:di:compile
```

# Installation via Composer
```bash
composer require ghoster/mage2-locale-ms-my
php bin/magento setup:static-content:deploy ms_MY
```

# Add new phrases

To translate new phrases follow these steps:

### Get phrases from Magento

Run this in your Magento 2 installation:

```bash
php bin/magento i18n:collect-phrases -m > phrases.csv
```

### Compare phrases with old translation file

Copy the `phrases.csv` into this repository and run:

```bash
php check_new.php
```

This will output a new file `ms_MY_new.csv` which only contains the
phrases that are not yet translated in `ms_MY.csv`.

### Translate phrases

Now you should translate these phrases. Enter the translated phrase
in the *second* column.

### Note
Malaysian language in Magento has 2 code:

Nginx:  `ms_MY`
Apache: `ms_Latn_MY`

So you want to install for Apache server, just change the package as you want to.

### Copy new phrases and create a pull request

Copy the new phrases to `ms_MY.csv`.

**IMPORTANT**: sort the file alphabetically based on the first column, e.g. with LibreOffice and don't add line without double quote `"string"`

Now create a [new pull request](https://help.github.com/articles/creating-a-pull-request/) with
your changes!
