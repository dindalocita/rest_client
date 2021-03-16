<?php echo $this->session->flashdata('hasil'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">ID JURUSAN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">AKSI</th>
      
    </tr>
    
  </thead>
  <tbody>
  <?php
    foreach ($mahasiswa as $m){
        echo "<tr>
              <td>$m->nim</td>
              <td>$m->nama</td>
              <td>$m->id_jurusan</td>
              <td>$m->alamat</td>
              <td>
              <a type='button' href='http://localhost/rest_client/index.php/mahasiswa/edit/$m->nim' class='btn btn-light'>Edit</a>
              <a type='button' href='http://localhost/rest_client/index.php/mahasiswa/delete/$m->nim' class='btn btn-danger'>Delete</a>
              
              </td>
              </tr>";
    }
    ?>
     
                  
  </tbody>

</table>

<a type='button' href='http://localhost/rest_client/index.php/mahasiswa/create/' class='btn btn-secondary'>TAMBAH DATA</a>

</body>
</html>
