<?php

/**
 * Ushahidi Platform Entity Search Use Case
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Core\Usecase\Post;

use Ushahidi\Core\Usecase\SearchUsecase;

class UpdatePostBulk extends SearchUsecase
{
	// - VerifyParentLoaded for checking that the parent exists
	use VerifyParentLoaded;

	// Usecase
	public function isSearch()
	{
		return false;
	}

}
