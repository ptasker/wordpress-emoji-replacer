# WordPress Emoji Replacer
Silly plugin to replace text strings with emojis. Adds a setting to the Customizer to setup replacement strings. String can be replaced with anything, but it's fun to use emojis.

Base concept is that is uses the_content filter and preg_replace().

_Steps to install:_

* Install the plugin
* Go to Appearance > Customizer
* Click on Emojicon Plugin
* Setup your replacements like so:
```
the :==>  (╯°□°)╯
foo :==>  ಠ_ಠ
WordPress :==> 😎
```
* Select the replacement method (relace, before, after). This either prepends, appends or straight up replaces the item
* Profit?

![alt text](http://i.imgur.com/izeeK20.jpg "Screenshot")


