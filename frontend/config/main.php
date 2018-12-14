<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'flushInterval' => 1,
            'targets' => [
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'logVars' => ['$_GET', '$_POST', '$_FILES',],
                    'exportInterval' => 1,
                    'levels' => ['error', 'warning'],
                    'categories' => [
                        'yii\db\*',
                        'yii\web\HttpException:*',
                    ],
                    'except' => [
                        'yii\web\HttpException:404',
                        'yii\web\HttpException:403',
                    ],
                ],
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'logVars' => [],
                    'levels' => ['info'],
                    'except' => [
                        'yii\web\*',
                        'yii\db\*',
                    ]
                ]
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'suffix' => '.html',
            'rules' => [
                '' => 'film-studio/index',
                'film/<id:\d+>' => '/film-studio/view',
                'story' => 'small-story/index',
                'story/<id:\d+>' => 'small-story/view',
                'signup' => 'site/signup',
                'login' => 'site/login',
            ],
        ],

    ],
    'params' => $params,
];
