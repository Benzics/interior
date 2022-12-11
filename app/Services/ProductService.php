<?php
namespace App\Services;

use App\Models\Product;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/


class ProductService {
	
	/**
	 * Gets products paginated
	 * @param int $limit
	 * @return
	 */
	public function get_products(int $limit = 15)
	{
		$products = Product::paginate($limit);

		return $products;
	}

	/**
	 * Gets all products 
	 * @return
	 */
	public function all_products()
	{
		$products = Product::all();

		return $products;
	}

	/**
	 * Gets a specific product
	 * @param int $product The product id
	 * @return
	 */
	public function get_product(int $product)
	{
		$product = Product::find($product);

		return $product;
	}

	/**
	 * Adds a product to the products table
	 * @param array $data
	 * @return
	 */
	public function add_product(array $data)
	{
		$product = Product::create($data);

		return $product;
	}
}


