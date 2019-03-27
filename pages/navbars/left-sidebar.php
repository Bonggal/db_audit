<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/TA2/DBAudit/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <!-- <li class="active"><a href="#"><i class="fa fa-list-alt"></i> <span>Link</span></a></li> -->
            <li class="treeview">
                <a href="#"><i class="fa fa-exchange"></i> <span>Database Access</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/TA2/DBAudit/pages/database-access/database-access.php"><i class="fa fa-circle-o"></i>Database Access</a></li>
                    <li><a href="/TA2/DBAudit/pages/database-access/database-usage.php"><i class="fa fa-circle-o"></i>Account Usage</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i><span>Database Objects</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/TA2/DBAudit/pages/database-object/db-tables.php"><i class="fa fa-circle-o"></i>Database Tables</a></li>
                    <li><a href="/TA2/DBAudit/pages/database-object/db-views.php"><i class="fa fa-circle-o"></i>Database Views
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red">1</small>
                            </span>
                        </a>
                    </li>
                    <li><a href="/TA2/DBAudit/pages/database-object/db-functions.php"><i class="fa fa-circle-o"></i>Database Functions</a></li>
                    <li><a href="/TA2/DBAudit/pages/database-object/db-sprocedures.php"><i class="fa fa-circle-o"></i>Database Stored Procedures
                    </a>
                    </li>
                    <li><a href="/TA2/DBAudit/pages/database-object/db-triggers.php"><i class="fa fa-circle-o"></i>Database Triggers</a></li>

                    <!-- <li><a href="/TA2/DBAudit/pages/database-object/db-reference.php"><i class="fa fa-circle-o"></i>Objects Without Reference</a></li> -->
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-line-chart"></i> <span>DDL Activity</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/TA2/DBAudit/pages/database-ddl/ddl-activity.php"><i class="fa fa-circle-o"></i>DDL Activities</a></li>
                    <li><a href="/TA2/DBAudit/pages/database-ddl/ddl-users.php"><i class="fa fa-circle-o"></i>DDL Users</a></li>
                    <li><a href="/TA2/DBAudit/pages/database-ddl/ddl-type.php"><i class="fa fa-circle-o"></i>DDL Types</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-database"></i> <span>DML Activity</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/TA2/DBAudit/pages/database-dml/dml-activity.php"><i class="fa fa-circle-o"></i>DML Activities</a></li>

                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>