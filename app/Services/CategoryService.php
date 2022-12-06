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

	/**
	 * Gets all categories
	 * @return
	 */
	public function get_categories()
	{
		$categories = Category::all();

		return $categories;
	}

	/**
	 * Creates a category
	 * @param string $name
	 */
	public function create_category(string $name)
	{
		$category = Category::create(['name' => $name]);

		return $category;
	}

	/**
	 * Get a specific category from the db
	 * @param int $category The category id
	 * @return
	 */
	public function get_category(int $category)
	{
		$category = Category::find($category);

		return $category;
	}

	/**
	 * Edit a category
	 * @param string $name The category name
	 * @param int $category The category id
	 * @return
	 */
	public function edit_category(string $name, int $category)
	{
		$category = Category::where('id', $category)->update(['name' => $name]);

		return $category;
	}

	/**
	 * Deletes a category
	 * @param int $category Id
	 */
	public function delete_category(int $category)
	{
		$delete = Category::destroy($category);

		return $delete;
	}
}


