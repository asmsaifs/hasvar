<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit285c871ad950a075889034bcc10022d7
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\imagine\\' => 12,
            'yii\\gii\\' => 8,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'l' => 
        array (
            'luya\\contactform\\' => 17,
            'luya\\cms\\' => 9,
            'luya\\admin\\' => 11,
            'luya\\' => 5,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/nadar/yii2-imagine',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'luya\\contactform\\' => 
        array (
            0 => __DIR__ . '/..' . '/luyadev/luya-module-contactform/src',
        ),
        'luya\\cms\\' => 
        array (
            0 => __DIR__ . '/..' . '/luyadev/luya-module-cms/src',
        ),
        'luya\\admin\\' => 
        array (
            0 => __DIR__ . '/..' . '/luyadev/luya-module-admin/src',
        ),
        'luya\\' => 
        array (
            0 => __DIR__ . '/..' . '/luyadev/luya-core',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'F' => 
        array (
            'Flow' => 
            array (
                0 => __DIR__ . '/..' . '/flowjs/flow-php-server/src',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit285c871ad950a075889034bcc10022d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit285c871ad950a075889034bcc10022d7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit285c871ad950a075889034bcc10022d7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit285c871ad950a075889034bcc10022d7::$classMap;

        }, null, ClassLoader::class);
    }
}
