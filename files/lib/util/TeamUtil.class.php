<?php
namespace tourneysystem\util;
use wcf\system\WCF;

/**
 * Contains user-related functions.
 * 
 * @author	Marcel Werk
 * @copyright	2001-2015 WoltLab GmbH
final class TeamUtil {
	/**
	public static function isValidTeamname($name) {
		// minimum length is 2 characters, maximum length is 32 characters
			return false;
		}
		// check illegal characters
			return false;
		}
		return true;
	}
	
	/**
	 * Returns true if the given teamname is available.
	 * 
	 * @param	string		$name
	 * @return	boolean
	 */
	public static function isAvailableTeamname($name) {
		$sql = "SELECT	COUNT(teamname) AS count
			FROM	tourneysystem1_teams
			WHERE	teamname = ?";
		$statement = WCF::getDB()->prepareStatement($sql);
		$statement->execute(array($name));
		$row = $statement->fetchArray();
		return $row['count'] == 0;
	}