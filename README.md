#Composer

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

#Doctrine

Encapsulate any use of Doctrine in classes that application calls (in order to swap out classes with an identical public API for the ones using Doctrine).

Creating the schema for the DB:
`php vendor/bin/doctrine orm:schema-tool:create`

If it needs to be updated:
`php vendor/bin/doctrine orm:schema-tool:drop --force`
`php vendor/bin/doctrine orm:schema-tool:create`

If functionality just needs to be updated:
`php vendor/bin/doctrine orm:schema-tool:update --force`

Once the schema is created, one way to add items into the DB is through the CLI:
`php create_topic.php ORM`