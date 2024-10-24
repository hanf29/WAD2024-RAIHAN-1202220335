
<?php
// tangkap nilai MK_KI1201, MK_KU1202, dan MK_KU1102 yang ada pada form html
// silakan taruh code kalian di bawah
// **********************  1  ************************** 
if ($_POST) {
    $MK1 = $_POST["MK_KI1201"];
    $MK2 = $_POST["MK_KU1202"];
    $MK3 = $_POST["MK_KU1102"];
}
// **********************  1  ************************** 


// buatkan sebuah perkondisian  
// jika MK_KI1201 atau MK_KU1202 atau MK_KU1102 kosong maka akan muncul pesan error
// silakan taruh code kalian di bawah
// **********************  2  ************************** 
if (empty($MK1) || empty($MK2) || empty($MK3)) {
    $error = "Matakuliah 1, 2, dan 3 tidak boleh kosong";
} elseif ($MK1 <= 0 || $MK2 <= 0 || $MK3 <= 0) {
    $error = "Nilai Matakuliah 1, 2, 3 harus lebih dari nol";
} else {




}
// **********************  2  ************************** 


// buatkanlah perkondisian jika nilainya memenuhi akan mendapatkan peminatan yang sesuai di jurnal, 
// Untuk nilai peminatan sesuai dengan kondisi yang tertera pada jurnal
// silakan taruh code kalian di bawah
// **********************  3  ************************** 
if (($MK2 = "AB" || $MK2= "A") && ($MK3 = "B" )) {
    $hasil = "dapat mengambil peminatan Kimia Pangan";

} elseif (($MK2 = "AB" || $MK2= "A" )&& ($MK3 = "B") && ($MK1 = "A")){
    $hasil= "Bisa mengambil Peminatan Kimia Umum";
}

  elseif (($MK2= "BC" || $MK2 = "C") && ($MK3 = "B" || $MK3 = "BC" || $MK3 = "C") && ($MK1 = "B" && $MK1 = "BC" && $MK1 = "C") ) {
    $hasil = "Tidak bisa mengambil peminatan";
  }
// **********************  3  ************************** 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminatan</title>
    <!-- Letakkan link bootstrap dibawah ini -->
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
  </head>
  <body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Pilih Peminatan
                </div>
                <div class="card-body">
                <h3>Masukkan nilai mata kuliah anda pada form dibawah ini</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="MK_KI1201" class="form-label">MK_KI1201</label>
                            <select class="form-select" id="MK_KI1201" name="MK_KI1201" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="MK_KU1202" class="form-label">MK_KU1202</label>
                            <select class="form-select" id="MK_KU1202" name="MK_KU1202" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="MK_KU1102" class="form-label">MK_KU1102</label>
                            <select class="form-select" id="MK_KU1102" name="MK_KU1102" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="submit">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>

                    <?php
                    // Hasil dari peminatan yang didapatkan taruh di sini yaaa!!  
                    // silakan taruh code kalian di bawah 
                    //  **********************  4  **************************     
                    if (!empty($hasil)) {
                        echo "<div class='alert alert-success'>Hasil Anda: $hasil</div>";
                    }
                    //  **********************  4  **************************     


                    // Hasil pesan error nya taruh di sini yaaa!!   
                    // silakan taruh code kalian di bawah 
                    //  **********************  5  **************************     
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    //  **********************  5  **************************     
                    ?>

                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>