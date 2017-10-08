<?php

if (!defined('QA_VERSION')) {
	header('Location: ../../');
	exit;
}

/*
// Register file to override the functions
// present in the file
*/

qa_register_plugin_module('module', 'qa-social-share-admin.php', 'qa_ss_admin', 'Q2A Social Share Configuration');
