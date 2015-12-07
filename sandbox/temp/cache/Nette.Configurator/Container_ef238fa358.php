<?php
// source: /home/richmond/vhosts/nette-test/sandbox/app/config/config.neon 
// source: /home/richmond/vhosts/nette-test/sandbox/app/config/config.local.neon 

class Container_ef238fa358 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'database.default.connection',
					'database.default.structure',
					'database.default.context',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'security.user',
					'session.session',
					'console.router',
					'doctrine.default.repositoryFactory',
					'doctrine.default.proxyAutoloader',
					'doctrine.default.diagnosticsPanel',
					'doctrine.cacheCleaner',
					'70_App_Forms_SignFormFactory',
					'71_App_Model_UserManager',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Database\Connection' => array(
				1 => array('database.default.connection'),
			),
			'Nette\Database\IStructure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\Structure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\IConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Conventions\DiscoveredConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Context' => array(1 => array('database.default.context')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(
				1 => array('routing.router'),
				0 => array('console.router'),
			),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'IteratorAggregate' => array(1 => array('console.helperSet')),
			'Traversable' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Helper\HelperSet' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Application' => array(1 => array('console.application')),
			'Kdyby\Console\Application' => array(1 => array('console.application')),
			'Kdyby\Console\CliRouter' => array(array('console.router')),
			'Kdyby\Events\EventManager' => array(
				1 => array('events.manager'),
				0 => array('doctrine.default.evm'),
			),
			'Doctrine\Common\EventManager' => array(
				1 => array('events.manager'),
				0 => array('doctrine.default.evm'),
			),
			'Kdyby\Events\LazyEventManager' => array(1 => array('events.manager')),
			'Doctrine\Common\Annotations\Reader' => array(
				array('annotations.reflectionReader'),
				array('annotations.reader'),
			),
			'Doctrine\Common\Annotations\AnnotationReader' => array(array('annotations.reflectionReader')),
			'Doctrine\Common\Cache\Cache' => array(
				array(
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
				),
			),
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => array(
				array(
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.App.annotationsImpl',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				),
			),
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => array(
				array('doctrine.default.metadataDriver'),
			),
			'Doctrine\ORM\Repository\RepositoryFactory' => array(
				array('doctrine.default.repositoryFactory'),
			),
			'Kdyby\Doctrine\RepositoryFactory' => array(
				array('doctrine.default.repositoryFactory'),
			),
			'Doctrine\ORM\Configuration' => array(
				array('doctrine.default.ormConfiguration'),
			),
			'Doctrine\DBAL\Configuration' => array(
				array(
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				),
			),
			'Kdyby\Doctrine\Configuration' => array(
				array('doctrine.default.ormConfiguration'),
			),
			'Kdyby\Events\Subscriber' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Doctrine\Common\EventSubscriber' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Kdyby\Doctrine\Proxy\ProxyAutoloader' => array(
				array('doctrine.default.proxyAutoloader'),
			),
			'Kdyby\Events\NamespacedEventManager' => array(array('doctrine.default.evm')),
			'Doctrine\ORM\EntityManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Doctrine\Common\Persistence\ObjectManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Doctrine\ORM\EntityManagerInterface' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Kdyby\Persistence\QueryExecutor' => array(
				1 => array(
					'doctrine.default.entityManager',
					'doctrine.dao',
				),
			),
			'Kdyby\Persistence\Queryable' => array(
				1 => array(
					'doctrine.default.entityManager',
					'doctrine.dao',
				),
			),
			'Kdyby\Doctrine\EntityManager' => array(
				1 => array('doctrine.default.entityManager'),
			),
			'Tracy\IBarPanel' => array(
				array('doctrine.default.diagnosticsPanel'),
			),
			'Doctrine\DBAL\Logging\SQLLogger' => array(
				array('doctrine.default.diagnosticsPanel'),
			),
			'Kdyby\Doctrine\Diagnostics\Panel' => array(
				array('doctrine.default.diagnosticsPanel'),
			),
			'Doctrine\DBAL\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Doctrine\DBAL\Driver\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Kdyby\Doctrine\Connection' => array(
				1 => array('doctrine.default.connection'),
			),
			'Kdyby\Doctrine\EntityRepository' => array(1 => array('doctrine.dao')),
			'Doctrine\ORM\EntityRepository' => array(1 => array('doctrine.dao')),
			'Doctrine\Common\Persistence\ObjectRepository' => array(1 => array('doctrine.dao')),
			'Doctrine\Common\Collections\Selectable' => array(1 => array('doctrine.dao')),
			'Kdyby\Persistence\ObjectDao' => array(1 => array('doctrine.dao')),
			'Kdyby\Doctrine\EntityDao' => array(1 => array('doctrine.dao')),
			'Kdyby\Doctrine\EntityDaoFactory' => array(1 => array('doctrine.daoFactory')),
			'Kdyby\Doctrine\DI\IRepositoryFactory' => array(
				array(
					'doctrine.repositoryFactory.default.defaultRepositoryFactory',
				),
			),
			'Doctrine\ORM\Tools\SchemaValidator' => array(1 => array('doctrine.schemaValidator')),
			'Doctrine\ORM\Tools\SchemaTool' => array(1 => array('doctrine.schemaTool')),
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => array(1 => array('doctrine.schemaManager')),
			'Kdyby\Doctrine\Tools\CacheCleaner' => array(1 => array('doctrine.cacheCleaner')),
			'Symfony\Component\Console\Command\Command' => array(
				1 => array(
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
				),
			),
			'Doctrine\DBAL\Tools\Console\Command\ImportCommand' => array(1 => array('doctrine.cli.0')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand' => array(1 => array('doctrine.cli.1')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand' => array(1 => array('doctrine.cli.2')),
			'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand' => array(1 => array('doctrine.cli.3')),
			'Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand' => array(1 => array('doctrine.cli.4')),
			'Kdyby\Doctrine\Console\ConvertMappingCommand' => array(1 => array('doctrine.cli.4')),
			'Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand' => array(1 => array('doctrine.cli.5')),
			'Kdyby\Doctrine\Console\GenerateEntitiesCommand' => array(1 => array('doctrine.cli.5')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand' => array(1 => array('doctrine.cli.6')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\AbstractCommand' => array(
				1 => array(
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
				),
			),
			'Kdyby\Doctrine\Console\SchemaCreateCommand' => array(1 => array('doctrine.cli.6')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand' => array(1 => array('doctrine.cli.7')),
			'Kdyby\Doctrine\Console\SchemaUpdateCommand' => array(1 => array('doctrine.cli.7')),
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand' => array(1 => array('doctrine.cli.8')),
			'Kdyby\Doctrine\Console\SchemaDropCommand' => array(1 => array('doctrine.cli.8')),
			'Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand' => array(1 => array('doctrine.cli.9')),
			'Kdyby\Doctrine\Console\GenerateProxiesCommand' => array(1 => array('doctrine.cli.9')),
			'Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand' => array(1 => array('doctrine.cli.10')),
			'Kdyby\Doctrine\Console\ValidateSchemaCommand' => array(1 => array('doctrine.cli.10')),
			'Doctrine\ORM\Tools\Console\Command\InfoCommand' => array(1 => array('doctrine.cli.11')),
			'Kdyby\Doctrine\Console\InfoCommand' => array(1 => array('doctrine.cli.11')),
			'Symfony\Component\Console\Helper\Helper' => array(
				1 => array(
					'doctrine.helper.entityManager',
					'doctrine.helper.connection',
				),
			),
			'Symfony\Component\Console\Helper\HelperInterface' => array(
				1 => array(
					'doctrine.helper.entityManager',
					'doctrine.helper.connection',
				),
			),
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => array(
				1 => array('doctrine.helper.entityManager'),
			),
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => array(
				1 => array('doctrine.helper.connection'),
			),
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => array(1 => array('doctrine.registry')),
			'Doctrine\Common\Persistence\ConnectionRegistry' => array(1 => array('doctrine.registry')),
			'Doctrine\Common\Persistence\ManagerRegistry' => array(1 => array('doctrine.registry')),
			'Kdyby\Doctrine\Registry' => array(1 => array('doctrine.registry')),
			'App\Forms\SignFormFactory' => array(
				1 => array('70_App_Forms_SignFormFactory'),
			),
			'Nette\Security\IAuthenticator' => array(1 => array('71_App_Model_UserManager')),
			'App\Model\UserManager' => array(1 => array('71_App_Model_UserManager')),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				),
			),
			'App\Presenters\ErrorPresenter' => array(array('application.1')),
			'App\Presenters\BasePresenter' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\Presenter' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'ArrayAccess' => array(
				array(
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'App\Presenters\SignPresenter' => array(array('application.2')),
			'App\Presenters\HomepagePresenter' => array(array('application.3')),
			'App\Presenters\Error4xxPresenter' => array(array('application.4')),
			'KdybyModule\CliPresenter' => array(array('application.5')),
			'NetteModule\ErrorPresenter' => array(array('application.6')),
			'NetteModule\MicroPresenter' => array(array('application.7')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'70_App_Forms_SignFormFactory' => 'App\Forms\SignFormFactory',
			'71_App_Model_UserManager' => 'App\Model\UserManager',
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'App\Presenters\ErrorPresenter',
			'application.2' => 'App\Presenters\SignPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\Error4xxPresenter',
			'application.5' => 'KdybyModule\CliPresenter',
			'application.6' => 'NetteModule\ErrorPresenter',
			'application.7' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'console.router' => 'Kdyby\Console\CliRouter',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.cli.0' => 'Doctrine\DBAL\Tools\Console\Command\ImportCommand',
			'doctrine.cli.1' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\ValidateSchemaCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\InfoCommand',
			'doctrine.cli.2' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand',
			'doctrine.cli.3' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\ConvertMappingCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\GenerateEntitiesCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\SchemaCreateCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\SchemaUpdateCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\SchemaDropCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\GenerateProxiesCommand',
			'doctrine.dao' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.daoFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.diagnosticsPanel' => 'Kdyby\Doctrine\Diagnostics\Panel',
			'doctrine.default.driver.App.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.proxyAutoloader' => 'Kdyby\Doctrine\Proxy\ProxyAutoloader',
			'doctrine.default.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory.default.defaultRepositoryFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		),
		'tags' => array(
			'inject' => array(
				'annotations.cache.annotations' => FALSE,
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'console.application' => FALSE,
				'console.helperSet' => FALSE,
				'console.router' => FALSE,
				'doctrine.cache.default.dbalResult' => FALSE,
				'doctrine.cache.default.hydration' => FALSE,
				'doctrine.cache.default.metadata' => FALSE,
				'doctrine.cache.default.ormResult' => FALSE,
				'doctrine.cache.default.query' => FALSE,
				'doctrine.cacheCleaner' => FALSE,
				'doctrine.cli.0' => FALSE,
				'doctrine.cli.1' => FALSE,
				'doctrine.cli.10' => FALSE,
				'doctrine.cli.11' => FALSE,
				'doctrine.cli.2' => FALSE,
				'doctrine.cli.3' => FALSE,
				'doctrine.cli.4' => FALSE,
				'doctrine.cli.5' => FALSE,
				'doctrine.cli.6' => FALSE,
				'doctrine.cli.7' => FALSE,
				'doctrine.cli.8' => FALSE,
				'doctrine.cli.9' => FALSE,
				'doctrine.dao' => FALSE,
				'doctrine.daoFactory' => FALSE,
				'doctrine.default.connection' => FALSE,
				'doctrine.default.dbalConfiguration' => FALSE,
				'doctrine.default.driver.App.annotationsImpl' => FALSE,
				'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => FALSE,
				'doctrine.default.entityManager' => FALSE,
				'doctrine.default.metadataDriver' => FALSE,
				'doctrine.default.ormConfiguration' => FALSE,
				'doctrine.default.proxyAutoloader' => FALSE,
				'doctrine.schemaManager' => FALSE,
				'doctrine.schemaTool' => FALSE,
				'doctrine.schemaValidator' => FALSE,
			),
			'nette.presenter' => array(
				'application.1' => 'App\Presenters\ErrorPresenter',
				'application.2' => 'App\Presenters\SignPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\Error4xxPresenter',
				'application.5' => 'KdybyModule\CliPresenter',
				'application.6' => 'NetteModule\ErrorPresenter',
				'application.7' => 'NetteModule\MicroPresenter',
			),
			'kdyby.console.command' => array(
				'doctrine.cli.0' => TRUE,
				'doctrine.cli.1' => TRUE,
				'doctrine.cli.10' => TRUE,
				'doctrine.cli.11' => TRUE,
				'doctrine.cli.2' => TRUE,
				'doctrine.cli.3' => TRUE,
				'doctrine.cli.4' => TRUE,
				'doctrine.cli.5' => TRUE,
				'doctrine.cli.6' => TRUE,
				'doctrine.cli.7' => TRUE,
				'doctrine.cli.8' => TRUE,
				'doctrine.cli.9' => TRUE,
			),
			'doctrine.connection' => array('doctrine.default.connection' => TRUE),
			'kdyby.doctrine.connection' => array('doctrine.default.connection' => TRUE),
			'doctrine.entityManager' => array(
				'doctrine.default.entityManager' => TRUE,
			),
			'kdyby.doctrine.entityManager' => array(
				'doctrine.default.entityManager' => TRUE,
			),
			'kdyby.subscriber' => array(
				'doctrine.default.proxyAutoloader' => TRUE,
			),
			'kdyby.console.helper' => array(
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => '/home/richmond/vhosts/nette-test/sandbox/app',
			'wwwDir' => '/home/richmond/vhosts/nette-test/sandbox/www',
			'debugMode' => FALSE,
			'productionMode' => TRUE,
			'environment' => 'production',
			'consoleMode' => TRUE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => '/home/richmond/vhosts/nette-test/sandbox/app/../temp',
			'doctrine.debug' => FALSE,
			'doctrine' => array(
				'orm' => array('defaultEntityManager' => 'default'),
				'dbal' => array('defaultConnection' => 'default'),
			),
		));
	}


	/**
	 * @return App\Forms\SignFormFactory
	 */
	public function createService__70_App_Forms_SignFormFactory()
	{
		$service = new App\Forms\SignFormFactory($this->getService('security.user'));
		return $service;
	}


	/**
	 * @return App\Model\UserManager
	 */
	public function createService__71_App_Model_UserManager()
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceAnnotations__cache__annotations()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations', FALSE);
		$service->setNamespace('Kdyby_annotations.cache.annotations_80657906');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\Reader
	 */
	public function createServiceAnnotations__reader()
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'), $this->getService('annotations.cache.annotations'),
			FALSE);
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\AnnotationReader
	 */
	public function createServiceAnnotations__reflectionReader()
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\SignPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->factory = $this->getService('70_App_Forms_SignFormFactory');
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\SignPresenter',
			'onShutdown',
		), $service->onShutdown, NULL, FALSE);
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\HomepagePresenter',
			'onShutdown',
		), $service->onShutdown, NULL, FALSE);
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'App\Presenters\Error4xxPresenter',
			'onShutdown',
		), $service->onShutdown, NULL, FALSE);
		return $service;
	}


	/**
	 * @return KdybyModule\CliPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'KdybyModule\CliPresenter',
			'onShutdown',
		), $service->onShutdown, NULL, FALSE);
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = TRUE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$self = $this; $service->onError[] = function ($app, $e) use ($self) {
			$app->errorPresenter = FALSE;
			$app->onShutdown[] = function () { exit(254); };
			$self->getService('console.application')->handleException($e);
		};
		$service->onStartup = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onStartup',
		), $service->onStartup, NULL, FALSE);
		$service->onShutdown = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onShutdown',
		), $service->onShutdown, NULL, FALSE);
		$service->onRequest = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onRequest',
		), $service->onRequest, NULL, FALSE);
		$service->onPresenter = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onPresenter',
		), $service->onPresenter, NULL, FALSE);
		$service->onResponse = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onResponse',
		), $service->onResponse, NULL, FALSE);
		$service->onError = $this->getService('events.manager')->createEvent(array(
			'Nette\Application\Application',
			'onError',
		), $service->onError, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, NULL));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		if (method_exists($service, 'setMapping')) { $service->setMapping(array('Kdyby' => 'KdybyModule\*\*Presenter')); } elseif (property_exists($service, 'mapping')) { $service->mapping['Kdyby'] = 'KdybyModule\*\*Presenter'; };
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('/home/richmond/vhosts/nette-test/sandbox/app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/home/richmond/vhosts/nette-test/sandbox/app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kdyby\Console\Application
	 */
	public function createServiceConsole__application()
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		$service->add($this->getService('doctrine.cli.0'));
		$service->add($this->getService('doctrine.cli.1'));
		$service->add($this->getService('doctrine.cli.2'));
		$service->add($this->getService('doctrine.cli.3'));
		$service->add($this->getService('doctrine.cli.4'));
		$service->add($this->getService('doctrine.cli.5'));
		$service->add($this->getService('doctrine.cli.6'));
		$service->add($this->getService('doctrine.cli.7'));
		$service->add($this->getService('doctrine.cli.8'));
		$service->add($this->getService('doctrine.cli.9'));
		$service->add($this->getService('doctrine.cli.10'));
		$service->add($this->getService('doctrine.cli.11'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Console\Helper\HelperSet
	 */
	public function createServiceConsole__helperSet()
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Symfony\Component\Console\Helper\ProgressHelper(FALSE));
		$service->set(new Symfony\Component\Console\Helper\DialogHelper(FALSE));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		$service->set($this->getService('doctrine.helper.entityManager'), 'em');
		$service->set($this->getService('doctrine.helper.connection'), 'db');
		return $service;
	}


	/**
	 * @return Kdyby\Console\CliRouter
	 */
	public function createServiceConsole__router()
	{
		$service = new Kdyby\Console\CliRouter($this);
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', NULL, NULL, array('lazy' => TRUE));
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		$service->onConnect = $this->getService('events.manager')->createEvent(array(
			'Nette\Database\Connection',
			'onConnect',
		), $service->onConnect, NULL, FALSE);
		$service->onQuery = $this->getService('events.manager')->createEvent(array('Nette\Database\Connection', 'onQuery'), $service->onQuery,
			NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'), $this->getService('database.default.structure'),
			$this->getService('database.default.conventions'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__dbalResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_80657906');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__hydration()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_80657906');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__metadata()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_80657906');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__ormResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_80657906');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__query()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query', FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_80657906');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Tools\CacheCleaner
	 */
	public function createServiceDoctrine__cacheCleaner()
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		$service->addCacheStorage($this->getService('annotations.cache.annotations'));
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Command\ImportCommand
	 */
	public function createServiceDoctrine__cli__0()
	{
		$service = new Doctrine\DBAL\Tools\Console\Command\ImportCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
	 */
	public function createServiceDoctrine__cli__1()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ValidateSchemaCommand
	 */
	public function createServiceDoctrine__cli__10()
	{
		$service = new Kdyby\Doctrine\Console\ValidateSchemaCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\InfoCommand
	 */
	public function createServiceDoctrine__cli__11()
	{
		$service = new Kdyby\Doctrine\Console\InfoCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand
	 */
	public function createServiceDoctrine__cli__2()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand
	 */
	public function createServiceDoctrine__cli__3()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ConvertMappingCommand
	 */
	public function createServiceDoctrine__cli__4()
	{
		$service = new Kdyby\Doctrine\Console\ConvertMappingCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateEntitiesCommand
	 */
	public function createServiceDoctrine__cli__5()
	{
		$service = new Kdyby\Doctrine\Console\GenerateEntitiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaCreateCommand
	 */
	public function createServiceDoctrine__cli__6()
	{
		$service = new Kdyby\Doctrine\Console\SchemaCreateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaUpdateCommand
	 */
	public function createServiceDoctrine__cli__7()
	{
		$service = new Kdyby\Doctrine\Console\SchemaUpdateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaDropCommand
	 */
	public function createServiceDoctrine__cli__8()
	{
		$service = new Kdyby\Doctrine\Console\SchemaDropCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateProxiesCommand
	 */
	public function createServiceDoctrine__cli__9()
	{
		$service = new Kdyby\Doctrine\Console\GenerateProxiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDao
	 */
	public function createServiceDoctrine__dao($entityName)
	{
		$service = $this->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.dao\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDaoFactory
	 */
	public function createServiceDoctrine__daoFactory()
	{
		return new Container_ef238fa358_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory($this);
	}


	/**
	 * @return Kdyby\Doctrine\Connection
	 */
	public function createServiceDoctrine__default__connection()
	{
		$service = Kdyby\Doctrine\Connection::create(array(
			'dbname' => 'doctrine_devel',
			'host' => '127.0.0.1',
			'port' => NULL,
			'user' => 'root',
			'password' => 'daryl',
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => NULL,
			'options' => NULL,
			'path' => NULL,
			'memory' => NULL,
			'unix_socket' => NULL,
			'platformService' => NULL,
			'defaultTableOptions' => array(),
			'schemaFilter' => NULL,
			'debug' => FALSE,
		), $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes(array(
			'enum' => 'enum',
			'point' => 'point',
			'lineString' => 'lineString',
			'multiLineString' => 'multiLineString',
			'polygon' => 'polygon',
			'multiPolygon' => 'multiPolygon',
			'geometryCollection' => 'geometryCollection',
		));
		$service->setDbalTypes(array(
			'enum' => 'Kdyby\Doctrine\Types\Enum',
			'point' => 'Kdyby\Doctrine\Types\Point',
			'lineString' => 'Kdyby\Doctrine\Types\LineString',
			'multiLineString' => 'Kdyby\Doctrine\Types\MultiLineString',
			'polygon' => 'Kdyby\Doctrine\Types\Polygon',
			'multiPolygon' => 'Kdyby\Doctrine\Types\MultiPolygon',
			'geometryCollection' => 'Kdyby\Doctrine\Types\GeometryCollection',
		));
		$panel = $this->getService('doctrine.default.diagnosticsPanel')->bindConnection($service);
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Configuration
	 */
	public function createServiceDoctrine__default__dbalConfiguration()
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(NULL);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Diagnostics\Panel
	 */
	public function createServiceDoctrine__default__diagnosticsPanel()
	{
		$service = new Kdyby\Doctrine\Diagnostics\Panel;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__App__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(array(
			'/home/richmond/vhosts/nette-test/sandbox/app',
		), $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(array(
			'/home/richmond/vhosts/nette-test/sandbox/vendor/kdyby/doctrine/src/Kdyby/Doctrine/DI/../Entities',
		), $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityManager
	 */
	public function createServiceDoctrine__default__entityManager()
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'), $this->getService('doctrine.default.ormConfiguration'),
			$this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$this->getService('doctrine.default.diagnosticsPanel')->bindEntityManager($service);
		$service->onDaoCreate = $this->getService('events.manager')->createEvent(array(
			'Kdyby\Doctrine\EntityManager',
			'onDaoCreate',
		), $service->onDaoCreate, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Kdyby\Events\NamespacedEventManager
	 */
	public function createServiceDoctrine__default__evm()
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Event::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = TRUE;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	 */
	public function createServiceDoctrine__default__metadataDriver()
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.App.annotationsImpl'), 'App');
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'), 'Kdyby\Doctrine');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Configuration
	 */
	public function createServiceDoctrine__default__ormConfiguration()
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityDao');
		$service->setQueryBuilderClassName('Kdyby\Doctrine\QueryBuilder');
		$service->setRepositoryFactory($this->getService('doctrine.default.repositoryFactory'));
		$service->setProxyDir('/home/richmond/vhosts/nette-test/sandbox/app/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(2);
		$service->setEntityNamespaces(array());
		$service->setCustomHydrationModes(array());
		$service->setCustomStringFunctions(array());
		$service->setCustomNumericFunctions(array());
		$service->setCustomDatetimeFunctions(array());
		$service->setDefaultQueryHints(array());
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Proxy\ProxyAutoloader
	 */
	public function createServiceDoctrine__default__proxyAutoloader()
	{
		$service = new Kdyby\Doctrine\Proxy\ProxyAutoloader('/home/richmond/vhosts/nette-test/sandbox/app/../temp/proxies',
			'Kdyby\GeneratedProxy');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\RepositoryFactory
	 */
	public function createServiceDoctrine__default__repositoryFactory()
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		$service->setServiceIdsMap(array(), 'doctrine.repositoryFactory.default.defaultRepositoryFactory');
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	 */
	public function createServiceDoctrine__helper__connection()
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	 */
	public function createServiceDoctrine__helper__entityManager()
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Registry
	 */
	public function createServiceDoctrine__registry()
	{
		$service = new Kdyby\Doctrine\Registry(array(
			'default' => 'doctrine.default.connection',
		), array(
			'default' => 'doctrine.default.entityManager',
		), 'default', 'default', $this);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\DI\IRepositoryFactory
	 */
	public function createServiceDoctrine__repositoryFactory__default__defaultRepositoryFactory()
	{
		return new Container_ef238fa358_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory($this);
	}


	/**
	 * @return Doctrine\DBAL\Schema\AbstractSchemaManager
	 */
	public function createServiceDoctrine__schemaManager()
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		if (!$service instanceof Doctrine\DBAL\Schema\AbstractSchemaManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.schemaManager\', value returned by factory is not Doctrine\DBAL\Schema\AbstractSchemaManager type.');
		}
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaTool
	 */
	public function createServiceDoctrine__schemaTool()
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaValidator
	 */
	public function createServiceDoctrine__schemaValidator()
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Events\LazyEventManager
	 */
	public function createServiceEvents__manager()
	{
		$service = new Kdyby\Events\LazyEventManager(array(
			'Nette\DI\Container::onInitialize' => array('doctrine.default.proxyAutoloader'),
		), $this);
		Kdyby\Events\Diagnostics\Panel::register($service, $this)->renderPanel = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_ef238fa358_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('/home/richmond/vhosts/nette-test/sandbox/app/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile = $this->getService('events.manager')->createEvent(array('Latte\Engine', 'onCompile'), $service->onCompile,
			NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		Kdyby\Console\CliRouter::prependTo($service, $this->getService('console.router'));
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('71_App_Model_UserManager'));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(array('Nette\Security\User', 'onLoggedIn'), $service->onLoggedIn,
			NULL, FALSE);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(array('Nette\Security\User', 'onLoggedOut'), $service->onLoggedOut,
			NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		date_default_timezone_set('Europe/Prague');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = FALSE;;
		$this->getService('events.manager')->createEvent(array('Nette\DI\Container', 'onInitialize'))->dispatch($this);

		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/richmond/vhosts/nette-test/sandbox/vendor/kdyby/doctrine/src/Kdyby/Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/richmond/vhosts/nette-test/sandbox/vendor/doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/richmond/vhosts/nette-test/sandbox/app/../temp/proxies';
	}

}



final class Container_ef238fa358_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory implements Kdyby\Doctrine\EntityDaoFactory
{
	private $container;


	public function __construct(Container_ef238fa358 $container)
	{
		$this->container = $container;
	}


	public function create($entityName)
	{
		$service = $this->container->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.daoFactory\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}

}



final class Container_ef238fa358_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory implements Kdyby\Doctrine\DI\IRepositoryFactory
{
	private $container;


	public function __construct(Container_ef238fa358 $container)
	{
		$this->container = $container;
	}


	public function create(Doctrine\ORM\EntityManagerInterface $entityManager, Doctrine\ORM\Mapping\ClassMetadata $classMetadata)
	{
		$service = new Kdyby\Doctrine\EntityDao($entityManager, $classMetadata);
		return $service;
	}

}



final class Container_ef238fa358_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_ef238fa358 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/home/richmond/vhosts/nette-test/sandbox/app/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile = $this->container->getService('events.manager')->createEvent(array('Latte\Engine', 'onCompile'), $service->onCompile,
			NULL, FALSE);
		return $service;
	}

}
