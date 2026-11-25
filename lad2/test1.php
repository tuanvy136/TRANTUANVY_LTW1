<?php 
$menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students =[
["id"=>"SV001","name"=>"Nguyễn Văn An","gender"=>"Nam","class"=>"CNTT1"],
["id"=>"SV002","name"=>"Trần Thị Bình","gender"=>"Nữ","class"=>"CNTT2"],
["id"=>"SV003","name"=>"Lê Văn Cường","gender"=>"Nam","class"=>"CNTT3"],
["id"=>"SV004","name"=>"Phạm Thị Dung","gender"=>"Nữ","class"=>"CNTT3"]
];
$faculties=["Công nghệ thông tin","Quản trị kinh doanh","Kế toán","Ngôn ngữ Anh"];
$classes=["A1" => "CNTT1","A2" => "CNTT2","A3" => "CNTT3","A4" => "CNTT4"];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = ["LT" => "Lập trình","DS" => "Đọc sách","AN" => "Âm nhạc","DL" => "Du lịch","TT" => "Thể thao"];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        nav
        {
            background: blue;
        }
        nav ul
        {
            list-style: none;
            display: flex;
        }
        nav li
        {
            flex: 1;
        }
        nav a
        {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            text-align: center;
        }
        nav ul li:hover
        {
        background: burlywood;
        }
        .s1 
        {
           max-width: 650px;
           margin: 25px auto;
           background: whitesmoke;
           box-shadow:0 0 2px bisque;
           padding: 20px;
           border-radius: 15px;
        }
        .s1 h3
        {
            text-align: center;
            color: skyblue;


        }
        .s1 li
        {
            list-style: none;
        }
        .s1 li
        {
            padding:10px ;
            margin-bottom: 5px;
            background:lightblue ;
            border-left: 5px solid blue ;
            border-radius:7px ;
        }
        .s1 li:hover
        {
          background: lightskyblue;
          transform: translateX(3px);
        }

        .s2 {
        max-width: 500px;
        padding: 20px;
        margin: 20px auto;
        background: wheat;
        border-radius: 5px;
        box-shadow:  0 0 7px gray;
        }
        .s2 table
        {
            width: 100%;
            border-collapse: collapse;
        }
        .s2 th
        {
            background: rgb(157, 164, 143);
            padding: 5px;
            color: rgb(162, 101, 2);
            border: 1px solid black;
        }
        .s2 td
        {
            background: rgb(162, 201, 85);
            padding: 4px;
            color: blanchedalmond;
            border: 1px solid black;
            text-align: center;
            
            
        }
        .s2 tr:hover td
        {
            background: rgb(103, 65, 8);
            color: aquamarine;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
            <li>
                <a href="#"><?= $menu ?></a>
            </li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <ul?>
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <?php foreach ($subjects as $subject) {
            echo "<li>$subject</li>";
        }
        ?>
        </ul>
    </section>
<section class="s2">
  <h4>danh sac sinh vien</h4>  
  <table>
    <tr>
        <th>STT</th>
        <th>ma sinh vien</th>
        <t>ho va ten</th>
        <th>gioi tinh</th>
        <th>lop</th>
    </tr>
    <?php foreach($students as $index => $student) { ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $student["id"] ?></td>
        <td><?= $student["name"] ?></td>
        <td><?= $student["gender"] ?></td>
        <td><?= $student["class"] ?></td>
  
    </tr>
   <?php } ?>
   </section>
  </table>
</section>
    <section class="s3">
        <h2>dang ky thong tin sinh vien</h2>
        <form action="#" method="post">
            <div>
                <label>ho va ten</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label>Khoa</label>
                <select name="faculties">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <lable>Lớp</lable>
                <select name="class">
                    <?php foreach ($classes as $class) { ?>
                        <option value="<?= $class ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>
        </form>
    </section>
</body>
</html>