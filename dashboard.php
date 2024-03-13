<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login successful !!!</h1>
    <h1>Here is all the account information</h1>
    <?php
    // Database connection
    // Tạo connection với database
    //localhost là server, root là username, Chanh123456* là password, std là tên database
    $connection = mysqli_connect('localhost', 'root', 'Chanh123456*', 'users');
    //Kiểm tra kết nối
    if(!$connection){
        //Nếu kết nối không thành công thì hiển thị thông báo lỗi
        die("Database connection failed");
    } else {
        //Nếu kết nối thành công thì hiển thị thông báo thành công
        echo "Connected to database";
    }

    //Lấy dữ liệu từ database
    $query = "SELECT * FROM user";
    //Thực hiện truy vấn
    $stmt =  mysqli_query($connection, $query);
    echo "<br>";
    //Hiển thị dữ liệu
    if (mysqli_num_rows($stmt) > 0) {
        // Với mỗi dòng dữ liệu, hiển thị id, tên và họ
        echo "username: " . "password". "<br>";
        while($row = mysqli_fetch_assoc($stmt)) {
            echo  $row["username"]. "|". $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    //Đóng kết nối
    mysqli_close($connection);
    ?>
</body>
</html>