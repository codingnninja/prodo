# Prodo

> A Laravel 5 Notification Package for detecting if debug is enabled in production.

## Installation

[PHP](https://php.net) 5.4+ , and [Composer](https://getcomposer.org) are required.


```
composer require "codingnninja/prodo @dev"

```

## How to use it?

```
You only need to add  

{!! Prodo::is_debug_on() !!} 

to a blade file that is used everywhere in your application such as the header.blade.php or app.blade.php (blade layout file).

Then paste 

'is_debug_on' => true,

bellow debug in config/app.php,in laravel, any time you set debug to true.


```

## Love this?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the news!

Don't forget to [follow me on twitter](https://twitter.com/ayovision)!

Thanks!
Ayobami.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
