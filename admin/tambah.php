<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include '../koneksi.php';
    ?>

    <div class="container ">
        <h2 class="position-absolute top-0 start-50 translate-middle-x"><br>Menambah Data</h2>
    </div>

    <div class="container position-absolute top-50 start-50 translate-middle" style="width: 40rem;">
        <div id="error"></div>
        <form class="text-center" action="proses_tambah.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <div class="input-group  text-center">
                        <td>
                            <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                        </td>
                        <td>
                            <div class="col-md-12"> <input type="number" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    id="id" required name="id"></div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group text-center">
                        <td>
                            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                        </td>
                        <td>
                            <div class="col-md-12"> <input type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    id="nama_produk" required name="nama_produk"></div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group text-center">
                        <td>
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                        </td>
                        <td>
                            <div class="col-md-12"> <input type="file" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    id="fileToUpload" required name="fileToUpload"></div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group text-center">
                        <td>
                            <span class="input-group-text" id="inputGroup-sizing-default">Harga</span>
                        </td>
                        <td>
                            <div class="col-md-12"> <input type="number" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    id="harga" required name="harga"></div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group">
                        <td>
                            <label class="input-group-text" for="inputGroupSelect01">Brand</label>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <select class="form-select" id="id_brand" required name="id_brand">
                                    <option selected>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM brand_produk");
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value='" . $data["id_brand"] . "'>" . $data["brand"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>No items available</option>";
                                        }
                                        ?>
                                    </option>
                                </select>
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group">
                        <td>
                            <label class="input-group-text" for="inputGroupSelect01">Size</label>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <select class="form-select" id="id_size" required name="id_size">
                                    <option selected>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM size_produk");
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value='" . $data["id_size"] . "'>" . $data["size"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>No items available</option>";
                                        }
                                        ?>
                                    </option>
                                </select>
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="input-group col-md-12">
                        <td>
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <select class="form-select" id="id_status" required name="id_status">
                                    <option selected>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM status_produk");
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value='" . $data["id_status"] . "'>" . $data["status_produk"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>No items available</option>";
                                        }
                                        ?>
                                    </option>
                                </select>
                            </div>
                        </td>
                    </div>
                </tr>
            </table>
            <input onclick="alert('Apakah Anda Sudah OK?!')" type="submit" name="Submit" value="Simpan">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>