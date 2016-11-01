# PHP Kata

## Starting a new PHP Kata

If you want to start a new kata:

Then use a 'create-project' command of composer for clonate this template

```sh
php composer.phar create-project monxu-rp/php-kata your/app-directory/say-hello-kata dev-master
```

Add your classes into *'src/Kata'* and your test cases on *'src/Tests'* and run your tests:

```sh
php bin/phpunit
```

Run test with coverage:

```sh
bin/phpunit --coverage-html tests-coverage
```

Enjoy the Kata!