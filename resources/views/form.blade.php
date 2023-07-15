<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-6">
                <h2>FORM</h2>
                <form action="" method="POST" class="mb-4">
                    <div class="my-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="tgl_pemeriksaan">Tanggal pemerikasaan</label>
                        <input type="date" name="tgl_pemeriksaan" id="tgl_pemeriksaan" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="tgl_lahir">Tanggal lahir/usia</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" name='jk' id="jk" class="form-control">
                    </div>
                </form>
                <br>

                <table class="table-bordered text-left" align="center" >
                    <thead>
                        <tr>
                            <th>Jenis Tes</th>
                            <th>Hasil Pemeriksaan    </th>
                            <th>Normal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tekanan darah</td>
                            <td></td>
                            <td>120/80 mmhg</td>
                        </tr>
                        <tr>
                            <td>Asam urat</td>
                            <td></td>
                            <td>Pria : <7 mg/dl | Wanita: <6 mg/dl </td>
                        </tr>
                        <tr>
                            <td>Kolesterol total</td>
                            <td></td>
                            <td> < 200 mg/dl </td>
                        </tr>
                        <tr>
                            <td>Gula darah</td>
                            <td></td>
                            <td>Puasa: 70-110 mg/dl <hr> 
                            2 jam setelah makan: 100-150 mg/dl <hr> 
                            Sewaktu/acak: 70-125 mg/dl
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>