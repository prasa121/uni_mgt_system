    <?php
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    
    if (!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    ?>
    <script type="text/javascript">location.href = 'login.php';</script>
    <?php
   
    exit();
    }
    
    ?>