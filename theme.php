<?php
/**
 * JustBlack theme for webtrees (online genealogy)
 * Copyright (C) 2019 JustCarmen (http://www.justcarmen.nl)
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace JustCarmen\WebtreesThemes\JustBlack;

use Composer\Autoload\ClassLoader;
use JustCarmen\WebtreesThemes\JustBlack\Theme\JustBlackTheme;

// load the theme classes
$loader = new ClassLoader();
$loader->addPsr4('JustCarmen\\WebtreesThemes\\JustBlack\\', __DIR__ . '/app');
$loader->register();

return new JustBlackTheme();
