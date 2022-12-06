<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryService {
	
	/**
	 * Gets all product categories paginated
	 * @param int $limit = 15
	 * @return Illuminate\Pagination\LengthAwarePaginator;
	 */
	public function all_categories(int $limit = 15) : LengthAwarePaginator
	{
		$categories = Category::paginate($limit);

		return $categories;
	}
}


