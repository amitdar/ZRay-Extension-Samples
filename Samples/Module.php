<?php

namespace Samples;

class Module extends \ZRay\ZRayModule {
	
	public function config() {
	    return array(
	        'defaultPanels' => array(
	            'multiplyGeneralTree' => false,
	        ),
	        'panels' => array(
	            'customTable' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Custom Table',
	                'panelTitle'	=> 'Custom Table',
	                'searchId' 		=> 'samples-custom-table-search',
	                'pagerId'		=> 'samples-custom-table-pager',
	            ),
	            'generalTable' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'General Table',
	                'panelTitle'	=> 'General Table',
	            ),
	            'customResources' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Custom Resources',
	                'panelTitle'	=> 'Custom Resources',
	                'resources'     => array(
	                   'chart' => 'chart.js'
	                )
	            ),
	         )
	    );
	    
		return array(
		    'panels' => array(
		        'test' => array(
		            'display'       => true,
		            'logo'          => 'logo.png',
		            'menuTitle' 	=> 'Test1',
		            'panelTitle'	=> 'Test1',
		            'showReport' 	=> true,
		        ),
		        'test2' => array(
		            'display'       => true,
		            'logo'          => 'logo.png',
		            'menuTitle' 	=> 'Test2',
		            'panelTitle'	=> 'Test2',
		            'resources' => array(
		                'Chart' => 'Chart.js',
		            )
		        ),
		        'test3' => array(
		            'display'       => true,
		            'logo'          => 'logo.png',
		            'menuTitle' 	=> 'Test3',
		            'panelTitle'	=> 'Test3',
		        ),
		        'test4' => array(
		            'display'       => true,
		            'logo'          => 'logo.png',
		            'menuTitle' 	=> 'Test4',
		            'panelTitle'	=> 'Test4',
		        )
		    ),
// 			'extension' => array(
// 				'name' => 'magento',
// 			),
			/*
			'defaultPanels' => array(
				'observers' => false,
			),
			'panels' => array(
				'called-observers' => array(
					'display' 		=> false,
					'menuTitle' 	=> 'Called Observers',
					'panelTitle'	=> 'Called Observers',
					'searchId' 		=> 'magento-called-observers-search',
					'pagerId'		=> 'magento-called-observers-pager',
					'showReport' 	=> true,
				),
				'test' => array(
					'display' 		=> false,
					'menuTitle' 	=> 'Test1',
					'panelTitle'	=> 'Test2',
				),
			)
			*/
		); 
	}	
}