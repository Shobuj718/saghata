


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php'; ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/library/store.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Add New Book <!-- নতুন বই যোগ করুন -->   </h3>
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
                            <input type="text" name="code" class="form-control" placeholder="Enter code no..." id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title/Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="title" class="form-control" placeholder="Enter tile name..." id="" required="required">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Author Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="author" class="form-control" placeholder="Enter Author name..." id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quantity:<font color="red" size="4">*</font> </label>
                            <input type="text" name="quantity" class="form-control" placeholder="How many quantity..." id="" required="required">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Rack No:<font color="red" size="4">*</font> </label>
                            <input type="text" name="rack" class="form-control" placeholder="Enter Rack No..." id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Row No:<font color="red" size="4">*</font> </label>
                            <input type="text" name="row" class="form-control" placeholder="Enter Row No..." id="" required="required">
                        </div>
                    </div>
                    
                </div>

                 <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Type: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="type" required>
                                <option>Academic</option>
                                <option>Story</option>                                         
                                <option>Magazine</option>                                      
                                <option>Other</option>                                         
                            </select>
                        </div>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Class: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option>All</option>
                                <option>Six</option>                                         
                                <option>Seven</option>                                      
                                <option>Eight</option>                                         
                                <option>Nine</option>                                         
                                <option>Ten</option>                                         
                            </select>
                        </div>                        
                    </div>
                 </div>   

                 <div class="row">
                     <div class="col-md-6">
                         <label for="">Description:<font color="red" size="4">*</font></label>
                         <textarea class="form-control" name="description" rows="5" id=""></textarea>
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

