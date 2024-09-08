<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 p-5 border border-4 border-success">
        <h1 class="text-center">APLIKASI TO-DO LIST</h1>
    </div>

    <div class="container mt-2 p-5 border border-4 border-dark">
        <div class="container mt-1 p-3 border border-3 border-dark">
            <form method="post" class="p-5" action="/ToDoList/simpan">
                <?= csrf_field() ?>
                <label for="kegiatan" class="h3">Masukkan Kegiatan :</label> <br>
                <div class="form-group row">
                    <input type="text" class="col-10 col-form-label border border-1 border-dark" name="kegiatan" id="kegiatan" value="">
                    <input type="submit" class="col-2 btn btn-success" name="tambahkan" value="Tambahkan">
                </div>
            </form>
        </div>

        <div class="container mt-3 p-5 border border-3 border-dark">
            <h2>Daftar Kegiatan : </h2>

            <div class="container mt-2">
                <h3>Daftar Kegiatan Belum Selesai:</h3>
                <ol>
                <?php if (!empty($daftarKegiatan) && is_array($daftarKegiatan)) : ?>
                    <?php foreach ($daftarKegiatan as $kegiatan) : ?>
                        <?php if ($kegiatan['status'] == 'aktif') : ?>
                            <li>
                                <div class="container ms-1 p-1 form-group row">
                                    <div class="col-7 border border-2 border-dark">
                                        <?= $kegiatan['kegiatan']?> 
                                    </div>
                                    <a class="btn btn-success col-2" href='/ToDoList/perbarui/<?=$kegiatan['idkegiatan'] ?>'> selesai</a>&nbsp;
                                    <a class="btn btn-danger col-2" href='/ToDoList/hapus/<?=$kegiatan['idkegiatan'] ?>'>hapus</a>
                                </div>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php else : ?>
                    Daftar Kosong
                <?php endif ?>
                </ol>
                <h3>Daftar Kegiatan Belum Selesai:</h3>
                <ol>
                <?php if (!empty($daftarKegiatan) && is_array($daftarKegiatan)) : ?>
                    <?php foreach ($daftarKegiatan as $kegiatan) : ?>
                        <?php if ($kegiatan['status'] == 'selesai') : ?>
                            <li>
                                <div class="container ms-1 p-1 form-group row">
                                    <div class="col-9 border border-2 border-dark">
                                        <del><?= $kegiatan['kegiatan']?> </del>
                                    </div>

                                    <a class="btn btn-danger col-2" href='/ToDoList/hapus/<?=$kegiatan['idkegiatan'] ?>'>hapus</a>
                                </div>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php else : ?>
                    Daftar Kosong
                <?php endif ?>
                </ol>
            </div>
        </div>
    </div>

</body>
</html>