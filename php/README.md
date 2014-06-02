### PHP Leftronic API Package documentation

Start by downloading the most recent version of our PHP API at https://github.com/leftronic/leftronic/tree/master/php. You only need the `leftronic.php` file and the `CAcerts` folder. The `test.html` file and `test` folder are simple examples to push to a variety of widgets.

Create a class instance with your access key:

```php
$update = new Leftronic("YOUR_ACCESS_KEY");
```

Then use the various push... functions as follows:

```php
$update->pushNumber("yourNumberStream", 14600);
```

See https://www.leftronic.com/api/#php for full documentation.
