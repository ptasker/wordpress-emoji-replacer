# WordPress Emoji Replacer
Silly plugin to replace text strings with emojis. Adds a setting to the Customizer to setup replacement strings. String can be replaced with anything, but it's fun to use emojis.

Base concept is that is uses the_content filter and preg_replace().

_Steps to install:_

1. Install the plugin
2. Go to Appearance > Customizer
3. Click on Emojicon Plugin
4. Setup your replacements like so:

```
the :==>  (╯°□°)╯
foo :==>  ಠ_ಠ
WordPress :==> 😎
```

5. Select the replacement method (relace, before, after). This either prepends, appends or straight up replaces the item
6. Profit?

