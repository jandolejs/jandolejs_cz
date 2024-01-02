<?php
// source: /var/www/html/config/common.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_fcaa72237e extends Nette\DI\Container
{
	protected $tags = [
		'nette.inject' => [
			'application.1' => true,
			'application.10' => true,
			'application.11' => true,
			'application.12' => true,
			'application.13' => true,
			'application.14' => true,
			'application.15' => true,
			'application.16' => true,
			'application.17' => true,
			'application.18' => true,
			'application.19' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
			'application.7' => true,
			'application.8' => true,
			'application.9' => true,
		],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Caching\Storages\DevNullStorage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [
			2 => [
				'01',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Countable' => [2 => ['01']],
		'IteratorAggregate' => [2 => ['01']],
		'Traversable' => [2 => ['01']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'App\Configuration' => [['Configuration']],
		'Nette\Security\Authenticator' => [['Authenticator']],
		'Nette\Security\IAuthenticator' => [['Authenticator']],
		'App\MyAuthenticator' => [['Authenticator']],
		'Nette\Security\Authorizator' => [['Authorizer']],
		'App\MyAuthorizer' => [['Authorizer']],
		'App\DatabaseObject' => [['NotesFactory']],
		'App\Model\Notes\Factory' => [['NotesFactory']],
		'App\Model\Statistics' => [['Statistics']],
		'App\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.18',
				'application.19',
			],
		],
		'App\Presenters\AboutPresenter' => [2 => ['application.1']],
		'App\Presenters\LoginPresenter' => [2 => ['application.2']],
		'App\Presenters\StatisticsPresenter' => [2 => ['application.3']],
		'App\Presenters\KontaktPresenter' => [2 => ['application.4']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.5']],
		'App\Presenters\ToolsPresenter' => [2 => ['application.6']],
		'App\Presenters\HomepagePresenter' => [2 => ['application.7']],
		'App\Presenters\CvPresenter' => [2 => ['application.8']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.9']],
		'App\Presenters\PaymentPresenter' => [2 => ['application.10']],
		'App\Presenters\NotesPresenter' => [2 => ['application.11']],
		'App\Presenters\NotePresenter' => [2 => ['application.12']],
		'App\Presenters\BankPresenter' => [2 => ['application.13']],
		'App\Presenters\LogoutPresenter' => [2 => ['application.14']],
		'App\Presenters\MePresenter' => [2 => ['application.15']],
		'App\Presenters\BlogPresenter' => [2 => ['application.16']],
		'NetteModule\ErrorPresenter' => [2 => ['application.18']],
		'NetteModule\MicroPresenter' => [2 => ['application.19']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'configuration' => ['statistics' => ['table' => 'statistics'], 'users' => ['table' => 'users']],
			'appDir' => '/var/www/html/app',
			'wwwDir' => '/var/www/html/www',
			'vendorDir' => '/var/www/html/vendor',
			'debugMode' => false,
			'productionMode' => true,
			'consoleMode' => false,
			'tempDir' => '/var/www/html/',
		];
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceAuthenticator(): App\MyAuthenticator
	{
		return new App\MyAuthenticator($this->getService('database.default.explorer'), $this->getService('security.passwords'));
	}


	public function createServiceAuthorizer(): App\MyAuthorizer
	{
		return new App\MyAuthorizer;
	}


	public function createServiceConfiguration(): App\Configuration
	{
		$service = new App\Configuration;
		'App\Configuration'::$config = ['statistics' => ['table' => 'statistics'], 'users' => ['table' => 'users']];
		return $service;
	}


	public function createServiceNotesFactory(): App\Model\Notes\Factory
	{
		return new App\Model\Notes\Factory($this->getService('database.default.explorer'));
	}


	public function createServiceStatistics(): App\Model\Statistics
	{
		return new App\Model\Statistics($this->getService('database.default.explorer'), $this->getService('security.user'));
	}


	public function createServiceApplication__1(): App\Presenters\AboutPresenter
	{
		$service = new App\Presenters\AboutPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__10(): App\Presenters\PaymentPresenter
	{
		$service = new App\Presenters\PaymentPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__11(): App\Presenters\NotesPresenter
	{
		$service = new App\Presenters\NotesPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->notesFactory = $this->getService('NotesFactory');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__12(): App\Presenters\NotePresenter
	{
		$service = new App\Presenters\NotePresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->noteFactory = $this->getService('NotesFactory');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__13(): App\Presenters\BankPresenter
	{
		$service = new App\Presenters\BankPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__14(): App\Presenters\LogoutPresenter
	{
		$service = new App\Presenters\LogoutPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__15(): App\Presenters\MePresenter
	{
		$service = new App\Presenters\MePresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__16(): App\Presenters\BlogPresenter
	{
		$service = new App\Presenters\BlogPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__17(): App\Presenter
	{
		$service = new App\Presenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__18(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__19(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__2(): App\Presenters\LoginPresenter
	{
		$service = new App\Presenters\LoginPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\StatisticsPresenter
	{
		$service = new App\Presenters\StatisticsPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\KontaktPresenter
	{
		$service = new App\Presenters\KontaktPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): App\Presenters\ToolsPresenter
	{
		$service = new App\Presenters\ToolsPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__7(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__8(): App\Presenters\CvPresenter
	{
		$service = new App\Presenters\CvPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__9(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter($this->getService('Configuration'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->statistics = $this->getService('Statistics');
		$service->database = $this->getService('database.default.explorer');
		$service->config = $this->getService('Configuration');
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/var/www/html//cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storages\DevNullStorage
	{
		return new Nette\Caching\Storages\DevNullStorage;
	}


	public function createServiceContainer(): Container_fcaa72237e
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection(getenv('dsn'), getenv('user'), getenv('password'), []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			false,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(['0.0.0.0/0']);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_fcaa72237e $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html//cache/latte');
				$service->setAutoRefresh(false);
				$service->setStrictTypes(false);
				$service->setContentType('html');
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		return new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		return new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('Authenticator'),
			$this->getService('Authorizer'),
			$this->getService('security.userStorage'),
		);
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['readAndClose' => null, 'cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer'), null),
				'send',
			];
		})();
	}
}
