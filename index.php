<?php 
    ob_start();
    session_start();

    include('init.php');
    include($lay . 'header.php');

    

?>

    
    <div class="category-holder">
        <ul class="adel">
            <div class="row">
                <li class="col-sm-1">بقالة بالوزن</li>
                <li class="col-sm-1">بقالة جافة</li>
                <li class="col-sm-1">مجمدات</li>
            </div>
        </ul>
    </div>
    
    
    
    
    
    
    <?php 
        include( $lay . 'footer.php'); 
        ob_end_flush();
    ?>

</html>