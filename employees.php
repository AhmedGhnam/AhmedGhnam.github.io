<?php
    ob_start();
    session_start();

    include('init.php');
    include ( $lay . 'header.php');

$noNavbar = "";
// $noFooter = "";
    if(isset($_SESSION['UserName'])) {
        // header('Location : index.php');

    } else {

    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['loginName'];
        $password = $_POST['loginPass'];
        
        $stmt = $starCon->prepare('SELECT
                                                UserName, ID, PassWord, GroupId
                                            FROM
                                                users 
                                            WHERE
                                                UserName = ? 
                                            AND PassWord = ?
                                            AND GroupId = 0
                                            LIMIT 1');
        $stmt->execute(array($username, $password));
        $count = $stmt->rowCount();


        if($count > 0) {
            $_SESSION['UserName'] = $username;
            $_SESSION['PassWord']   = $password;
            header('Location: index.php');
            exit();
        }          



    }

    $stmt2 = $starCon->prepare('SELECT * FROM users');
    $stmt2->execute();
    $users = $stmt2->fetchAll();

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
                        <select name="loginName">
                            <?php 
                            foreach($users as $user) {
                                if($user['SignStatus'] == 1) {
                                    echo '<option value=\'';
                                        if($user['SignStatus'] == 1) {echo $user['UserName'];}
                                        echo '\'>'; 
                                        if($user['SignStatus'] == 1) {echo $user['UserName'];}
                                    echo '</option>';
                                }
                            }
                            ?>
                        </select> 
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="loginPass" placeholder="كلمة السر" autocomplete="new-password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="تسجيل الدخول">
                </form>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="signUp" method="POST">
                    <div class="form-group">
                        <select name="signupName">
                            <?php 
                                foreach($users as $user) {
                                    if($user['SignStatus'] == 0) {
                                        echo '<option value=\'';
                                            if($user['SignStatus'] == 0) {echo $user['UserName'];}
                                            echo '\'>'; 
                                            if($user['SignStatus'] == 0) {echo $user['UserName'];}
                                        echo '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="signupPass" placeholder="كلمة السر" autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="signupPass" placeholder="كلمة السر الجديدة" autocomplete="new-password">
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="انشاء حساب">
                </form>
            </div>
        </div>
    </div>
</div>




<?php
    }
    include( $lay . 'footer.php');
    ob_end_flush(); 
?>