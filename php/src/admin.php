<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    table,
    td,
    th {
      border: 1px solid #ddd;
      text-align: left;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 15px;
    }
  </style>
  <style>
    a:link.actionn,
    a:visited.actionn {
      background-color: #f44336;
      color: white;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }

    a:hover.actionn,
    a:active.actionn {
      background-color: red;
    }
  </style>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    nav {
      margin: auto;
      text-align: center;
      width: 100%;
    }

    nav ul {
      background: black;
      padding: 0 10px;
      list-style: none;
      position: relative;
      display: inline-table;
      width: 100%;
    }

    nav ul li {
      float: right;
    }

    nav ul li:hover {
      background: #f44336;
    }

    nav ul li:hover a {
      color: #000;
    }

    nav ul li a {
      display: block;
      padding: 25px;
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div>
    <nav>
      <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="cetak.php">Cetak</a></li>

      </ul>
    </nav>
    <div>
      <br>
      <h3>Daftar Pengajuan Sertifikasi</h3>
      <br>
    </div>
  </div>
  <div>
    <div>
      <table border="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Skema Sertifikasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include 'koneksi.php';
          $id = 1;
          $data = mysqli_query($db, "select * from registrasi");
          while ($db = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <td><?php echo $id++; ?></td>
              <td><?php echo $db['nama']; ?></td>
              <td><?php echo $db['alamat']; ?></td>
              <td><?php echo $db['email']; ?></td>
              <td><?php echo $db['skema']; ?></td>
              <td>
                <a class=actionn href="form-edit.php?id=<?php echo $db['id']; ?>">EDIT</a>
                <a class=actionn href="delete.php?id=<?php echo $db['id']; ?>">HAPUS</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

</html>