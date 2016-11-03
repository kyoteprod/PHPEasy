# PHPEasy - Basic Instillation Package
PHPEasy basic package contains a simple user base CMS that uses MVC methodologies and is easy to install. We use the latest and diverse routers and templating systems to help kick-start your application.

# Configuring Your PHPEasy CMS - Logic Layer
Once downloading EasyPHP you can get started straight away. Simply include the Autorun file in the root directory of PHPEasy.

```php
EasyPHP\Configuration\Registration::generateActivationMessage();
EasyPHP\Configuration\Registration::setActivationMessage('We fully support HTML. Use {activation_link} directed to /activate/');
EasyPHP\Configuration\Registration::setIpLimit(1); // default 3
EasyPHP\Configuration\Registration::disableComplexPassword(); // default enabled
EasyPHP\Configuration\Login::setMaxAttempts(5); // default 3
EasyPHP\Configuration\Login::setTimeOut(5000); // in milliseconds, default 2 seconds
```

# Configuring Your PHPEasy CMS - Presentation Layer
You can [create](#) or download themes that use [Bootstrap](http://getbootstrap.com/) and [JQuery](https://jquery.com/) dynamically. EasyPHP also uses [Smarty](http://www.smarty.net/) Templating.

```php
EasyPHP\Templates\Configuration::setTemplateDir('/templates/');
EasyPHP\Templates\Configuration::setLoginTemplate('{template_dir}/login.tpl');
EasyPHP\Templates\Configuration::setRegisterTemplate('{template_dir}/register.tpl');
EasyPHP\Presentation::Display(EasyPHP\Templates\Configuration::getLoginTemplate());
```
