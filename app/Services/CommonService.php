<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/


class CommonService {
	
	private $_model;

	public function set_model($model)
	{
		$this->_model = $model;
	}

	public function get_model()
	{
		return $this->_model;
	}

	/**
	 * Save data to model database
	 * @param array $data
	 * @return
	 */
	public function save(array $data)
	{
		$save = $this->_model->create($data);

		return $save;
	}

	/**
	 * Get a particular data by id
	 * @param int $id
	 * @return
	 */
	public function get(int $id)
	{
		$data = $this->_model->find($id);

		return $data;
	}

	/**
	 * Gets paginated data
	 * @param int $limit = 15
	 * @param string $field = 'id'
	 * @param string $order = 'DESC'
	 * @return
	 */
	public function getPaginated(int $limit = 15, string $field = 'id', string $order = 'DESC')
	{
		$data = $this->_model->orderBy($field, $order)->paginate($limit);

		return $data;  
	}

	/**
	 * Returns all the data in model db
	 * @return
	 */
	public function getAll()
	{
		$data = $this->_model->all();

		return $data;
	}

	/**
	 * Returns the total amount of data in model
	 * @return
	 */
	public function count()
	{
		$count = $this->_model->count();

		return $count;
	}


	/**
	 * Edit data by id
	 * @param array $data
	 * @param $id
	 * @param string $field = id
	 * @return
	 */
	public function edit(array $data, $id, $field = 'id')
	{
		$data = $this->_model->where($field, $id)->update($data);

		return $data;
	}

	/**
	 * Delete data by id
	 * @param $id
	 * @param $field = id
	 * @return
	 */
	public function delete($id, $field = 'id')
	{
		$delete = $this->_model->where($field, $id)->first()->delete();

		return $delete;
	}
}


