DPC 12 Workshop Application
===========================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.

It includes:

* ZfcUser, for user registration and log in functionality
* PhlyContact, for a simple contact form

During the workshop, we will add a module, PhlyPeep, to the project.

Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use composer to install dependencies:

    cd my/project/dir
    git clone [uri TBD]
    cd dpc12workshop
    php composer.phar install

Grabbing PhlyPeep
-----------------
The module we will develop is called "PhlyPeep", and is a twitter clone. You can
import it as either a composer repository or as a git submodule.

To import it as a composer repository, edit the `composer.json` and add the
following entry to the "require" key:

    "phly/phly-peep": "dev-master"

Once done, execute the following:

    php composer.phar update

To import it as a git submodule, simply do the following:

    git submodule init
    git submodule update

(PhlyPeep is already present as a git submodule at this time.)

Permissions
-----------
Because this tutorial uses sqlite, make sure that the data directory is
read/write for your the user your web server runs under, as is the
application.db file underneath it.

Additionally, the mail functionality for the contact form initially uses a
"File" transport. For this to work, ensure that the data/mail/contact folder
has read/write permissions for the user your web server runs under.

One way to accomplish this (though insecure) is:

    chmod -R a+rwX data

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!
