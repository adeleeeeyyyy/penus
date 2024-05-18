<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Asal Skul</th>
            <th>Status</th>
        </tr>
        <?php foreach ($pendaftar as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['nama_pendaftar']); ?></td>
                <td><?php echo htmlspecialchars($student['jurusan']); ?></td>
                <td><?php echo htmlspecialchars($student['asal_sekolah']); ?></td>
                <td><?php echo htmlspecialchars($student['predikat']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
