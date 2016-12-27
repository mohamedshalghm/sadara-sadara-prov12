# Welcome This is Mohammed Shalgham
happy to use my Package
This pacage For Public Resused Services in php

# how to use This Package

#installation
run this line of code to ur composer.json file
 'composer require Sadara/SadaraProv:dev-master'
 after fininshing installation 
 
 run this line 'php artisan vendor:publish'

#fixing to use

after finishing installation open 'config.app.php'
copy this line to provider
'Sadara\SadaraProv\SadaraProvider::class,'

and  this line to aliases
''Sadara'    =>Sadara\SadaraProv\SadaraFacades::class,'

#use inside ur code

Sadara::getFile() 'to read file content

Sadara::getLike($url) 'to read how many like of specified page on facebook
 
