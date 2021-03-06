<?php

/**
 * Types_Helper_Condition_Views_Archive_Missing
 *
 * @since 2.0
 */
class Types_Helper_Condition_Views_Archive_Missing extends Types_Helper_Condition_Views_Archive_Exists {

	public function valid() {
		// if views not active
		if( ! defined( 'WPV_VERSION' ) )
			return false;

		// opposite of parent "Views Archive exists"
		return ! parent::valid();
	}

}