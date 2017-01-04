<?php
// -----
// Part of the File Auto-Versioning plugin by lat9 (lat9@vinosdefrutastropicales.com)
// Copyright (C) 2017, Vinos de Frutas Tropicales.
//

// -----
// This function adds a version string to a file's name to that reflects that file's last-modified
// date.  This allows a store to include a .htaccess file that specifies the caching of those files, while
// enabling the store to control when that cache is to be updated.
//
function vinosFileAutoVersioning ($filename)
{
    $auto_version = '';
    if (file_exists ($filename)) {
        $auto_version = '?' . filemtime ($filename);
    }
    return $filename . $auto_version;
}