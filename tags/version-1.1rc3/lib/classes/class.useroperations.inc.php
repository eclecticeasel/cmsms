<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (tedkulp@users.sf.net)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#BUT withOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: class.user.inc.php 2961 2006-06-25 04:49:31Z wishy $

/**
 * Class for doing user related functions.  Maybe of the User object functions
 * are just wrappers around these.
 *
 * @since 0.6.1
 * @package CMS
 */

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class.user.inc.php');

class UserOperations
{
	/**
	 * Gets a list of all users
	 *
	 * @returns array An array of User objects
	 * @since 0.6.1
	 */
	function &LoadUsers()
	{
		global $gCms;
		$db = &$gCms->GetDb();

		$result = array();

		$query = "SELECT user_id, username, password, first_name, last_name, email, active, admin_access FROM ".cms_db_prefix()."users ORDER BY username";
		$dbresult = $db->Execute($query);

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$oneuser =& new User();
			$oneuser->id = $row['user_id'];
			$oneuser->username = $row['username'];
			$oneuser->firstname = $row['first_name'];
			$oneuser->lastname = $row['last_name'];
			$oneuser->email = $row['email'];
			$oneuser->password = $row['password'];
			$oneuser->active = $row['active'];
			$oneuser->adminaccess = $row['admin_access'];
			$result[] =& $oneuser;
		}

