<?php
/**
*
* @package phpBB Extension - Activity Stats
* @copyright (c) 2014 Robet Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace robertheim\activitystats\migrations;

/**
* @ignore
*/
use robertheim\activitystats\MODES;
use robertheim\activitystats\PREFIXES;

class release_1_1_2 extends \phpbb\db\migration\migration
{
	protected $version = "1.1.2-DEV";

	public function effectively_installed()
	{
		return version_compare($this->config[PREFIXES::CONFIG.'_version'], $this->version, '>=');
	}

	static public function depends_on()
	{
		return array(
			'\robertheim\activitystats\migrations\release_1_1_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array(PREFIXES::CONFIG.'_mode', MODES::TODAY)),
			array('config.update', array(PREFIXES::CONFIG.'_version', $this->version)),
		);
	}
}
