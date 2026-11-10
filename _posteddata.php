<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CKEditor - Posted Data</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; width: 20%; }
        pre { white-space: pre-wrap; word-wrap: break-word; margin: 0; }
    </style>
</head>
<body>
    <h1>CKEditor &mdash; Posted Data</h1>
    <table>
        <thead>
            <tr>
                <th>Field Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Vòng lặp foreach tự động duyệt qua tất cả các input/textarea được gửi POST sang
        if (!empty($_POST)) {
            foreach ($_POST as $sForm => $value) {
                // Chuyển đổi ký tự đặc biệt để hiển thị nguyên bản chuỗi HTML
                $postedValue = htmlspecialchars($value);
        ?>
            <tr>
                <th style="vertical-align: top"><?php echo htmlspecialchars($sForm); ?></th>
                <td><pre><?php echo $postedValue; ?></pre></td>
            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='2'>Không có dữ liệu nào được gửi sang!</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>