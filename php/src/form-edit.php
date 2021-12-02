<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<style>
  input[type=text],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit].form {
    width: 100%;
    background-color: #e43c5c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover.form {
    background-color: #ba2340;
  }

  div.form {
    margin-top: 30px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
  }

  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-size: 16px;
    resize: none;
  }
</style>

<body>
  <div>

    <div>
      <?php
      include 'koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($db, "select * from registrasi where id ='$id'");

      while ($db = mysqli_fetch_array($data)) {

      ?>
        <div class="form">
          <div>
            <h3>Edit Pengajuan Sertifikasi</h3>
          </div>
          <form method="post" action="update.php">
          <input type="hidden" name="id" value="<?php echo $db['id']; ?>">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $db['nama']; ?>">

            <label for="alamat">Alamat</label>
            <textarea type="text" id="alamat" name="alamat" value="<?php echo $db['alamat']; ?>"></textarea>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $db['email']; ?>">

            <label for="skema">Skema</label>
            <select id="skema" name="skema" value="<?php echo $db['skema']; ?>">
              <option value="JWD">Junior Web Developer</option>
              <option value="JGD">Junior Graphic Designer</option>
              <option value="JNA">Junior Network Administrator</option>
              <option value="JMP">Junior Mobile Programmer</option>
            </select>

            <input class="form" type="submit" value="Simpan">
          </form>


        </div>
      <?php
      }
      ?>
    </div>
  </div>

</body>

</html>