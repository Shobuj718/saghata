<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';

use App\admin\Library\Library;

$library = new Library();

$id = $_GET['edit'];
$result = $library->editBook($id);
// var_dump($result);
// die();


 ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/library/update.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">বই সংশোধন করুন <!-- নতুন বই যোগ করুন -->   </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                    unset($_SESSION['error']);
                }

            ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Code/ISBN No:<font color="red" size="4">*</font> </label>
                            <input type="text" name="code" class="form-control" value="<?= $result['code'];  ?>" id="" required="required">
                            <input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title/Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="title" class="form-control" value="<?= $result['title']; ?>" id="" required="required">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Author Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="author" class="form-control" value="<?= $result['author']; ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quantity:<font color="red" size="4">*</font> </label>
                            <input type="text" name="quantity" class="form-control" value="<?= $result['quantity']; ?>" id="" required="required">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Rack No:<font color="red" size="4">*</font> </label>
                            <input type="text" name="rack" class="form-control" value="<?= $result['rack']; ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Row No:<font color="red" size="4">*</font> </label>
                            <input type="text" name="row" class="form-control" value="<?= $result['row']; ?>" id="" required="required">
                        </div>
                    </div>
                    
                </div>

                 <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Type: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="type" required>
                                <option <?= $result['type']=='Academic'?'selected':'' ?> value="Academic" >Academic</option>
                                <option <?= $result['type']=='Story'?'selected':'' ?> value="Story" >Story</option>                                         
                                <option <?= $result['type']=='Magazine'?'selected':'' ?> value="Magazine" >Magazine</option>                                      
                                <option <?= $result['type']=='Other'?'selected':'' ?> value="Other" >Other</option>                                         
                            </select>
                        </div>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Class: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option <?= $result['type']=='All'?'selected':'' ?> value="All" >All</option>
                                <option <?= $result['type']=='Six'?'selected':'' ?> value="Six" >Six</option>                                         
                                <option <?= $result['type']=='Seven'?'selected':'' ?> value="Seven" >Seven</option>                                      
                                <option <?= $result['type']=='Eight'?'selected':'' ?> value="Eight" >Eight</option>                                         
                                <option <?= $result['type']=='Nine'?'selected':'' ?> value="Nine" >Nine</option>                                         
                                <option <?= $result['type']=='Ten'?'selected':'' ?> value="Ten" >Ten</option>                                         
                            </select>
                        </div>                        
                    </div>
                 </div>   

                 <div class="row">
                     <div class="col-md-6">
                         <label for="">Description:<font color="red" size="4">*</font></label>
                         <textarea class="form-control" name="description" rows="5" id=""><?= $result['description']; ?></textarea>
                     </div>
                 </div>
                 
                 <br>

                <div class="form-group">
                    <input type="submit" name="submit"  class="btn btn-primary"  value="Add Book" id="">
                </div>

            </form>
        </div>
    </div>
  </div>
</div>




<?php  include '../includes/footer.php' ?>

