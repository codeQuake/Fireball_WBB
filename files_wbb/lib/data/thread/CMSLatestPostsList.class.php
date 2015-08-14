<?php
namespace wbb\data\thread;

/**
 * Represents a list of the latest posts.
 * 
 * @author	Florian Gail
 * @copyright	2015 codeQuake
 * @license	GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 * @package	de.codequake.cms
 */
class CMSLatestPostsList extends LatestPostsList {
	/**
	 * Creates a new LatestPostsList object.
	 * 
	 * @see	\wbb\data\thread\LatestPostsList::__construct()
	 */
	public function __construct($sqlLimit) {
		$this->sqlLimit = $sqlLimit;
		
		parent::__construct();
	}
}
