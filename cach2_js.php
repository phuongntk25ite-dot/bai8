<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cách 2 - Dùng PHP/ReplaceAll</title>
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
</head>
<body>
    <h2>Cách 2: Tự động thay thế tất cả textarea[cite: 10, 11]</h2>
    <form action="_posteddata.php" method="post">
        <p>Tóm tắt 1[cite: 11]:</p>
        <textarea name="tomtat" id="tomtat" rows="5" cols="80">Nội dung tóm tắt 1...</textarea>
        
        <p>Tóm tắt 2[cite: 11]:</p>
        <textarea name="tomtat1" id="tomtat1" rows="5" cols="80">Nội dung tóm tắt 2...</textarea>

        <script>
            // Tự động biến tất cả textarea thành CKEditor[cite: 10, 11]
            CKEDITOR.replaceAll();
        </script>
        <br><br>
        <input type="submit" value="Gửi dữ liệu (Cách 2)">
    </form>
</body>
</html>