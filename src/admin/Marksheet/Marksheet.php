<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 09-Dec-17
 * Time: 11:10 AM
 */



namespace App\Admin\Marksheet;

if(!isset($_SESSION)){
    session_start();
}


use App\Connection;
use PDO;
use PDOException;

class Marksheet extends Connection
{

    private $news;
    private $details;
    private $image;
    private $unique_id;

    public function set($data = array())
    {
        if(array_key_exists('news', $data)){
            $this->news = $data['news'];
        }
        if(array_key_exists('details', $data)){
            $this->details = $data['details'];
        }
        if(array_key_exists('image', $data)){
            $this->image = $data['image'];
        }
        if(array_key_exists('unique_id', $data)){
            $this->unique_id = $data['unique_id'];
        }
        return $this;
    }



    //select data from database
    public function pdfDownload($query){
        $result =$this->con->prepare($query);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
 

    

}