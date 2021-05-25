# Overview

WebRotate 360 Product Viewer Standard Integration for Magento 2 allows integrating embedded 360-degree or 3D product views into standard gallery on product pages in Magento 2. The product views can be created using our free publishing software available on [webrotate360.com](http://www.webrotate360.com/products/webrotate-360-product-viewer.aspx). 

Click this image to see a quick preview on YouTube: 

[![Click to see a quick preview](https://img.youtube.com/vi/XgEHlmGYQYw/0.jpg)](https://www.youtube.com/watch?v=XgEHlmGYQYw)

Note that a separate WebRotate 360 Ad-hoc integration is also [available](https://github.com/webrotate360/magento2-adhoc). 

## Demo

Click this link to see a demo M2 storefront, showing a configurable product with two simple products via Color attribute:

https://magento.360-product-views.com/cassius-sparring-tank.html


## About WebRotate 360

WebRotate 360 ® are developers of 3D components and solutions for interactive eCommerce, eLearning, and digital marketing.


## Requirements

This extension supports both Magento Community and Enterprise editions. M1 extension for previous releases is available on [here](https://www.webrotate360.com/products/cms-and-e-commerce-plugins/plugin-for-magento.aspx?section=Download).


## Install via Composer

Please backup your Magento setup before proceeding with the installation.

If you have Composer installed, run these Magento CLI commands from the root of your Magneto installation:
```shell
composer require webrotate360/module-product-viewer-standard
php bin/magento module:enable WebRotate360_ProductViewerStandard --clear-static-content 
php bin/magento setup:upgrade
php bin/magento cache:flush
```


## Install from GitHub

Please backup your Magento setup before proceeding with the installation.

Download zip package by clicking "Clone or Download" and selecting Download ZIP at the top of this page. 

 * Create an /app/code/WebRotate360/ProductViewerStandard directory in your Magento installation.
 * Extract the contents of magento2-standard-master from the zip and copy or upload everything to /app/code/WebRotate360/ProductViewerStandard
 * Run these commands via Magento CLI  to install and enable the module:
 
 ```shell
php bin/magento module:enable WebRotate360_ProductViewerStandard --clear-static-content  
php bin/magento setup:upgrade
php bin/magento cache:flush
```


## Configure and test

Select Stores > Configuration and expand WebRotate 360 Product Viewer > Standard in your Magento admin. 

* Set desired viewer skin and gallery slide position.
* Select a test product in Magento catalog and create a new product attribute (as a text field) with the attribute code set to webrotate_path.
* Enter this demo config URL (hosted via [PixRiot](https://www.webrotate360.com/services/pixriot.aspx)) in the attribute field for selected product and save and refresh Magento caches.

 ```shell
https://s1.pixriot.com/433181dfa6/CMS/Magento/Example/Example.xml
 ```
 
 
 Alternatively, copy "sampleshoe" folder that is installed with the plugin (under WebRotate360/ProductViewerStandard/view/frontend/web/360assets) to a folder in your Magento installation and update the attribute field accordingly, e.g: 
 ```shell
 /my-360-views/sampleshoe/config.xml
 ```


## Create your own views

Download [WebRotate 360 Product Viewer software](http://www.webrotate360.com/products/webrotate-360-product-viewer.aspx) (SpotEditor) and publish a 360 or a multi-row 3D product view using your images. You may use our sample images located under additional resources in the previous link.

FTP upload is available inside the software or you may upload everything manually via FileZilla or a similar client. Consider using our optimized [PixRiot](https://www.webrotate360.com/services/pixriot.aspx) service to host and manage your spins online for unmatched convenience. You only need to upload a single folder located under published/360_assets of your published SpotEditor project for each product view. You may also publish multiple product views into a single 'published' location on your hard-drive and upload all product views at once.

Note the URL of the configuration file (.xml) in the uploaded folder and enter a relative URL of the configuration file on your server in the new attribute field (webrotate_path) for selected products in the Catalog.


## CDN and 'master config' (PRO)

You can create an extra product attribute with the attribute code set to webrotate_root to allow specifying an alternative location of the images for each product. The root value is a URL (e.g http://mycdn.com/360_assets/product1/) that can point to a folder with images on an external server. When it's configured, the module will prepend the webrotate_root URL to the relative image path stored in the viewer configuration xml for each image. This is valuable when you need to host the assets on a dedicated file server or CDN.

This feature can be also used to load multiple product views via a single 'master' config xml that you can set under the plugin settings via Master Config URL. If Master Config URL is configured in the module settings, you don’t need to specify the webrotate_path attribute in the catalog for the products that share the same config , i.e you would only use the webrotate_root parameter, pointing to the image assets. Note that this will work as long a the number of images and their file names are the same across selected product views. 
