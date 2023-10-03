<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Khóa học</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>Tên Khóa học</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrs as $course){ ?>
                <tr>
                    <td><?php echo $course; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
