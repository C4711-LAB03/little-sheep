## Change Log

Team membership:  Jeffrey Chou (Captain) & Li-Yan Tong (Mate)  
Team conventions: Allman notation, markdown for changelog  
Changelog format: [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) 

## *Version 0.2*

Release Date: Jan 26, 2018

## New Components
- Add find newest images function to Image.php model
- Add _cell.php view to define a single image loading parameter.
- Add Images.php to handle web site image data
- Add "picassos" Database
    
## Updated Components
- Update welcome.php view with Welcome.php controller logic to display table
  of 3 newest images.
- Change gallery.php model and Gallery.php view to dynamically load images as cells
  into a table.
- Link Images.php to web site with autoload.php
- Link "picassos" DB to web site with database.php and autoload.php

## Hot-Fixes
- Fixed file ignoring issue in Git

## *Version 0.1*

Release Date: Jan 26, 2018

## New Components
- Create about.php, gallery.php and welcome.php views from previous static html files
- Create Gallery.php controller and point to gallery view
- Create About.php controller and point to about view
- Add Code Igniter files to base static website project
    
## Updated Components
- Updated views/template.php to be an actual template for site
- Removed duplicating code from views/about.php, views/gallery.php, and views/welcome.php
- Updated the controllers About.php, Gallery.php, and Welcome.php to load the template
- Updated the page title in core/My_Controller.php
- Update menu links in following view files: about.php, gallery.php and welcome.php
- Modify Welcome.php Controller file to point to welcome view