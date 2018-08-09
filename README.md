# Smart-Tooltips [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)
Smart tooltips is a small utility allowing you to place comments or definitions on certain keywords used on your website, which avoids long texts or speeches

## Example of usage
For using Smart Tooltips, firstly you must call the Engine on the top of your file
```
<?php include_once ('Tooltip-Engine/Engine.php') ?>
```

after that
```
<?php
  $text = 'We are talking about [{"key":"SI", "text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit."}]';
  $engine = new Engine('text', $text);
?>
<?= $engine->render_tooltips()?>
```

:-)
