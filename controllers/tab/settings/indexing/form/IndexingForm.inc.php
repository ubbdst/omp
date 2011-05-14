<?php

/**
 * @file controllers/tab/settings/indexing/form/IndexingForm.inc.php
 *
 * Copyright (c) 2003-2011 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class IndexingForm
 * @ingroup controllers_tab_settings_indexing_form
 *
 * @brief Form to edit press general information settings.
 */

import('lib.pkp.classes.form.Form');
import('controllers.tab.settings.form.PressSettingsForm');

class IndexingForm extends PressSettingsForm {

	/**
	 * Constructor.
	 */
	function IndexingForm() {
		$settings = array(
			'searchDescription' => 'string',
			'searchKeywords' => 'string',
			'customHeaders' => 'string'
		);

		parent::PressSettingsForm($settings, 'controllers/tab/settings/indexing/form/indexingForm.tpl');
	}


	//
	// Implement template methods from Form.
	//
	/**
	 * Get all locale field names
	 */
	function getLocaleFieldNames() {
		return array('searchDescription', 'searchKeywords', 'customHeaders');
	}
}

?>