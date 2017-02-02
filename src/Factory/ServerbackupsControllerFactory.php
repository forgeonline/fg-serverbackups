<?php
/**
 * Zend Backend (http://forge.co.nz/)
 *
 * CustomersControllerFactory
 *
 * PHP version 5
 *
 * @category Module
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
namespace FgServerbackups\Factory;

use Interop\Container\ContainerInterface;
use FgServerbackups\Controller\ServerbackupsController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Hydrator\ClassMethods;
use FgCore\Model\Configuration;

/**
 * ServerbackupsControllerFactory Class
 *
 * @category Factory
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
class ServerbackupsControllerFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null)
    {
        return new ServerbackupsController(
			$container,
			new ClassMethods(false),
			new Configuration()
		);
    }
	
	/**
	* Create service
	*
	* @param ServiceLocatorInterface $serviceLocator
	*
	* @return mixed
	*/
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		return $this($serviceLocator, 'FgServerbackups\Factory\ServerbackupsControllerFactory');
     }
}