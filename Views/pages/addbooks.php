        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Books Add</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Books Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form name="addbooks" action="<?php echo SITE_PATH; ?>Addbooks" method="post" >
	                                <div class="col-lg-6">
	                                        <div class="form-group">
	                                            <label>Name</label>
	                                            <input class="form-control" name="book_name" placeholder="Name">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Author Name</label>
	                                            <input class="form-control" name="auth_name" placeholder="Author Name">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Publisher Name</label>
	                                            <input class="form-control" name="publisher_name" placeholder="Publisher Name">
	                                        </div>
	                                        <input type="submit" value="Submit" class="btn btn-default" name="submitbook">
	                                </div>
	                                <!-- /.col-lg-6 (nested) -->
	                                <div class="col-lg-6">
	                                		<div class="form-group">
	                                            <label>ISBN Number</label>
	                                            <input class="form-control" name="isbn_number" placeholder="ISBN Number">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Price</label>
	                                            <input class="form-control" name="price" placeholder="Price">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Amount</label>
	                                            <input class="form-control" name="amount" placeholder="Amount">
	                                        </div>
	                                </div> 
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
