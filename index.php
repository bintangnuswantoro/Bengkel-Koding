<?php 
require 'functions.php';
if(isset($_POST['todo_submit'])){
    createTodo($_POST);

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>To Do List</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
               <div class="card">
                   <div class="card-header">
                       <h3>To Do List</h3>
                   </div>
                   <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kegiatan</label>
                                <input type="text" class="form-control" name="todo" placeholder="Masukkan Kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Awal</label>
                                <input type="date" class="form-control" name="todo_time" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Akhir</label>
                                <input type="date" class="form-control" name="dl_time" >
                            </div>
                            <button type="submit" name="todo_submit" class="btn btn-primary">Submit</button>
                        </form>
                   </div>
               </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>