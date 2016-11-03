<?php

/**
 *
 */
 
namespace EasyPHP\Configuration;

class Login {
  private static $AttemptsAllowed = 3;
  private static $SessionIndex = 'sidfid';
 
  public static function setMaxAttempts(int $limit) {
   self::$AttemptsAllowed = $limit;
  }
 
  public static function setSessionIndex($index) {
   self::$SessionIndex = $index;
  }
}

class Registration {
  private static $IpLimit = 3;
  private static $RequiresComplexPassword = true;
  private static $RequiresActivation = true;
  private static $ActivationMessage;
  private static $ActivationLink;
  
  public static function setActivationMessage($message) {
    if(strpos($message, '{activation_link}')) {
      if(!empty(self::$ActivationLink)) {
        self::$ActivationMessage = str_replace('{activation_link}', self::$ActivationLink, $message);
      } else { throw new \Exception('Call to setActivationMessage() - Undefined Activation Link in Object scope'); }
    } else { throw new \Exception('Call to setActivationMessage() - Undefined {activation_link} in string parameter.'); }
  }
  
  public static function generateActivationLink() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 28; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    self::$ActivationLink = $randomString;
  }
  
  public static function setIpLimit(int $limit) {
    self::$IpLimit = $limit;
  }
  
  public static function enableComplexPassword() {
    self::$RequiresComplexPassword = true;
  }
  
  public static function disableComplexPassword() {
    self::$RequiresComplexPassword = false;
  }
}
