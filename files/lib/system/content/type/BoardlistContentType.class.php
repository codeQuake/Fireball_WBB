<?php
namespace cms\system\content\type;

use cms\data\content\Content;
use wbb\data\board\DetailedBoardNodeList;
use wcf\system\WCF;

/**
 *
 * @author Jens Krumsieck
 * @copyright codeQuake 2014
 * @package de.codequake.cms
 * @license GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 */
class BoardlistContentType extends AbstractContentType {

	protected $icon = 'icon-folder-open';

	public $objectType = 'de.codequake.cms.content.type.boardlist';

	public function getFormTemplate() {
		return 'boardlistContentType';
	}

	public function getOutput(Content $content) {
		$boardNodeList = new DetailedBoardNodeList();
		$boardNodeList->readNodeTree();
		WCF::getTPL()->assign(array(
			'boardNodeList' => $boardNodeList->getNodeList()
		));
		return WCF::getTPL()->fetch('boardNodeListContainer', 'wbb');
	}
}
