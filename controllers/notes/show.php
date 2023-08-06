<?php

$currentUserId = 1;

$config = require_once base_path('config.php');

$db = new Database($config['database']);

$heading = 'Notes';

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($currentUserId === $note['user_id']);


view('notes/show.view.php', ['note' => $note]);