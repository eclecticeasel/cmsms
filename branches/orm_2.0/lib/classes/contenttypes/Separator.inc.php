<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2007 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

class Separator extends CmsContentBase
{
	var $unused_fields = array('name', 'menu_text', 'cachable', 'alias', 'metadata', 'title_attribute', 'tab_index', 'access_key', 'template_id');

	function __construct()
	{
		parent::__construct();
		$this->cachable = false;
	}
    
	function friendly_name()
	{
		return 'Separator';
	}
	
	function has_usable_link()
	{
		return false;
	}

	function wants_children()
	{
		return false;
	}
	
	function is_default_possible()
	{
		return false;
	}

	function update_parameters($params)
	{
		parent::update_parameters($params);
		$this->name = '--------';
	}

    function get_url($rewrite = true)
    {
		return '#';
    }
}

# vim:ts=4 sw=4 noet
?>