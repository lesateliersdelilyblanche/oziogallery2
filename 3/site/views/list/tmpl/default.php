<?php defined('_JEXEC') or die('Restricted access');
	/**
	* This file is part of Ozio Gallery 3
	*
	* Ozio Gallery 3 is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 2 of the License, or
	* (at your option) any later version.
	*
	* Ozio Gallery is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with Ozio Gallery.  If not, see <http://www.gnu.org/licenses/>.
	*
	* @copyright Copyright (C) 2010 Open Source Solutions S.L.U. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see RT-LICENSE.php
	*/
?>

<div class="album-list<?php echo $this->pageclass_sfx;?>">

	<?php if ($this->params->get("show_page_heading", 1)) { ?>
		<h1><?php echo $this->escape($this->params->get("page_heading")); ?></h1>
		<?php } ?>

	<ul>
		<?php foreach ($this->albumlist as &$album) { ?>
			<li><a href="<?php echo $album->url; ?>"><?php echo $album->title; ?></a></li>
			<?php } ?>
	</ul>

</div>


<h3><a href="index.html">PWI</a> Demo 1, Simple, all defaults</h3>

<form name="selector">
	Select popup-viewer:
	<select name="viewerSelect" onChange="location=document.selector.viewerSelect.options[document.selector.viewerSelect.selectedIndex].value;">
		<option selected disabled="disabled">Select viewer</option>
		<option value="?viewer=fancybox">FancyBox</option>
		<option value="?viewer=colorbox">ColorBox</option>
		<option value="?viewer=slimbox">SlimBox2</option>
	</select>
</form>

<div id="container"> </div>
