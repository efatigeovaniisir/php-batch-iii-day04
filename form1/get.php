<?php 
    // echo $_GET['username'];
    // echo '<br>';
    // echo $_GET['password'];
    // echo '<br>';
    // echo '<br>';

    //===========================================

    // //simpan data kedalam variabel
    // $username = $_GET['username'];
    // $password = $_GET['password'];

    // // tampilkan velue dari variabel
    // echo $username . '<br>';
    // echo $password . '<br>';

    //===========================================

    if(isset($_GET['submit']) && $_GET['submit'] == 'send'){
        echo "Good Work! <br>";
        
        // jika field input username kosong
        if($_GET['username'] == ''){
            echo "Plase input your Username! <br>";
        } else {

            // buat variabel username
            $username = $_GET['username'];

            // menampilkan value dari variabel $username
            echo $username . '<br>';
        }

        // jika field input password kosong
        if($_GET['password'] == ''){
            echo "Plase input your Password! <br>";
        } else {

            // buat variabel password
             $password = $_GET['password'];

            //   tambahkan fungsi md5() untuk enkripsi password
            $passwordMD5 = md5 ($password);

            // menampilkan value dari variabel $password
             echo $password . '<br>';

            //  menampilkan value dari variabel $passwordmd5
            echo $passwordMD5 . '<br>';
        }
    } else {
        echo "Something Wrong!";
    }

    //===========================================







    echo '<a href="index.php">back </a>';
?>