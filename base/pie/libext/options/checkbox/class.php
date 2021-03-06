<?php
/**
 * PIE API: option extensions, checkbox class file
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE-extensions
 * @subpackage options
 * @since 1.0
 */

Pie_Easy_Loader::load_ext( 'options/input-group' );

/**
 * Checkbox option
 *
 * @package PIE-extensions
 * @subpackage options
 */
class Pie_Easy_Exts_Options_Checkbox
	extends Pie_Easy_Exts_Options_Input_Group
{
	/**
	 */
	protected function init()
	{
		parent::init();
		$this->input_type( 'checkbox' );
	}
}

?>
