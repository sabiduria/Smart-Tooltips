[![standard-readme compliant](https://img.shields.io/badge/readme%20style-standard-brightgreen.svg?style=flat-square)](https://github.com/RichardLitt/standard-readme)
# Smart-Tooltips [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)
Smart tooltips is a small utility allowing you to place comments or definitions on certain keywords used on your website, which avoids long texts or speeches

## Example of usage
For using Smart Tooltips, firstly you must call the Engine on the top of your file
```php
<?php include_once ('Tooltip-Engine/Engine.php') ?>
```

After that
```php
<?php
  // Only Text
  $text = 'We are talking about [{"key":"SI", "text":"System Informatics."}]';
  $engine = new Engine('text', $text);
?>
```
```php
<?php
  // With Image
	$text = 'Take a look to our [{"key":"IT Courses", "text":"The following are just some of the many jobs available in the IT industry: Computer Network Architect.", "image":"https://www.training.com.au/wp-content/uploads/career-in-technology-feature.png"}]';
	$engine = new Engine('text-image', $text);
?>
```
Display the result
```php
<?= $engine->render_tooltips()?>
```

## Output Image
![image 1](https://raw.githubusercontent.com/sabiduria/Smart-Tooltips/master/img/img1.jpg)

On mouse you have a smart tooltip :-)

![image 2](https://raw.githubusercontent.com/sabiduria/Smart-Tooltips/master/img/img2.jpg)

![image 4](https://raw.githubusercontent.com/sabiduria/Smart-Tooltips/master/img/img4.jpg)

Result with Image

![image 3](https://raw.githubusercontent.com/sabiduria/Smart-Tooltips/master/img/img3.jpg)

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE.md](LICENSE.md) file for details
