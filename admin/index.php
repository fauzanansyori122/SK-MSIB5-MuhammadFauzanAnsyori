<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable({
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": true,
                "searching": true
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include '../koneksi.php';
                $query = mysqli_query($conn, "SELECT * from produk as p join size_produk as up on p.id_size = up.id_size join status_produk as sp on p.id_status = sp.id_status join brand_produk as gp on p.id_brand = gp.id_brand ORDER BY p.id ASC;");
                ?>
                <center>
                    <h1>Daftar Sepatu:</h1>
                </center>
                <br>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=Menambah Sepatu">
                    Menambah Sepatu </a>
                <table id="table_id" class="display table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Gambar
                            </th>
                            <th>
                                Harga
                            </th>
                            <th>
                                Brand
                            </th>
                            <th>
                                Size
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Option
                            </th>
                        </tr>
                    </thead>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $data["id"] ?>
                                </td>
                                <td>
                                    <?php echo $data["nama_produk"] ?>
                                </td>
                                <td> <img src="<?php echo $data["image"] ?>" width="100"> </td>
                                <td>
                                    <?php echo $data["harga"] ?>
                                </td>
                                <td>
                                    <?php echo $data["brand"] ?>
                                </td>
                                <td>
                                    <?php echo $data["size"] ?>
                                </td>
                                <td>
                                    <?php echo $data["status_produk"] ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a>&nbsp;
                                    <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger">Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</body>

</html>