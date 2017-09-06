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
		//.....
		// other components ...
		//.....
		'ad' => [
			'class' => 'Edvlerblog\Adldap2\Adldap2Wrapper',

			/*
			 * Set the default provider to one of the providers defined in the
			 * providers array.
			 *
			 * If this is commented out, the entry 'default' in the providers array is
			 * used.
			 *
			 * See https://github.com/Adldap2/Adldap2/blob/master/docs/connecting.md
			 * Setting a default connection
			 *
			 */
			 // 'defaultProvider' => 'another_provider',

			/*
			 * Adlapd2 v7.X.X can handle multiple providers to different Active Directory sources.
			 * Each provider has it's own config.
			 *
			 * In the providers section it's possible to define multiple providers as listed as example below.
			 * But it's enough to only define the "default" provider!
			 */
			'providers' => [
				/*
				 * Always add a default provider!
				 *
				 * You can get the provider with:
				 * $provider = \Yii::$app->ad->getDefaultProvider();
				 * or with $provider = \Yii::$app->ad->getProvider('default');
				 */
				'default' => [ //Providername default
					// Connect this provider on initialisation of the LdapWrapper Class automatically
					'autoconnect' => true,

					// The provider's schema. Default is \Adldap\Schemas\ActiveDirectory set in https://github.com/Adldap2/Adldap2/blob/master/src/Connections/Provider.php#L112
					// You can make your own https://github.com/Adldap2/Adldap2/blob/master/docs/schema.md or use one from https://github.com/Adldap2/Adldap2/tree/master/src/Schemas
					// Example to set it to OpenLDAP:
					// 'schema' => new \Adldap\Schemas\OpenLDAP(),

					// The config has to be defined as described in the Adldap2 documentation.
					// https://github.com/Adldap2/Adldap2/blob/master/docs/configuration.md
					'config' => [
					// Your account suffix, for example: matthias.maderer@example.lan
					'account_suffix'        => '@54.196.176.103',

					// You can use the host name or the IP address of your controllers.
					'domain_controllers'    => ['54.196.176.103'],

					// Your base DN. This is usually your account suffix. // working DN uid=riemann,dc=example,dc=com
					'base_dn'               => 'dc=example,dc=com', //cn=read-only-admin,dc=example,dc=com

					// The account to use for querying / modifying users. This
					// does not need to be an actual admin account.
					'admin_username'        => '',
					'admin_password'        => '',
					]
				],

				/*
				 * Another Provider
				 * You don't have to another provider if you don't need it. It's just an example.
				 *
				 * You can get the provider with:
				 * or with $provider = \Yii::$app->ad->getProvider('another_provider');
				 */
				/* 'another_provider' => [ //Providername another_provider
					// Connect this provider on initialisation of the LdapWrapper Class automatically
					'autoconnect' => false,

					// The provider's schema. Default is \Adldap\Schemas\ActiveDirectory set in https://github.com/Adldap2/Adldap2/blob/master/src/Connections/Provider.php#L112
					// You can make your own https://github.com/Adldap2/Adldap2/blob/master/docs/schema.md or use one from https://github.com/Adldap2/Adldap2/tree/master/src/Schemas
					// Example to set it to OpenLDAP:
					// 'schema' => new \Adldap\Schemas\OpenLDAP(),

					// The config has to be defined as described in the Adldap2 documentation.
					// https://github.com/Adldap2/Adldap2/blob/master/docs/configuration.md               
					'config' => [
					// Your account suffix, for example: matthias.maderer@test.lan
					'account_suffix'        => 'criticalcontent.com',

					// You can use the host name or the IP address of your controllers.
					'domain_controllers'    => ['192.169.235.72'],

					// Your base DN. This is usually your account suffix.
					'base_dn'               => 'dc=criticalcontent,dc=com',

					// The account to use for querying / modifying users. This
					// does not need to be an actual admin account.
					'admin_username'        => 'LDAP_Auth@criticalcontent.com',
					'admin_password'        => 'Cr1t1c@l2016!',
					] // close config
				], // close provider  */
			], // close providers array
		], //close ad
		'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
		'user' => [
			'identityClass' => 'Edvlerblog\Adldap2\model\UserDbLdap',
			//...
		],
		
    ],
	'modules' => [
	    'auth' => [
            'class' => 'common\modules\auth\Module',
        ],
	    // 'rbac' => 'dektrium\rbac\RbacWebModule',
		// 'rbac' => 'dektrium\rbac\RbacConsoleModule',
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
