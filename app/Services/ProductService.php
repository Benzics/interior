<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/


class ProductService {
	
	/**
	 * Our model
	 */
	private $_model;

	/**
	 * Sets the model used for this service
	 * @param $model
	 */
	public function set_model($model)
	{
		$this->_model = $model;
	}

	/**
	 * Gets the model used for this service
	 * @return
	 */
	public function get_model()
	{
		return $this->_model;
	}

	/**
	 * Gets products paginated
	 * @param int $limit
	 * @return
	 */
	public function get_products(int $limit = 15)
	{
		$products = $this->_model->orderBy('id', 'DESC')->paginate($limit);

		return $products;  
	}

	/**
	 * Gets all products 
	 * @return
	 */
	public function all_products()
	{
		$products = $this->_model->all();

		return $products;
	}

	/**
	 * Gets a specific product
	 * @param int $product The product id
	 * @return
	 */
	public function get_product(int $product)
	{
		$product = $this->_model->find($product);

		return $product;
	}

	/**
	 * Adds a product to the products table
	 * @param array $data
	 * @return
	 */
	public function add_product(array $data)
	{
		$product = $this->_model->create($data);

		return $product;
	}

	/**
	 * Edit a product
	 * @param array $data
	 * @param int $id
	 * @return
	 */
	public function edit_product(array $data, int $id)
	{
		$product = $this->_model->where('id', $id)->update($data);

		return $product;
	}

	/**
	 * Deletes a product
	 * @param int $product the product id
	 */
	public function delete_product(int $product)
	{
		$delete = $this->_model->where('id', $product)->first()->delete();

		return $delete;
	}
}


