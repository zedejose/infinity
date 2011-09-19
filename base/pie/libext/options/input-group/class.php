<?php
/**
 * PIE API: option extensions, generic input class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE-extensions
 * @subpackage options
 * @since 1.0
 */

Pie_Easy_Loader::load_ext( 'options/input' );

/**
 * Input element base class
 *
 * @package PIE-extensions
 * @subpackage options
 * @property-read string $input_type The type attribute for the input element
 */
abstract class Pie_Easy_Exts_Options_Input_Group
	extends Pie_Easy_Exts_Options_Input
{
	// nothing custom yet
}

?>