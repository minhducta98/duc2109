
      
<?php
$category_add = true;
require_once "layouts/header.php";
?>
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                               Add news
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i> </i>  <a href="">Danh mục</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm mới
                                </li>
                            </ol>
 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                             <form class="form-horizontal" action="" method ="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên danh mục" name="name">
        </div>

        <?php  if (isset ($error['name'])): ?>
            <p class="text-danger"> <?php echo $error['name']?> </p>
            
        <?php endif ?>

    </div>

    
   
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </div>
</form> 
                        </div>
                    </div>

   <?php require_once "layouts/footer.php";?>                 
 