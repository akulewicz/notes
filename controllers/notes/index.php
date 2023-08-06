<?php 

$config = require_once base_path('config.php');
$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('SELECT * FROM notes')->get();

view('notes/index.view.php', ['heading' => $heading, 'notes' => $notes]);

