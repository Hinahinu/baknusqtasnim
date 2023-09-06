<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container container-fluid">
        <div class="mt-4">
            <form method="POST" action="aksi-crud.php">
                <h1 class="text-center">Pendataan Siswa</h1>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Nis</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Masukkan nis..."
                        name="nis">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama..."
                        name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                        <option>AKT</option>
                        <option>ANM</option>
                        <option>PPLG</option>
                        <option>PMS</option>
                        <option>DKV</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Hobi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan hobi..."
                        name="hobi">
                </div>
                <div class="form_group">
                    <input type="submit" class="btn btn-success float-end my-2" name="binput">
                </div>
            </form>
        </div>
        <div class="mt-4">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Hobi</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = pg_query($koneksi, "SELECT * FROM tb_siswa");
                    $no = 1;
                    while ($data = pg_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $data["nis"] ?>
                            </td>
                            <td>
                                <?php echo $data["nama"] ?>
                            </td>
                            <td>
                                <?php echo $data["kelas_siswa"] ?>
                            </td>
                            <td>
                                <?php echo $data["jurusan"] ?>
                            </td>
                            <td>
                                <?php echo $data["hobi"] ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalEdit<?php echo $no ?>">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalDelete<?php echo $no ?>">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="exampleModalEdit<?php echo $no ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="aksi-crud.php">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput3">Nis</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput3"
                                                    placeholder="Masukkan nis..." name="nis"
                                                    value="<?php echo $data["nis"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nama</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Masukkan nama..." name="nama"
                                                    value="<?php echo $data["nama"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Kelas</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jurusan</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                                                    <option>AKT</option>
                                                    <option>ANM</option>
                                                    <option>PPLG</option>
                                                    <option>PMS</option>
                                                    <option>DKV</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Hobi</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2"
                                                    placeholder="Masukkan hobi..." name="hobi"
                                                    value="<?php echo $data["hobi"] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="bedit"
                                                    value="Simpan"></button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal -->
                        <div class="modal fade" id="exampleModalDelete<?php echo $no ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin akan menghapus data ini?</p>
                                        <p>
                                            <?php echo $data["nis"] ?> -
                                            <?php echo $data["nama"] ?>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="aksi-crud.php" method="POST">
                                            <input type="hidden" name="nis" value="<?php echo $data["nis"] ?>">
                                            <input type="submit" class="btn btn-danger" name="bdelete"
                                                value="Delete">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

        <?php } ?>
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>