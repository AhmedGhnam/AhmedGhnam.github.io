<?php

// $noNavbar = "";
// $noFooter = "";
    include('init.php');

    include ( $lay . 'header.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        

?>
<div class="employees-form">
    <div class="overlay">
        <div class="container">
            <div class="form-container">
                <h1>
                    <span class="s" data-class="signUp">مستخدم جديد</span> | 
                    <span class="l selected" data-class="login">تسجيل الدخول</span>
                </h1>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="login" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="loginName" placeholder="الاسم" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="loginPass" placeholder="كلمة السر" autocomplete="new-password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="تسجيل الدخول">
                </form>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="signUp" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="signupName" placeholder="الاسم" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="signupPass" placeholder="كلمة السر" autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="signupPass" placeholder=" تأكيد كلمة السر" autocomplete="new-password">
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="انشاء حساب">
                </form>
            </div>
        </div>
    </div>
</div>
<?php  } ?>




<?php include( $lay . 'footer.php') ?>