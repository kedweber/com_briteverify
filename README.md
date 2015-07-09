# BriteVerify (com_briteverify)

## Description

The BriteVerify component serves in the backend CMS to use the services of [BriteVerify.com](http://www.briteverify.com/) to verify active and current emails. This of course is a paid for service, which assists webservers such as [MoyoWeb's CCK](http://www.moyoweb.com) running on Joomla and other CMSes that send bulk mails to mailing lists, such as the popular [WordPress](https://wordpress.org). When a bulk mail is generated, and it bounces off of non-existant emails, this increases the chance that a website will be blocked or **black-listed** from sending further emails. [BriteVerify.com](http://www.briteverify.com/) gives you the opportunity to run through your email-list and assure that all recipients are still active and valid, and thus, helps you avoid being black-listed.

This component was designed to assist the Cloudinary Component.

BriteVerify Component was developed by [Moyo Web Architects](http://moyoweb.nl).

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* Moyo Components
    * no specific component but works for com_cloudinary

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

For this local repository:

```json
{
    "name": "moyo/com_briteverify",
    "type": "joomlatools-installer",
    "url": "https://github.com/kedweber/com_briteverify.git"
}
```

or altertnatively from;

```json
{
    "name": "moyo/com_briteverify",
    "type": "joomlatools-installer",
    "url": "https://github.com/moyoweb/com_briteverify.git"
}
```

The require section should contain the following line:

```json
    "moyo/com_briteverify": "1.0.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).

