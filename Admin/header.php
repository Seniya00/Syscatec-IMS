<!DOCTYPE html>
<html lang="en">
<head>
    <title>SyscaTec</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link rel="stylesheet" href="css/sidebar.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header">

    <h2 style="color: white;position: absolute">
        <a href="dashboard.html" style="color:white; margin-left: 10px; margin-right: 10 px; margin-top: 40px; padding-right: 10px;">SyscaTec IMS </a>
    </h2>
</div>



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i
                    class="icon icon-user"></i> <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>


    </ul>
</div>

<!--sidebar-menu-->
<div class="sidebar" id="sidebar">
    <ul>
        <li class="sidebar">
            <a href="index.html"><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>
        <li >
            <a href="add_new_user.php"><i class="icon icon-user"></i><span>Add New User</span></a>
        </li>
        <li >
            <a href="addnewcustomer.php"><i class="icon icon-plus"></i><span>Add New Customer</span></a>
        </li>

        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Add Item</span> </a>
            <ul>
                <li><a href="addrow.php"><i class="icon icon-plus"></i>Add Single Item</a></li>
                <li><a href="addcomposite.php"><i class="icon icon-plus"></i>Add Composite Item</a></li>
                
        </li>

    </ul>
</div>
<!--sidebar-menu-->
<div id="search">

        <a href="index.html" style="color:white"><i class="icon icon-share-alt"></i><span>LogOut</span></a>

</div>