<?php
include "header.php";
include "connection.php";
?>
<?php
 $sname ="localhost";
 $uname="root";
 $password="";
 $db_name ="protomed";
 $connect = mysqli_connect($sname, $uname,  $password, $db_name);

 $query = "SELECT * FROM `additems`";
 $result1=mysqli_query($connect,$query);
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add Row Metirial</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Composite Item </h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form2" action="" method="post" class="form-horizontal"> 
            <div class="control-group">
              <label class="control-label">Product Code</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="10500" name="itemcode"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product  Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="enter the name" name="itemname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Unit</label>
              <div class="controls">
               <select name="unit">
                   <option> kg</option>
                   <option> g</option>
                   <option> pcs</option>
               </select>
              </div>
            </div>
            <div class="card-header">
                        <h4 style=" margin-left: 13%;"> Used Items
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary"style=" margin-left: 78%;">Add Item </a>
                        </h4>
                    </div>
                    <div class="card-body">
                            <div class="main-form mt-3 border-bottom">
                                <div class="row" style="display:none">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for=""> Item Name</label>
                                            <select name="iname[]" id=""></select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Amount</label>
                                            <input type="text" name="amount[]" class="form-control" required placeholder="Enter the amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Unit</label>
                                            <select name="unit[]" >
                                            <option value="kg">Kg</option>
                                            <option value="g">g</option> 
                                            <option value="pcs">Pcs</option>   
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="paste-new-forms"></div>
</form>
                
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click','.add-more-form', function () {
                $('.paste-new-forms').append('<form action="code.php" method="POST"><div class="main-form mt-3 border-bottom"style="margin-left:50px;">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Item Name</label>\
                                            <select name="iname">\
                                            <?php while($row1= mysqli_fetch_array($result1)):;?>
                                            <option>  <?php  echo $row1[1]?></option>\
                                            <?php endwhile?>
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Amount</label>\
                                            <input type="text" name="amount" class="form-control" required placeholder="Enter the amount">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">unit</label>\
                                            <select name="unit" >\
                                            <option>Kg</option>\
                                            <option>g</option>\
                                            <option>Pcs</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger"style="margin-bottom:50px;">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div> <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Product</button>\
                            </form>');
            });

        });
    </script>



<?php
include "footer.php";
?>
