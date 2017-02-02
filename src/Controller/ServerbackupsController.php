<?php
/**
 * Zend Backend (http://forge.co.nz/)
 *
 * CustomersController
 *
 * PHP version 5
 *
 * @category Module
 * @package  FgVirtualhost
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
namespace FgServerbackups\Controller;

use FgHome\Controller\AdminController;
use Zend\Authentication\AuthenticationService;
use Interop\Container\ContainerInterface;
use Zend\Mvc\MvcEvent;
use Zend\view\Model\ViewModel;
use FgCore\Model\zbeMessage;
use Zend\Hydrator\HydratorInterface;
use FgCore\Interfaces\ConfigurationInterface;
use FgServerbackups\Model\Serverbackups;

/**
 * ServerbackupsController Class
 *
 * @category Controller
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
class ServerbackupsController extends AdminController
{
	/*
	* @var Zend\ServiceManager\ServiceLocatorInterface
	*/
	protected $services;
	/*
	* @var Interop\Container\ContainerInterface
	*/
	protected $container;
	
	protected $authService;

	/*
	* @var FgCore\Manager\ConfigurationManager
	*/
	protected $configurationManager;
	
	/**
	* @var \Zend\Stdlib\Hydrator\HydratorInterface
	*/
	protected $hydrator;
	
	protected $dbconfig;
	
	protected $vhosts;
	
	public function __construct(
		ContainerInterface $container,
		HydratorInterface $hydrator,
		ConfigurationInterface $configurationModel
	) {
		$this->container = $container;
		$this->hydrator  = $hydrator;
		$this->configurationModel = $configurationModel;
		$this->dbconfig= $this->container->get('FgCore\Service\ConfigurationFactory');
	}
	
	public function indexAction()
	{
		$this->getAdminLayout();
	}

}
