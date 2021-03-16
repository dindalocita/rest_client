<?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('nim',$mahasiswa[0]->nim);?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<div class="card">
 <div class ="card-body">

<div class="mb-2">
<label class="form-label">NIM</label>
<input type="text" disabled id="nama" name="nama" class="form-control" value="<?php echo $mahasiswa[0]->nim;?>">
</div>

<div class="mb-2">
<label class="form-label">NAMA</label>
<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $mahasiswa[0]->nama;?>">
</div>

<div class="mb-2">
<label class="form-label">JURUSAN</label>
<select class="form-select" name="jurusan" aria-label="Default select example">
<?php
            foreach ($jurusan as $j){
                echo "<option value='$j->id_jurusan' ";
                echo $mahasiswa[0]->id_jurusan==$j->id_jurusan?'selected':'';
                echo ">$j->nama_jurusan</option>";
            }
            ?>
</select>
</div>
<div class="mb-2">
<label class="form-label">ALAMAT</label>
<input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $mahasiswa[0]->alamat;?>">
</div>

<div class="mb-2">
<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
<a type="button" href="http://localhost/rest_client/index.php/mahasiswa" class="btn btn-light">Kembali</a>
</div>

 </div>
 </div>

<?php
echo form_close();
?>