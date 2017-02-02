<?php
/**
 * Zend Backend (http://forge.co.nz/)
 *
 * Config
 *
 * PHP version 5
 *
 * @category Module
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
 
namespace FgServerbackups;

use Zend\Router\Http\Literal;

return [
	'config_serverbackuplocation' => [ 'backuplocation' => 'data/backups/' ],
    'controllers' => [
        'factories' => [
			Controller\ServerbackupsController::class => 'FgServerbackups\Factory\ServerbackupsControllerFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'serverbackups' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/serverbackups',
                    'defaults' => [
                        'controller' => Controller\ServerbackupsController::class,
                        'action'     => 'index',
                    ],
                ],
				'may_terminate' => true,
				'child_routes' => [
					'new' => [
						'type' => Literal::class,
						'options' => [
							'route' => '/new',
							'defaults' => [
								'action' => 'new',
							]
						],
					],
				],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            'FgServerbackups\Service\DBServerbackupsFactory' => Service\DBServerbackupsFactory::class,
			'FgServerbackups\Mapper\DBServerbackupsMapper' => 'FgServerbackups\Service\DBServerbackupsMapperFactory',
          ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'template_map' => [
            	'fg-serverbackups/index' => __DIR__ . '/../view/index.phtml',
            ],
    ],
];
