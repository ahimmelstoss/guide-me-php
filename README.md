#GuideMe...
...is an app that I collaborated on at the Flatiron School, linked <a href="http://guideme.herokuapp.com/">here</a> (repo <a href="https://github.com/BuilderBears/snowball">here</a>). 

I am rewriting it in PHP, using Slim, Doctrine ORM, and Savant templating.

Below, notes on configurations/technologies used (for my own reference).

###Composer

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

###Doctrine

Encapsulate any use of Doctrine in classes that application calls (in order to swap out classes with an identical public API for the ones using Doctrine).

Creating the schema for the DB:
`php vendor/bin/doctrine orm:schema-tool:create`

If it needs to be updated:
`php vendor/bin/doctrine orm:schema-tool:drop --force`
`php vendor/bin/doctrine orm:schema-tool:create`

If functionality just needs to be updated:
`php vendor/bin/doctrine orm:schema-tool:update --force`

Once the schema is created, one way to add items into the DB is through the CLI:
`php create_topic.php TOPICNAME`

###Slim

run local server:
`php -S localhost:3000`

###Get Savant into project via composer:
1. downloaded manually and added to vendor directory
2. required it in composer.json file as a repository (as a pear download normally, this is the way to do it with composer):
```
"repositories": [
  {
      "type": "package",
      "package": {
              "name": "savant/Savant3",
              "version": "3.0.1",
              "dist": {
                  "url": "http://phpsavant.com/get/Savant3-3.0.1.tgz",
                  "type": "tar"
              },
              "autoload": {
                  "classmap": ["./"]
              }
      }
    }
  ]
  ```

  ###Savant

  Pass any objects to a Savant class variable, which can then be rendered in the tpl.php file
  ```
  $tpl = new Savant3();
  $tpl->topics = $topics;
  $tpl->display('views/topics/index.tpl.php');
  ```