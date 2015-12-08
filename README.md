# KirbyIconPlugin
Simple Plugin to integrate Font Awesome Icons in your kirby website.

##Installation
[Download](https://github.com/ThiesHagedorn/KirbyIconPlugin/archive/master.zip) the repository. Create a **icons** folder in **/site/plugins** folder and copy the **icons.php** file to **/site/plugins/icons** folder of your site.

Install with composer
```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ThiesHagedorn/KirbyIconPlugin"
        }
    ],
    "require": {
        "thieshagedorn/kirby-icon-plugin": "*",
        "composer/installers": "~1.0"
    },
    "extra": {
        "installer-paths": {
            "site/plugins/{$name}/": ["type:kirby-plugin"]
        }
    },
    "minimum-stability": "dev"
}
```

Add the following line to your site header
```
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
```

More information about Font Awesome you will find [here](http://fortawesome.github.io/Font-Awesome/)

##Usage
Simple integration
```
(icon:camera)
```
Set size
you can use 2x to 5x
```
(icon:camera 2x)
```
Add other class name
```
(icon:camera 2x classname)
```
Create list with icons
```
* (icon:fa-check-square) first line
* (icon:fa-check-square) second line
* (icon:fa-check-square) third line
...
```

Add Fixed Width, Animated Icons and Rotated & Flipped from julien-gargot/master
```
fw
spin
90
180
270
horizontal
vertical
```
