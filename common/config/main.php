<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		
		'mailchimp' => [
            'class' => 'yii\mailchimp\Mailchimp',
            // 'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            // 'useFileTransport' => true,
        ],
    ],
	'modules' => [
		'social' => [
			// the module class
			'class' => 'kartik\social\Module',
			// the global settings for the disqus widget
			'disqus' => [
				'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
			],
			// the global settings for the facebook plugins widget
			'facebook' => [
				'app_id' => '1393509477405036',
				'app_secret' => 'c21926408a6bd2e6416a8ea00dd1e5c6',
			],
			// the global settings for the google plugins widget
			'google' => [
				'clientId' => 'GOOGLE_API_CLIENT_ID',
				'pageId' => 'GOOGLE_PLUS_PAGE_ID',
				'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
			],
			// the global settings for the google analytic plugin widget
			'googleAnalytics' => [
				'id' => 'TRACKING_ID',
				'domain' => 'TRACKING_DOMAIN',
			],
			// the global settings for the twitter plugins widget
			'twitter' => [
				'screenName' => 'TWITTER_SCREEN_NAME'
			],
		],
		// your other modules
	],
];