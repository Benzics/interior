<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageService {
	//your methods here

	/**
	 * Save an image to the db
	 * @param string $name The image name
	 * @param int $product_id The product id
	 * @param bool $apartment
	 */
	public function save_image(string $name, int $product_id, bool $apartment = false)
	{

		$data = [
			'name' => $name,
		];

		if($apartment)
		{
			$data['apartment_id'] = $product_id;
		}
		else
		{
			$data['product_id'] = $product_id;
		}
		
		$save = Image::create($data);

		return $save;
	}

	/**
	 * Deletes an image from the db and disk
	 * @param $id The image id
	 * @return
	 */
	public function delete_image($id)
	{
		$image = $this->get_image($id);

		if(!$image) return;

		// delete this image from our disk
		Storage::disk('my_files')->delete($image->name);

		// delete image from database
		Image::destroy($id);
	}

	/**
	 * Gets an image from the db
	 * @param int $id Image id
	 * @return
	 */
	public function get_image(int $id)
	{
		$image = Image::find($id);

		return $image;
	}
}


