<?php
include('doc_db.php');

$docmed = "SELECT * FROM doctors ORDER BY id DESC ";
$respons=$conn->query($docmed);
$conn->close()
?>
    

<?php  include('app/a_header.php') 

?>
      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Yangiliklar</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->

                    <!-- alert success -->
                        <?php
                            if(isset($_GET['message'])){
                                $message=$_GET['message'];
                                                   
                                                   echo  '  <div class="alert alert-success" role="alert">
                                                   '.$message.'
                                                    </div>' ;

                            }
                        ?>
                     <!-- end alert -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><a href="create2.php">+ yangilik qo'shish</a></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>Name</th>
                                            <th>Job</th>
                                      
                             
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       <?php foreach($respons as $item):?>
         <tr>
                <td><?=$item["image"]?></td>
                <td><?=$item["name"]?></td>
                <td><?=$item["j_type"]?></td>
 
               
                <td class="action-buttons">
                <form action="edit2.php" method=POST>
                <input type="hidden" value="<?=$item['id']?>" name="doc_id" >
                  <button title="edit">edit<i class="fas fa-eye"></i></button>
                </form>
                  <form action="delete2.php" method=POST>
                    <input type="hidden" value="<?=$item['id']?>" name="docmed3" >
                  <button title="Delete">Delete<i class="fas fa-trash"></i></button>
                  </form>
                 
                </td>
              </tr> 
        
    
        <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
include('app/a_footer.php')
?>
          
