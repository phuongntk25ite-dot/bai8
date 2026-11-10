<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thử nghiệm CKEditor 4</title>
    <!-- Nhúng CKEditor 4 trực tiếp từ server CDN -->
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
</head>
<body>
    <form action="_posteddata.php" method="post">
        <h3>Soạn thảo văn bản với CKEditor 4:</h3>
        
        <textarea name="nameofcontrol" id="nameofcontrol" rows="10" cols="80">
            Nội dung ban đầu...
        </textarea>
        
        <script>
            CKEDITOR.replace('nameofcontrol');
        </script>
        
        <br><br>
        <input type="submit" value="Gửi dữ liệu">
    </form>
</body>
</html>