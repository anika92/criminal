<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css">
    <link rel="stylesheet" type="text/css" href="Resource/bootstrap/js/bootstrap.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#about" >Home</a>
                </li>
                <li>
                    <a href="#about">Missing Person</a>
                </li>
                <li>
                    <a href="#services">Most Wanted</a>
                </li>
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register As <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="views/police/regPolice.php">Police</a></li>
                        <li><a href="views/user/regUser.php">Public</a></li>

                    </ul>
                </li>
            </ul>
            <ul class="dropdown-menu">Register As
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Width Image Header -->
<header class="header-image">
    <div class="headline">
        <div class="container">

            <h2>Welcome To Criminal Management System</h2>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-md-8">




            <!-- First Featurette -->

            <img class="featurette-image img-circle img-responsive pull-right" src="Resources/images/content.jpg">
            <h2 class="featurette-heading">This First Heading
                <span class="text-muted">Will Catch Your Eye</span>
            </h2>
            <p class="lead">Welcome To Criminal Database Management System. It is designed to Make people aware from crime. Here People can make online complaints to the Police Station. In order to do so first they have to register themselves on the system.
                User can also see the list of Most Wanted Criminals in various area through this web application. Here you can also see the detail of Miising person so you can contact to the person if you find such persons.</p>
        </div>
        <div class="col-md-4">

            <h2>Member Login</h2>

            <form action="login.php" class="" method="post">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="mail" name="email" class="form-control" id="email" placeholder="Enter Email Address">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label>Select User</label>
                    <select name="thana" class="form-control" id="city">
                        <option>Select User</option>
                        <option value="User">User</option>
                        <option value="Police">Police</option>
                        <option value="Admin">Admin</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-default">Submit</button>

                <!-- <label><span class="style1">Username</span></label>
                 <input type="text" value="" name="username" size="10" class="input_field" title="username" /><br>
                 <label><span class="style1">Password</span></label>
                 <input type="password" value="" name="password" class="input_field" title="password" /><br>
                 <label><span class="style1">Select User</span></label>

                 <label>
                     <select name="cmbUser" id="cmbUser">
                         <option>User</option>
                         <option>Police</option>
                         <option>Admin</option>
                     </select>
                 </label><br>
                 <input type="submit" name="login" value="Login" alt="login" id="submit_btn" title="Login" />
 -->
            </form>
            <div class="cleaner"></div>

        </div>

    </div>

    <hr class="featurette-divider">

    <!-- Second Featurette -->



    <!-- Third Featurette -->


    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->

</body>

</html>
