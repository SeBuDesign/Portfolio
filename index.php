
<?php

// Load composer
require_once './vendor/autoload.php';

$skills = json_decode(
	file_get_contents(__DIR__ . '/data/skills.json'), 
	true
);

$projects = json_decode(
	file_get_contents(__DIR__ . '/data/projects.json'), 
	true
);

// Using Laravel Blade Templating enigine
use eftec\bladeone\BladeOne;

$blade = new BladeOne();

// Output compiled template
echo $blade->run(
	'index',
	[
		'skills' => $skills,
		'projects' => $projects,
	]
);