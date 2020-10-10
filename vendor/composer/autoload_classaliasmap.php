<?php
return array (
  'aliasToClassNameMapping' => 
  array (
    'typo3\\cms\\lang\\languageservice' => 'TYPO3\\CMS\\Core\\Localization\\LanguageService',
    'typo3\\cms\\contexthelp\\controller\\contexthelpajaxcontroller' => 'TYPO3\\CMS\\Backend\\Controller\\ContextHelpAjaxController',
    'typo3\\cms\\sv\\abstractauthenticationservice' => 'TYPO3\\CMS\\Core\\Authentication\\AbstractAuthenticationService',
    'typo3\\cms\\sv\\authenticationservice' => 'TYPO3\\CMS\\Core\\Authentication\\AuthenticationService',
    'typo3\\cms\\core\\io\\pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
    'typo3\\cms\\core\\io\\pharstreamwrapperexception' => 'TYPO3\\PharStreamWrapper\\Exception',
    'typo3\\cms\\core\\tree\\tableconfiguration\\extjsarraytreerenderer' => 'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\ArrayTreeRenderer',
    'typo3\\cms\\core\\history\\recordhistory' => 'TYPO3\\CMS\\Core\\DataHandling\\History\\RecordHistoryStore',
    'typo3\\cms\\saltedpasswords\\salt\\abstractsalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\AbstractComposedSalt',
    'typo3\\cms\\saltedpasswords\\salt\\abstractcomposedsalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\AbstractComposedSalt',
    'typo3\\cms\\saltedpasswords\\salt\\argon2isalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
    'typo3\\cms\\saltedpasswords\\salt\\bcryptsalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
    'typo3\\cms\\saltedpasswords\\salt\\blowfishsalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BlowfishPasswordHash',
    'typo3\\cms\\saltedpasswords\\salt\\composedsaltinterface' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\ComposedPasswordHashInterface',
    'typo3\\cms\\saltedpasswords\\utility\\exensionmanagerconfigurationutility' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\ExtensionManagerConfigurationUtility',
    'typo3\\cms\\saltedpasswords\\exception\\invalidsaltexception' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\InvalidPasswordHashException',
    'typo3\\cms\\saltedpasswords\\salt\\md5salt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Md5PasswordHash',
    'typo3\\cms\\saltedpasswords\\salt\\saltfactory' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashFactory',
    'typo3\\cms\\saltedpasswords\\salt\\saltinterface' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashInterface',
    'typo3\\cms\\saltedpasswords\\salt\\pbkdf2salt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Pbkdf2PasswordHash',
    'typo3\\cms\\saltedpasswords\\salt\\phpasssalt' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PhpassPasswordHash',
    'typo3\\cms\\saltedpasswords\\saltedpasswordservice' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\SaltedPasswordService',
    'typo3\\cms\\saltedpasswords\\utility\\saltedpasswordsutility' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\SaltedPasswordsUtility',
  ),
  'classNameToAliasMapping' => 
  array (
    'TYPO3\\CMS\\Core\\Localization\\LanguageService' => 
    array (
      'typo3\\cms\\lang\\languageservice' => 'typo3\\cms\\lang\\languageservice',
    ),
    'TYPO3\\CMS\\Backend\\Controller\\ContextHelpAjaxController' => 
    array (
      'typo3\\cms\\contexthelp\\controller\\contexthelpajaxcontroller' => 'typo3\\cms\\contexthelp\\controller\\contexthelpajaxcontroller',
    ),
    'TYPO3\\CMS\\Core\\Authentication\\AbstractAuthenticationService' => 
    array (
      'typo3\\cms\\sv\\abstractauthenticationservice' => 'typo3\\cms\\sv\\abstractauthenticationservice',
    ),
    'TYPO3\\CMS\\Core\\Authentication\\AuthenticationService' => 
    array (
      'typo3\\cms\\sv\\authenticationservice' => 'typo3\\cms\\sv\\authenticationservice',
    ),
    'TYPO3\\PharStreamWrapper\\PharStreamWrapper' => 
    array (
      'typo3\\cms\\core\\io\\pharstreamwrapper' => 'typo3\\cms\\core\\io\\pharstreamwrapper',
    ),
    'TYPO3\\PharStreamWrapper\\Exception' => 
    array (
      'typo3\\cms\\core\\io\\pharstreamwrapperexception' => 'typo3\\cms\\core\\io\\pharstreamwrapperexception',
    ),
    'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\ArrayTreeRenderer' => 
    array (
      'typo3\\cms\\core\\tree\\tableconfiguration\\extjsarraytreerenderer' => 'typo3\\cms\\core\\tree\\tableconfiguration\\extjsarraytreerenderer',
    ),
    'TYPO3\\CMS\\Core\\DataHandling\\History\\RecordHistoryStore' => 
    array (
      'typo3\\cms\\core\\history\\recordhistory' => 'typo3\\cms\\core\\history\\recordhistory',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\AbstractComposedSalt' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\abstractsalt' => 'typo3\\cms\\saltedpasswords\\salt\\abstractsalt',
      'typo3\\cms\\saltedpasswords\\salt\\abstractcomposedsalt' => 'typo3\\cms\\saltedpasswords\\salt\\abstractcomposedsalt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\argon2isalt' => 'typo3\\cms\\saltedpasswords\\salt\\argon2isalt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\bcryptsalt' => 'typo3\\cms\\saltedpasswords\\salt\\bcryptsalt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BlowfishPasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\blowfishsalt' => 'typo3\\cms\\saltedpasswords\\salt\\blowfishsalt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\ComposedPasswordHashInterface' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\composedsaltinterface' => 'typo3\\cms\\saltedpasswords\\salt\\composedsaltinterface',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\ExtensionManagerConfigurationUtility' => 
    array (
      'typo3\\cms\\saltedpasswords\\utility\\exensionmanagerconfigurationutility' => 'typo3\\cms\\saltedpasswords\\utility\\exensionmanagerconfigurationutility',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\InvalidPasswordHashException' => 
    array (
      'typo3\\cms\\saltedpasswords\\exception\\invalidsaltexception' => 'typo3\\cms\\saltedpasswords\\exception\\invalidsaltexception',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Md5PasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\md5salt' => 'typo3\\cms\\saltedpasswords\\salt\\md5salt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashFactory' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\saltfactory' => 'typo3\\cms\\saltedpasswords\\salt\\saltfactory',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PasswordHashInterface' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\saltinterface' => 'typo3\\cms\\saltedpasswords\\salt\\saltinterface',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Pbkdf2PasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\pbkdf2salt' => 'typo3\\cms\\saltedpasswords\\salt\\pbkdf2salt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\PhpassPasswordHash' => 
    array (
      'typo3\\cms\\saltedpasswords\\salt\\phpasssalt' => 'typo3\\cms\\saltedpasswords\\salt\\phpasssalt',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\SaltedPasswordService' => 
    array (
      'typo3\\cms\\saltedpasswords\\saltedpasswordservice' => 'typo3\\cms\\saltedpasswords\\saltedpasswordservice',
    ),
    'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\SaltedPasswordsUtility' => 
    array (
      'typo3\\cms\\saltedpasswords\\utility\\saltedpasswordsutility' => 'typo3\\cms\\saltedpasswords\\utility\\saltedpasswordsutility',
    ),
  ),
);