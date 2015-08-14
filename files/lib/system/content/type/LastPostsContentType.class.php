<?php
namespace cms\system\content\type;

use cms\data\content\Content;
use wbb\data\thread\CMSLatestPostsList;
use wcf\system\WCF;

/**
 *
 * @author Jens Krumsieck
 * @copyright codeQuake 2014
 * @package de.codequake.cms
 * @license GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 */
class LastPostsContentType extends AbstractContentType {

	protected $icon = 'icon-folder-close';

	public $objectType = 'de.codequake.cms.content.type.lastposts';

	public function getFormTemplate() {
		return 'lastPostsContentType';
	}

	public function getOutput(Content $content) {
		$postList = new CMSLatestPostsList($content->limit);
		$postList->readObjects();
		$posts = $postList->getObjects();
		
		WCF::getTPL()->assign(array(
			'postList' => $posts
		));
		return WCF::getTPL()->fetch('lastPostsContentTypeOutput', 'cms');
	}
}
