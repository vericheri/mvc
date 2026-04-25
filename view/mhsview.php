<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Mahasiwa</h2>

<ul>
<?php foreach($data as $mhs): ?>
    <li><?= $mhs; ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>