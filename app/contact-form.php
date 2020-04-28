<?php
    if(isset($_POST['submit'])) { //True, jei submit nuspaustas
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subjectInfo = trim($_POST['subject']);
        $message = trim($_POST['message']);
        
        //Tikrinam ar yra NOT empty ir tada siunčiam emailą
        if (!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "lukas.birgiolas@gmail.com";
                $subject = $subjectInfo;
                $user = 'Nuo: '. $name. ', '. $email;
                $msg = htmlspecialchars($message);
                mail($to, $subject, $user, $msg, $from);
                echo "<script>alert('Dėkojame. Jūsų žinute gauta. Netrukus susisieksime.');</script>";
            }
        }
    include('db.php');
    }
?>