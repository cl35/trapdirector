<?php

$this->providePermission('trapdirector/module_config', $this->translate('Allow to access the traps module configuration'));
$this->providePermission('trapdirector/view', $this->translate('Allow to view traps and traps service configuration'));
$this->providePermission('trapdirector/config', $this->translate('Allow to create and modify traps services'));

$this->provideConfigTab('config', array(
    'title' => 'Configuration',
    'url'   => 'settings'
));

$section = $this->menuSection(N_('Traps'),array (
	'icon'	=> 'search_petrol.png'
));

$section->add(N_('Status'),array(
	'url'			=> 'trapdirector/status/get',
	'permission' 	=> 'trapdirector/view'
));

$section->add(N_('Received'),array(
	'url'			=> 'trapdirector/received/',
	'permission' 	=> 'trapdirector/view'
));

$section->add(N_('Handlers'),array(
	'url'			=> 'trapdirector/handler/',
	'permission' 	=> 'trapdirector/config'
));

?>