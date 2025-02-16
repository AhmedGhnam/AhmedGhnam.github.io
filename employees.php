<?php

// $noNavbar = "";
$noFooter = "";

    include ('templates/header.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

?>
<div dir="rtl" class="container">
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="code-form" method="POST">
            <h4 class="text-center">مستخدم جديد</h4>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="username" placeholder="الاسم">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="passCode" placeholder="الكود">
            </div>
            <input type="submit" class="btn btn-primary btn-lg" value="دخول">
        </form>
    </div>
</div>

<?php } ?>




<?php include('templates/footer.php') ?>