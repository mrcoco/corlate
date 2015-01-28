<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Corlate extends Theme
{
    public $name			= 'Corlate';
    public $author			= 'Corlate';
    public $author_website	= 'http://shapebootstrap.net/';
    public $website			= 'http://shapebootstrap.net/';
    public $description		= 'An HTML5 base template filled with goodies to get you up and running quickly.';
    public $version			= '1.0.0';
	public $options 		= array(
		'slider' => array(
			'title'         => 'Slider',
			'description'   => 'Would you like to display the slider on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'recent-works' => array(
			'title'         => 'Recent works',
			'description'   => 'Would you like to display the Recent works on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'services' => array(
			'title'         => 'Services',
			'description'   => 'Would you like to display the Services on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'feature' => array(
			'title'         => 'Feature',
			'description'   => 'Would you like to display the Feature on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'middle' => array(
			'title'         => 'Middle',
			'description'   => 'Would you like to display the Middle on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'content' => array(
			'title'         => 'Content',
			'description'   => 'Would you like to display the Content on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'partner' => array(
			'title'         => 'Partner',
			'description'   => 'Would you like to display the Partner on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'conatcat' => array(
			'title'         => 'Conatcat Info',
			'description'   => 'Would you like to display the Conatcat Info on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */