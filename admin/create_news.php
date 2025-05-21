<?php  include('app/a_header.php') ;


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
                            <h6 class="m-0 font-weight-bold text-primary"> qo'shish</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                               <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">kim tomonidan</label>
                                    <input type="text" name="author" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">sarlavha</label>
                                    <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                              
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">malumot</label>
                                     <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php  include('app/a_footer.php')  ?>