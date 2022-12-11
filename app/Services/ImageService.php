<?php
namespace App\Services;

/**
*Automatically generated service
*Author: Benjamin Ojobo
*https://github.com/benzics
*/

use App\Models\Image;

class ImageService {
	//your methods here

	/**
	 * Save an image to the db
	 * @param string $name The image name
	 * @param int $product_id The product id
	 */
	public function save_image(string $name, int $product_id)
	{
		$save = Image::create([
			'name' => $name,
			'product_id' => $product_id,
		]);

		return $save;
	}

	
}


