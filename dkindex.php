<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$stmt = $pdo->query("select * from diworks_keijiban");

?>

<div class="logo"><img src="diblog_logo.jpg"></div>
    
<header>
    <div class="box1">
      <ul class="ul1">
        <li class="li1">トップ</li>
        <li class="li3">プロフィール</li>
        <li class="li3">D.I.Blogについて</li>
        <li class="li3">登録フォーム</li>
        <li class="li3">問い合わせ</li>
        <li class="li2">その他</li>
      </ul>
    </div>
</header>
    
<div class="left">
    
    <form method="post" action="insert.php">
        
        <h1>掲示板入力フォーム</h1>
        
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>
        
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
        
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
    
<?php
    
while($row = $stmt->fetch()){
    echo "<div class='kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo"<div class='comments'>";
    echo $row['comments'];
    echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
}
    
?>
    
</div>
    
<div class="right">
    
     <h2>人気の記事</h2>
     <ul class="ul2">
       <li class="li4">PHPオススメ本</li>
       <li class="li4">PHP MYAdminの使い方</li>
       <li class="li4">いま人気のエディタTops</li>
       <li class="li4">HTMLの基礎</li>
     </ul>
    
     <h2>オススメリンク</h2>
     <ul class="ul2">
       <li class="li4">ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
       <li class="li4">XAMPPのダウンロード</li>
       <li class="li4">Eclipseのダウンロード</li>
       <li class="li4">Bracketsのダウンロード</li>
     </ul>
       
    　<h2>カテゴリ</h2>
     <ul class="ul2">
       <li class="li4">HTML</li>
       <li class="li4">PHP</li>
       <li class="li4">MySQL</li>
       <li class="li4">Javascript</li>
     </ul>
       
</div> 
    
<footer>
      
   <div class="box3">Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</div>
      
</footer>
    
</body>

</html>

