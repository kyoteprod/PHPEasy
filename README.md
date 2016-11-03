# PHPEasy - Basic Instillation Package
PHPEasy basic package contains a simple user base CMS that uses MVC methodologies and is easy to install. We use the latest and diverse routers and templating systems to help kick-start your application.

# Configuring Your PHPEasy CMS
Once downloading EasyPHP you can get started straight away. Simply include the Autorun file in the root directory of PHPEasy.

```php
EasyPHP\Configuration\Registration::generateActivationMessage();
EasyPHP\Configuration\Registration::setActivationMessage('Thank-you for Registering with our Application!\n\nYou can activate your account by following this link: <a href='yourdomain/{activation_link}'>Add styling to this btn!</a>\n\nThis supports full HTML');
EasyPHP\Configuration\Registration::setIpLimit(1);
EasyPHP\Configuration\Registration::disableComplexPassword();
EasyPHP\Configuration\Login::setMaxAttempts(5);
EasyPHP\Configuration\Login::setTimeOut(5000); // in milliseconds
```
