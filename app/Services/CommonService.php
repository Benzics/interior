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
	 * Get a particular data
	 * @param $id
	 * @param string $field = id
	 * @return
	 */
	public function get($id, string $field = 'id')
	{
		$data = $this->_model->where($field, $id)->first();

		return $data;
	}

	/**
	 * Gets paginated data
	 * @param int $limit = 15
	 * @param string $field = 'id'
	 * @param string $order = 'DESC'
	 * @param array $where
	 * @return
	 */
	public function getPaginated(int $limit = 15, string $field = 'id', string $order = 'DESC', array $where = [])
	{
		$data = $this->_model;
		if(!empty($where)) $data = $data->where($where);

		$data = $data->orderBy($field, $order)->paginate($limit);

		return $data;  
	}

	/**
	 * Returns all the data in model db
	 * @param array $where An array containing arrays of conditions ['column', 'operator', 'value']
	 * @param int $limit
	 * @param string $orderBy
	 * @param string $order
	 * @return
	 */
	public function getAll($where = [], int $limit = null, string $orderBy = null, string $order = null)
	{
		$data = $this->_model;
		
		if(!empty($where)) $data = $data->where($where);

		if(!is_null($order) && !is_null($orderBy)) $data = $data->orderBy($orderBy, $order);

		if(!is_null($limit)) return $data->paginate($limit);

		return $data->all();

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


