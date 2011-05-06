<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Sebastian Felix Schwarz <tako-id@takomat.com>, takomat
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the Opengraph object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_News2facebook_Controller_OpengraphController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * opengraphRepository
	 *
	 * @var Tx_In2facebook_Domain_Repository_OpengraphRepository
	 */
	protected $opengraphRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->opengraphRepository = t3lib_div::makeInstance('Tx_News2facebook_Domain_Repository_OpengraphRepository');
	}

	/**
	 * Displays a single Opengraph
	 *
	 * @param Tx_In2facebook_Domain_Model_Opengraph $opengraph the Opengraph to display
	 * @return string The rendered view
	 */
	//public function showAction(Tx_In2facebook_Domain_Model_Opengraph $Opengraph) {
	public function showAction() {
		//$newsIn2facebook = $this->opengraphRepository->findByUid($GLOBALS['TSFE']->id);
		$newsIn2facebook = $this->opengraphRepository->findByUid(t3lib_div::_GET('tx_ttnews'));
		/*
		$uid = t3lib_div::_GET('tx_ttnews');
		$test = new Tx_In2facebook_Domain_Model_Opengraph;
		$read = "mein neuer Titel der uid(".$uid['tt_news'].")";
		$test->setTitle($read);
		$test->setSiteName("Name der Seite");
		$test->setDescription("meine beschreibung");
		*/
		$this->view->assign('news2facebook', $newsIn2facebook);
	}
	protected function getParametersSafely($parameterName) {
		if ($this->request->hasArgument($parameterName)) {
			return $this->request->getArgument($parameterName);
		}
		return "no params";
	}

}
?>