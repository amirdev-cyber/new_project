<?php  include('app/a_header.php') ;


    ?>
    <style>
        .submit-btn {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #45a049;
    }
    </style>
 

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
                            <h6 class="m-0 font-weight-bold text-primary"> qo'shish</h6>
                        </div>
                        <form action="control.php" method="POST">
                        <div class="card-body">
                            <div class="table-responsive">
                                
                               <div class="mb-3">
                                    <label for="name" class="form-label">kim tomonidan</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="heading" class="form-label">sarlavha</label>
                                    <input type="text" name="heading" class="form-control" id="heading" placeholder="">
                                </div>
                              
                                <div class="mb-3">
                                    <label for="malumot" class="form-label">malumot</label>
                                     <textarea class="form-control" name="name" id="name" rows="3"></textarea>
                                </div>
                                <d  iv class="mb-4">
                                    <button type="submit" class="submit-btn">Yuborish</button>
                                </div>
                            </div>
                        </div>
                    </div>
</form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

