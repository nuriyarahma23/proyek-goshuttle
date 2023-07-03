<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'cors' => \Fluent\Cors\Filters\CorsFilter::class,
		'authGuard' => \App\Filters\AuthGuard::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			
			'honeypot',
			'csrf' => [
						'except' => [
							
									'modules/api/v1/triplist',
									'ajax/vehicle/pic/delete',
									'modules/api/v1/tickets/booking',
									'modules/api/v1/tickets/unpaid/booking',
									'modules/api/v1/passangers/login',
									'modules/api/v1/passangers/picupload',
									'modules/api/v1/passangers/password',
									'modules/api/v1/passangers/profileinfo',
									'modules/api/v1/inquiries/create',
									'modules/api/v1/passangers/signup',
									'modules/api/v1/ratings/create',
									'modules/api/v1/tickets/laterpay',
									'modules/api/v1/passangers/email',
									'modules/api/v1/passangers/mobile',
									'modules/api/v1/passangers/nid',
									'modules/api/v1/passangers/loginsocial',
									'modules/api/v1/website/emails/subscrib',
									'modules/api/v1/website/emails/check/email/pass',
									'modules/api/v1/website/emails/reset/pass',
									]
						
					  ],
			
		],
		'after'  => [
			'toolbar',
			'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [
		'cors' => ['after' => ['api/*']],
		'authGuard' => ['before' => ['modules/backend/*']],
	];
}
