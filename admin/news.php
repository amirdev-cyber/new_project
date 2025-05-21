<?php
include('doc_db.php');

$docmed = "SELECT * FROM docmed";
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><a href="create_news.php">+ yangilik qo'shish</a></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php foreach($respons as $item):?>
         <tr>
                <td><?=$item["name"]?></td>
                <td><?=$item["position"]?></td>
                <td><?=$item["office"]?></td>
                <td><?=$item["age"]?></td>
                <td><?=$item["start_date"]?></td>
                <td class="action-buttons">
                <form action="view.php" method=POST>
                <input type="hidden" value="<?=$item["name"]?>" name="docmed" >
                  <button title="View">View<i class="fas fa-eye"></i></button>
                  <form action="delete.php" method=POST>
                    <input type="hidden" value="<?=$item["name"]?>" name="docmed" >
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

          

         <?php  include('app/a_footer.php')?>