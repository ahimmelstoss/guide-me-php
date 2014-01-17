installing composer into the home dir of the project:
`curl -sS https://getcomposer.org/installer | php`

moving it for global access:
`mv composer.phar /usr/local/bin/composer`
(then you can run `composer` instead of `php composer.phar`)

`composer install`
`composer update `

composer.json and composer.lock need to be committed to version control

like bundler in ruby -> add dependencies to composer.json, run `composer update` and they will be added to composer.lock

syntax:
{
  "require": {
      "vendorname/projectname": "1.0"
  }
}


