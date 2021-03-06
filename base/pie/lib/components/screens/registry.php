<?php
/**
 * PIE API: screens registry
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE-components
 * @subpackage screens
 * @since 1.0
 */

Pie_Easy_Loader::load( 'base/registry', 'components/screens/factory' );

/**
 * Make keeping track of screens easy
 *
 * @package PIE-components
 * @subpackage screens
 */
abstract class Pie_Easy_Screens_Registry extends Pie_Easy_Registry
{
	// nothing custom yet
}

?>
