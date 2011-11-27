<?php
/*
 * LimeSurvey
 * Copyright (C) 2007 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 * $Id$
 *
 * LS Library bootstrap file, work in progress.
 *
 * Currently requires require_once to use the library.
 */

class LS_Installer_DbFile
{
    private $path;
    public function __construct($path)
    {
        $this->path = $path;
    }
    
}