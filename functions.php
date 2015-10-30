<?php

/* Project
Author: Minan
version: 1.0
*/

/* Get user ile aktif kullanıcı bilgileri için hazır function */
function get_user($user_id)
{
	$query_user = mysql_query("SELECT * FROM register WHERE id='".$user_id."'");
	if(mysql_num_rows($query_user) > 0)
	{
		$user_list = mysql_fetch_array($query_user);
		return $user_list;
	}
	else
	{
		$query_user = mysql_query("SELECT * FROM register WHERE nick='".$user_ID_or_nickName."'");
		if(mysql_num_rows($query_user) > 0)
		{
			$user_list = mysql_fetch_array($query_user);
			return $user_list;
		}
		else
		{
			return false;
		}
	}
}

/* Get user function u kullanılarak tablo da bulunan bilgileri çekilecek */
function current_user($table)
{
	$current_user = get_user($_SESSION['login_id']);
	return $current_user[$table];
}

/* User İnfo */
	$nick = current_user('nick');
	$authority = current_user('authority');
	$email = current_user('email');
/* User İnfo */

/* Article-Makalerin bilgilerini değişkenlere depolamak için function */





