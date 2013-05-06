# Slim-Boil

This is a Slim PHP boilerplate. It's intended to speed up the creation of simple Slim sites. It includes the following PHP libraries (installed via composer):

- Slim
- Slim Extras
- Twig

No database library is included by default. If you need one, check out [illuminate/database](https://packagist.org/packages/illuminate/database), [Doctrine](https://packagist.org/packages/doctrine/orm) or [MeekroDB](http://www.meekro.com/).

It also includes the following frontend libraries, (installed via bower):

- Fontawesome
- jQuery
- Bootstrap

# Installation

Installing this requires both [composer](http://getcomposer.org/) and [bower](http://bower.io/) (and by extension, [node](http://nodejs.org/)). Assuming you have all these tools installed, the steps are as follows:

    php composer.phar install
    bower install
    cd public/vendor/bootstrap && npm install && make && cd ../../..
