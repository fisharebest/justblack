<?php
// Template for drawing the main blocks on the portal pages
//
// This template expects that the following variables will be set
// $id - the DOM id for the block div
// $title - the title of the block
// $class - the additional class of the block
// $content - the content of the block
//
// webtrees: Web based Family History software
// Copyright (C) 2014 webtrees development team.
// Copyright (C) 2014 JustCarmen.
//
// Derived from PhpGedView
// Copyright (C) 2008 to 2009  PGV Development Team.  All rights reserved.
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

use WT\Auth;

// Default Main Block
$block_main_tpl = '	<div id="'.$id.'" class="block">
						<div class="blockheader">'.$title.'</div>
						<div class="blockcontent normal_inner_block '.$class.'">'.$content.'</div>
					</div>';

// don't show a logout block, there is already a logout link in the header
if ($id == 'login_block'.$block_id && Auth::check()) {
	$block = false;
}

// default template
else {
	echo $block_main_tpl;
}
