TinyConfig
----------
TinyConfig is a extremly simple config loader.

Install
=======
Just use composer to install TinyConfig.

Add dependence:
```json
{
    "require": {
        "jlyu/tinyconfig": "0.0.1"
    }
}
```
and run `composer install`. Enjoy it!

Usage
=====
TinyConfig is so simple that it's usage is quite easy.

First, init a TinyConfig object:

    $c = new Jlyu\TinyConfig('/path/to/config/dir');

You can also pass a path to the construct function of TinyConfig to use a different config dir instead of the default value which is './conf';

All php file in the config dir will be loaded and all the config in one php file will be stored into a stdClass which will be accessed by the attribute named after config file name of TinyConfig object.

What's more, all the config file in the config dir must only return an array!

Just see the example we provided. A config file named 0-hello.php reuturn an array containing a k-v pair of foo to bar. After the TinyConfig inited, we could use `$c->hello->foo` to access the value bar.

The config php file should start with a number to indicate it's priority. And the larger the number is, the higher the priority are. So if you want to over write some defalut config, just create a file with the same name but start with a larger number.
