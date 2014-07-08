<?php
namespace cms\system\content\type;

use cms\data\content\Content;
use wcf\system\WCF;

/**
 *
 * @author Jens Krumsieck
 * @copyright codeQuake 2014
 * @package de.codequake.cms
 * @license GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 */
class BoardlistContentType extends AbstractContentType {

	protected $icon = 'icon-archive';

	public $objectType = 'de.codequake.cms.content.type.boardlist';

	public function getFormTemplate() {
		return '<p class="info">'.WCF::getLanguage()->get('cms.acp.content.type.de.codequake.cms.content.type.boardlist.description').'</p>';
	}

	public function getOutput(Content $content) {

	}
}
