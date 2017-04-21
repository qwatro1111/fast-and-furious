<?php

/**
 * Upload file
 *
 * @author vitarr
 */
class uplImage {

    /**
     * @var array() $imageTypes
     * Should contain possible types of images
     */
    static protected $imageTypes = array(
        'image/jpeg',
        'image/png',
        'image/gif',
    );

    /**
     * @var string $root
     * Should contain name of folder to storage images
     */
    protected $root;

    /**
     * @var string $input
     * Should contain name of input which is used to upload image
     */
    protected $input;

    public function __construct($root, $input) {
        $this->root = $root;
        $this->input = $input;
    }

    /**
     * @param string $root name of folder to storage image
     * This method is used to change $root
     */
    public function setRoot($root) {
        $this->root = $root;
    }

    /**
     * @param string $input name of input which is used to upload image
     * This method is used to change $input
     */
    public function setInput($input) {
        $this->input = $input;
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set($name, $value) {
        $methodName = 'set' . ucfirst($name);
        if (method_exists($this, $methodName)) {
            $this->$methodName($value);
        }
    }

    /**
     * It is used to upload image
     * @return string message for front side of app
     */
    public function uploadImage() {
        
        /**
         * create folder if it not exist
         */
        if (!is_dir($this->root)) {
            mkdir($this->root);
        }
        /**
         * check file send
         */
        if (!$_FILES[$this->input]) {
            $message = 'not_sent';
            /**
             * check file type
             */
        } else if (!in_array($_FILES[$this->input]['type'], self::$imageTypes)) {
            $message = 'invalid_type';
        } else {
            /**
             * upload file
             */
            $file = $_FILES[$this->input];
            $name = $file['name'];
            $tmp_path = $file['tmp_name'];
            $destination_path = $this->root . DIRECTORY_SEPARATOR . $name;
            if (move_uploaded_file($tmp_path, $destination_path)) {
                $url = $destination_path;
            } else {
                $message = 'upload_failed';
            }
            if ($url) {
                $message = 'File was uploaded successfully!';
            }
            $data = $name;
            return $data;
        }
    }

}
