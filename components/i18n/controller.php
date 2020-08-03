<?php

//////////////////////////////////////////////////////////////////////////////80
// Update Controller
//////////////////////////////////////////////////////////////////////////////80
// Copyright (c) Atheos & Liam Siira (Atheos.io), distributed as-is and without
// warranty under the modified License: MIT - Hippocratic 1.2: firstdonoharm.dev
// See [root]/license.md for more. This information must remain intact.
//////////////////////////////////////////////////////////////////////////////80
// Authors: Codiad Team, @Fluidbyte, Atheos Team, @hlsiira
//////////////////////////////////////////////////////////////////////////////80

switch ($action) {

	//////////////////////////////////////////////////////////////////////////80
	// Initialize the Update Modules
	//////////////////////////////////////////////////////////////////////////80
	case 'init':
		$cache = array("cache" => $i18n->getCache());
		Common::sendJSON("success", $cache);
		break;

	//////////////////////////////////////////////////////////////////////////80
	// Default: Invalid Action
	//////////////////////////////////////////////////////////////////////////80
	default:
		Common::sendJSON("E401i");
		break;
}