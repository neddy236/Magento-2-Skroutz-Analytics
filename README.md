# Magento 2 Skroutz Analytics.


# Realease Info
Works with Magento 2.1.x, 2.2.x (haven't tested in 2.3.x);


### Features
Adds global script on site
http://prntscr.com/p1ww44

Send cart items along with order data on success page
http://prntscr.com/p1wwu6


### Installation
1. download module
2. Upload it to magento root directory
3. then from cli. bin/magento setup:upgrade
4. bin/magento setup:di:compile
5. bin/magento setup:static:content:deploy {your stores/themes}
6. bin/magento cache:flush

### Setup
Navigate to stores->configuration->Skytech->Skroutz Analytics
Adjust to your needs.

Account Id -> your account id from skroutz
Tracking Script -> http://prntscr.com/p1ws9t
Don't forget to add your account id on tracking script here http://prntscr.com/p1wsih

I made it this way so its easy to add logic to the script if skroutz updates in the future without the need of a developer and If skroutz adds need features I can have the account id to add it where I need.

##### This is the current script from skroutz
<!-- Add the Tracking Script and Connect to your Account -->


### Skroutz Docs
https://developer.skroutz.gr/analytics/


# Terms of use
**You are free to use this as you like. I do not take any responsibility if your site gets downtime, catastrophic failure or any other damage from this module. This module is under GNU Free Licence.**


