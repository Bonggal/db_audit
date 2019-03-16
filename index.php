<?php $path = $_SERVER['DOCUMENT_ROOT'].'/TA2/DBAudit'; ?>
<?php include $path.'/pages/navbars/head.php'; ?>

<?php include $path.'/query/q-index.php'; ?>

<div class="wrapper">

    <?php include $path.'/pages/navbars/top-navbar.php'; ?>
    <?php include $path.'/pages/navbars/left-sidebar.php'; ?>

    <!-- HEADER and BREADCRUMB -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Database Audit: Northwind
                <!-- <small>Optional description</small> -->
            </h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>Home</li>
                <!-- <li class="active">Here</li> -->
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!-- DATABASE ACCESS -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Database Access</h3>
                            <div class="box-tools pull-right">
                                <a href="">View Detail</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="accessChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DDL ACTIVITY -->
            <div class="row">
                <div class="col-xs-4">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">DDL Activity</h3>
                        </div>
                        <div class="box-body">
                            <div class="chart-responsive">
                                <canvas id="ddlTypeChart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Recent DDL</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" height="340">
                                <thead>
                                    <tr>
                                        <th>Event Type</th>
                                        <th>Object Name</th>
                                        <th>Date</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['Type']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Object']?>
                                        </td>
                                        <td>
                                            <?php echo date('jS \of F Y',time($row['Date']))?></br>
                                            <?php echo date('h:i:s A',time($row['Date']))?></br>
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Database Object</h3>
                        </div>
                        <div class="box-body">Line Chart</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include $path.'/pages/navbars/footer.php'; ?>
    <?php include $path.'/pages/navbars/control-sidebar.php'; ?>

</div>
<!-- ./wrapper -->

<?php include $path.'/pages/navbars/required-scripts.php'; ?>

<!-- CHARTS -->
<?php include $path.'/charts/index-charts/index-charts.php'; ?>

<?php include $path.'/pages/navbars/end.php'; ?>