<?php

class Filestore {


    public $filename = '';

    // private $is_csv = FALSE;

    public function __construct($location = '') 
    {
        // Sets $this->filename
        $this->filename = $location;
    
        // if (substr($filename, -3) == 'csv') {
        //   $this->is_csv = TRUE;
        // }
    }

    /**
     * Returns array of lines in $this->filename
     */

    function read_lines(){
        $filesize = filesize($this->filename);
        if($filesize > 0) {
            $handle = fopen($this->filename, "r");
            $contents = fread($handle, $filesize);
            fclose($handle);

            return explode("\n", $contents);
        }
        else
        {
            return array();
        }

    }

    /**
     * Writes each element in $array to a new line in $this->filename
     */
    function write_lines($array){
        $handle = fopen($this->filename, "w");
        $save_list = implode ("\n", $array);
        fwrite($handle, $save_list);
        fclose($handle);
    }

    /**
     * Reads contents of csv $this->filename, returns an array
     */
    function read_csv()
    {
        if(filesize ($this->filename) > 0) {
            $handle = fopen($this->filename, "r");
            while(($data = fgetcsv($handle)) !==FALSE) {
                $contents[] = $data;
            }
            fclose($handle);

            return $contents;
        }
        else
        {
            return array();
        }
    }

    /**
     * Writes contents of $array to csv $this->filename
     */
    function write_csv($arrays)
    {
        $handle = fopen($this->filename, "w");
        foreach ($arrays as $array) {
            fputcsv($handle, $array);
        }
        fclose($handle);
    }

}