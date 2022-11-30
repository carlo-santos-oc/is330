<?php
include_once 'header.php';
?>


<div class="container" style="background-color: #FFFFFF;">
    <div class="row" style="padding-bottom: 2em;">
        <div class="col-sm-12">
            <img class="img-fluid" src="images/banner-g914925099_1920.jpg" alt="">
            <h1 style="text-align: center; font-size: 8em">&#8800;Cap News</h1>
            <h2 style="text-align: center;">Login</h2>
        </div>
    </div>
    <div class="row" style="padding-bottom: 4em;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="login-sc.php" method="post">
                <!-- <div class="form-group">
                    <input type="text" name="name" placeholder="name">
                </div> -->
                <div class="form-group">
                    <input style="width: 100%;" type="text" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input style="width: 100%;" type="password" name="pwd" placeholder="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</div>
</body>

</html>