<?php 
  require("lib/db.php");
  require("config/conf.php");
  $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
  $result = mysqli_query($conn,'SELECT * FROM topic');

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" http-equiv="Pragma" content="no-cache">

  <!-- Twitter Bootstrap 적용-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="/style.css">
 
  <link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
  <div class="container">
    <header class="jumbotron text-center"> 
      <h1><a href="/index.php">JavaScript</a></h1>
      <img src="/image.png" alt="웹 연습" class="img-circle" id="logo">
    </header>
    <div class="row">
      <nav class="col-md-3">
        <ol class="nav nav-pills nav-stacked">
        <?php
          while($row = mysqli_fetch_assoc($result))
          {  
            echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";         
          }
        ?>
        </ol>
      </nav>

      <div class="col-md-9">
        <article>
        <form action="process.php" method="post">
          <div class="form-group">
            <label for="form-title">제목</label>
            <input type="text" name="title" class="form-control" id="form-title" placeholder="제목을 적어주세요.">
            
          </div>

          <div class="form-group">
            <label for="form-author">작성자</label>
            <input type="text" name="author" class="form-control" id="form-author" placeholder="작성자를 적어주세요.">
            
          </div>

          <div class="form-group">
            <label for="form-author">본문</label>
            <textarea rows="10" name="description" class="form-control" id="form-author" placeholder="본문을 적어주세요."> </textarea>
            
          </div>
          
          <input type="hidden" role="uploadcare-uploader" name="content" data-images-only="true" />
          <input type="submit" name="name" class="btn btn-default  btn-lg">
        </form>  
        </article>
        <hr>
        <div id="control">
          <div class = "btn-group" role="group">
            <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
            <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
          </div>
          <a href="/write.php" class="btn btn-success btn-lg">쓰기</a>
        </div>  
      </div>    
      
    </div>

  </div>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>




