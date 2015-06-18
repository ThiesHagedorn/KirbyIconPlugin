# KirbyIconPlugin
Simple Plugin to integrate Font Awesome Icons in your kirby website.

##Installation
[Download](https://github.com/ThiesHagedorn/KirbyIconPlugin/archive/master.zip) the repository and copy the **icons** folder to **/site/plugins** of your site.

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