		return $result;
	}


	/**
	 * Gets a list of all users in a given group
	 *
	 * @param mixed $groupid Group for the loaded users
	 * @returns array An array of User objects
	 */
	function &LoadUsersInGroup($groupid)
	{
		global $gCms;
		$db = &$gCms->GetDb();
		$result = array();

		$query = "SELECT u.user_id, u.username, u.password, u.first_name, u.last_name, u.email, u.active, u.admin_access FROM ".cms_db_prefix()."users u, ".cms_db_prefix()."groups g, ".cms_db_prefix()."user_groups cg where cg.user_id = u.user_id and cg.group_id = g.group_id and g.group_id =? ORDER BY username";
		$dbresult = $db->Execute($query, array($groupid));

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$oneuser =& new User();
			$oneuser->id = $row['user_id'];
			$oneuser->username = $row['username'];
			$oneuser->firstname = $row['first_name'];
			$oneuser->lastname = $row['last_name'];
			$oneuser->email = $row['email'];
			$oneuser->password = $row['password'];
			$oneuser->active = $row['active'];
			$oneuser->adminaccess = $row['admin_access'];
			$result[] =& $oneuser;
		}

		return $result;
	}

	/**
	 * Loads a user by username.
	 *
	 * @param mixed $username Username to load
	 * @param mixed $password Password to check against
	 * @param mixed $activeonly Only load the user if they are active
	 * @param mixed $adminaccessonly Only load the user if they have admin access
	 *
	 * @returns mixed If successful, the filled User object.  If it fails, it returns false.
	 * @since 0.6.1
	 */
	function &LoadUserByUsername($username, $password = '', $activeonly = true, $adminaccessonly = false)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$params = array();

		$query = "SELECT user_id FROM ".cms_db_prefix()."users WHERE username = ?";
		$params[] = $username;

		if ($password != '')
		{
			$query .= " AND password = ?";
			$params[] = md5($password);
		}

		if ($activeonly == true)
		{
			$query .= " AND active = 1";
		}

		if ($adminaccessonly == true)
		{
			$query .= " AND admin_access = 1";
		}

		$dbresult = $db->Execute($query, $params);

		if ($dbresult && $dbresult->RecordCount() > 0)
		{
			$row = $dbresult->FetchRow();
			$id = $row['user_id'];
			$result =& UserOperations::LoadUserByID($id);
		}

		return $result;
	}

	/**
	 * Loads a user by user id.
	 *
	 * @param mixed $id User id to load
	 *
	 * @returns mixed If successful, the filled User object.  If it fails, it returns false.
	 * @since 0.6.1
	 */
	function &LoadUserByID($id)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = "SELECT username, password, active, first_name, last_name, admin_access, email FROM ".cms_db_prefix()."users WHERE user_id = ?";
		$dbresult = $db->Execute($query, array($id));

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$oneuser =& new User();
			$oneuser->id = $id;
			$oneuser->username = $row['username'];
			$oneuser->password = $row['password'];
			$oneuser->firstname = $row['first_name'];
			$oneuser->lastname = $row['last_name'];
			$oneuser->email = $row['email'];
			$oneuser->adminaccess = $row['admin_access'];
			$oneuser->active = $row['active'];
			$result =& $oneuser;
		}

		return $result;
	}

	/**
	 * Saves a new user to the database.
	 *
	 * @param mixed $usre User object to save
	 *
	 * @returns mixed The new user id.  If it fails, it returns -1.
	 * @since 0.6.1
	 */
	function InsertUser($user)
	{
		$result = -1; 

		global $gCms;
		$db = &$gCms->GetDb();

		$time = $db->DBTimeStamp(time());
		$new_user_id = $db->GenID(cms_db_prefix()."users_seq");
		$query = "INSERT INTO ".cms_db_prefix()."users (user_id, username, password, active, first_name, last_name, email, admin_access, create_date, modified_date) VALUES (?,?,?,?,?,?,?,?,".$time.",".$time.")";
		#$dbresult = $db->Execute($query, array($new_user_id, $user->username, $user->password, $user->active, $user->firstname, $user->lastname, $user->email, $user->adminaccess));
		$dbresult = $db->Execute($query, array($new_user_id, $user->username, $user->password, $user->active, $user->firstname, $user->lastname, $user->email, 1)); //Force admin access on
		if ($dbresult !== false)
		{
			$result = $new_user_id;
		}

		return $result;
	}

	/**
	 * Updates an existing user in the database.
	 *
	 * @param mixed $user User object to save
	 *
	 * @returns mixed If successful, true.  If it fails, false.
	 * @since 0.6.1
	 */
	function UpdateUser($user)
	{
		$result = false; 

		global $gCms;
		$db = &$gCms->GetDb();

		$time = $db->DBTimeStamp(time());
		$query = "UPDATE ".cms_db_prefix()."users SET username = ?, password = ?, active = ?, modified_date = ".$time.", first_name = ?, last_name = ?, email = ?, admin_access = ? WHERE user_id = ?";
		#$dbresult = $db->Execute($query, array($user->username, $user->password, $user->active, $user->firstname, $user->lastname, $user->email, $user->adminaccess, $user->id));
		$dbresult = $db->Execute($query, array($user->username, $user->password, $user->active, $user->firstname, $user->lastname, $user->email, 1, $user->id));
		if ($dbresult !== false)
		{
			$result = true;
		}

		return $result;
	}

	/**
	 * Deletes an existing user from the database.
	 *
	 * @param mixed $id Id of the user to delete
	 *
	 * @returns mixed If successful, true.  If it fails, false.
	 * @since 0.6.1
	 */
	function DeleteUserByID($id)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = "DELETE FROM ".cms_db_prefix()."additional_users where user_id = ?";
		$db->Execute($query, array($id));

		$query = "DELETE FROM ".cms_db_prefix()."users where user_id = ?";
		$dbresult = $db->Execute($query, array($id));

		$query = "DELETE FROM ".cms_db_prefix()."userprefs where user_id = ?";
		$dbresult = $db->Execute($query, array($id));

		if ($dbresult !== false)
		{
			$result = true;
		}

		return $result;
	}

	/**
	 * Show the number of pages the given user's id owns.
	 *
	 * @param mixed $id Id of the user to count
	 *
	 * @returns mixed Number of pages they own.  0 if any problems.
	 * @since 0.6.1
	 */
	function CountPageOwnershipByID($id)
	{
		$result = 0;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = "SELECT count(*) AS count FROM ".cms_db_prefix()."content WHERE owner_id = ?";
		$dbresult = $db->Execute($query, array($id));

		if ($dbresult && $dbresult->RecordCount() > 0)
		{
			$row = $dbresult->FetchRow();
			if (isset($row["count"]))
			{
				$result = $row["count"];
			}
		}

		return $result;
	}

	function GenerateDropdown($currentuserid='', $name='ownerid')
	{
		$result = '';

		$allusers = UserOperations::LoadUsers();

		if (count($allusers) > 0)
		{
			$result .= '<select name="'.$name.'">';
			foreach ($allusers as $oneuser)
			{
				$result .= '<option value="'.$oneuser->id.'"';
				if ($oneuser->id == $currentuserid)
				{
					$result .= ' selected="selected"';
				}
				$result .= '>'.$oneuser->username.'</option>';
			}
			$result .= '</select>';
		}

		return $result;
	}
}

?>