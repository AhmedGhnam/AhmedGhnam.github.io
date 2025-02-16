<?php

// $noNavbar = "";
$noFooter = "";

    include ('templates/header.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

?>
<div class="container">
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="code-form" method="POST">
            <div class="form-group">
                <label for="" class="form-label">الاسم</label>
                <input type="text" class="form-control form-control-lg" name="username">
            </div>
            <label for="" class="form-label">الكود</label>
            <input type="password" class="form-control form-control-lg" name="passCode">
            <input type="submit" class="btn btn-primary" value="دخول">
        </form>
    </div>
</div>

<?php } ?>




<?php include('templates/footer.php') ?>