<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
		'ldapcmd' => [
			'class' => 'Edvlerblog\Adldap2\commands\LdapController',
		]
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		'authManager' => [
				'class' => 'yii\rbac\DbManager',
			],
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

						// Your base DN. This is usually your account suffix.
						'base_dn'               => 'uid=riemann,dc=example,dc=com', //cn=read-only-admin,dc=example,dc=com

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
		'user' => [
			'class' => 'Edvlerblog\Adldap2\model\UserDbLdap',
			'identityClass' => 'Edvlerblog\Adldap2\model\UserDbLdap',
			//...
		]
    ],
    'params' => $params,
];
