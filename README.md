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
    "name": "moyo/BriteVerify",
    "type": "joomlatools-installer",
    "url": "https://github.com/kedweber/com_briteverify.git"
}
```

and for the future resting place:

```json
{
    "name": "moyo/BriteVerify",
    "type": "joomlatools-installer",
    "url": "https://github.com/moyoweb/com_briteverify.git"
}
```

The require section should contain the following line:

```json
    "moyo/com_briteverify": "1.0.*",
```

Afterwards, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).
