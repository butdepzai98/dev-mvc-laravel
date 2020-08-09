<?php
namespace App\classes;

class UploadFile
{
    protected $fileName;
    protected $maxFileSize = 2097152;
    protected $extention;
    protected $path;

    /**
     * Get the value of fileName
     */ 
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     * @param $file
     * @param string $name
     */
    public function setFileName($file, $name = "")
    {
        if($name === "")
        {
            $name = pathinfo($file, PATHINFO_FILENAME);
        }

        $name = strtolower(str_replace(['-',''], '-', $name));
        $hash = md5(microtime());
        $extention = $this->setFileExtention($file);

        $this->fileName = "{$name}-{$hash}-{$extention}";
    }

    /**
     * Gán extention cho File
     *
     * @param [file] $file
     * @return mixed
     */
    protected function setFileExtention($file)
    {
        return $this->extention = pathinfo($file, PATHINFO_EXTENSION);
    }
    

    /**
     * Validate Size của File
     * @param [file] $file
     * @return mixed
     */
    public function validFileSize($file)
    {
        $fileObj = new static;
        return ($file > $fileObj->maxFileSize) ? true : false ;
    }
    

    /**
     * Valide xem phải ảnh Không ?
     *
     * @param [type] $file
     * @return boolean
     */
    public function isImage($file)
    {
        $fileObj = new static;
        $extention = $fileObj->setFileExtention($file);

        $validExt = ['jpg', 'jpeg', 'png', 'bmp', 'gif'];

        if(!in_array(strtolower($extention), $validExt))
        {
            return false;
        }
        return true;
    }

    /**
     * Get where File was upload to
     *
     * @return void
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Move file to Location
     * @param $temp_path
     * @param $folder
     * @param $file
     * @param string $newName
     * @return UploadFile
     */
    public function move($temp_path, $folder, $file, $newName = '')
    {
        $fileObj = new static;
        $ds = DIRECTORY_SEPARATOR;

        $fileObj->setFileName($file, $newName);
        $file_name = $fileObj->getFileName();

        if(!is_dir($folder))
        {
            //Set quyền 
            mkdir($folder, 0777, true);
        }

        $fileObj->path = "{$folder}{$ds}{$file_name}";
        $absolute_path = REAL_PATH . "{$ds}public{$ds}$fileObj->path";

        if(move_uploaded_file($temp_path, $absolute_path))
        {
            return $fileObj;
        }
    }
}