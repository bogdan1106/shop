<?php
/**
 * Created by PhpStorm.
 * User: Barbaros
 * Date: 17.11.2020
 * Time: 16:30
 */

namespace App\Traits;


trait UploadImage
{

    public function uploadImage($image)
    {
        if ($image == null) return ;
        $this->deleteOldImg();
        $imageName = time().'.'.$image->getClientOriginalExtension();
        request()->image->move(public_path(self::IMAGE_PATH), $imageName);
       return $this->image = $imageName;
    }


    public function getImgPath()
    {
        return self::IMAGE_PATH . $this->image;
    }


    public function deleteOldImg()
    {
        if ($this->image != null)
        {
            if(file_exists(public_path($this->getImgPath() )))
            {
                unlink(public_path($this->getImgPath()));
            }
        }
    }

}