<?php
/**
 * HelloWorld SpecialPage for BoilerPlate extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialPerformance extends SpecialPage {
	public function __construct() {
		parent::__construct( 'Performance' );
	}

	/**
	 * Shows the page to the user.
	 * @param string $sub: The subpage string argument (if any).
	 *  [[Special:Performance/subpage]].
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'performance-special' ) );

		$out->addWikiMsg( 'performance-special-text' );
	}
}
