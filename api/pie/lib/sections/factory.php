<?php
/**
 * PIE API: sections factory class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE
 * @subpackage sections
 * @since 1.0
 */

Pie_Easy_Loader::load( 'base/factory' );

/**
 * Make creating section objects easy
 *
 * @package PIE
 * @subpackage sections
 */
class Pie_Easy_Sections_Factory extends Pie_Easy_Factory
{
	/**
	 * @todo sending section through is a temp hack
	 * @ignore
	 * @return Pie_Easy_Sections_Section
	 */
	public function create( $ext, $theme, $name, $title = null, $desc = null, $section = null )
	{
		// load it from alternate location?
		if ( !$this->policy()->load_ext( $ext ) ) {
			// nope, load core section
			Pie_Easy_Loader::load_ext( array('sections', $ext) );
		}

		// determine class name
		$class = 'Pie_Easy_Exts_Section_' . ucfirst( $ext );
		
		// make sure it exists
		if ( class_exists( $class ) ) {
			// return it
			return new $class( $theme, $name, $title, $desc );
		} else {
			// doh!
			throw new Exception( sprintf( 'The section class "%s" does not exist', $class ) );
		}
	}
}

?>