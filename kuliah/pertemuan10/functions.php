<?php

function koneksi()
{
  return $conn = mysqli_connect('localhost', 'root', '', 'pw_140874');
}

function Query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);


  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
