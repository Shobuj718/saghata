<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 09-Dec-17
 * Time: 11:10 AM
 */



namespace App\Admin\News;

if(!isset($_SESSION)){
    session_start();
}


use App\Connection;
use PDO;
use PDOException;

class News extends Connection
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
    public function select($query){
        $result =$this->con->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function newsSelect($id){
    	try{
    		$stmt = $this->con->prepare('SELECT * FROM `top_news` WHERE unique_id = :id');
    		$stmt->bindValue(':id', $id, PDO::PARAM_STR);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);

    	}
    	catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }

    public function editnews($id){
        try {

            $stmt = $this->con->prepare('select * from top_news where unique_id = :id ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::PARAM_STR);

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage(). "<br />";
            die();
        }
    }

    public function update(){
        try {
            $stmt = $this->con->prepare('update top_news set news = :news, details = :details, image = :image where unique_id = :unique_id ');
            $stmt->bindValue(':news',  $this->news, PDO::PARAM_STR);
            $stmt->bindValue(':details', $this->details, PDO::PARAM_STR);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
            $stmt->bindValue(':unique_id', $this->unique_id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['newsUpdate'] = "News Updated Successfully ";
                echo "<script>window.location='allnews.php';</script>";
            }
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage. "<br />";
            die();
        }
    }

    //news deleted and going to trash...
    public function delete($id){
        try {
            $stmt = $this->con->prepare('update top_news set status = :status where unique_id = :id');
            $stmt->bindValue(':status', 2, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            if($stmt){
                $_SESSION['newsDelete'] = "News Deleted Successfully. ";
                echo "<script>window.location='allnews.php'</script>";
            }
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage(). "<br />";
            die();
        }
    }
    //news deleted and going to trash...
    public function deleteslide($id){
        try {
            $stmt = $this->con->prepare('update slide set status = :status where unique_id = :id');
            $stmt->bindValue(':status', 2, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            if($stmt){
                $_SESSION['newsDelete'] = "News Deleted Successfully. ";
                echo "<script>window.location='allslide.php'</script>";
            }
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage(). "<br />";
            die();
        }
    }

    

}