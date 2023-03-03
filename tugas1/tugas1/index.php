<!DOCTYPE html>
<html lang="en">
    
    <head>
    
        <title>Pemograman PHP</title>
    
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
    

        <div class="container" id="main">
    
            <div class="row-fluid" style="margin-bottom: 10px;">
      
                <p class="span12">
                    
                    <a href="#menu" class="side-menu-link btn btn-mini" title="Click for sub-menu">
          
                        <i class="icon-th"></i>
        
                    </a>
      
                </p>
    
            </div>
    
            <div id="wrap" class="row-fluid wrap">
      
                <aside class="well span3 oc" id="side-menu" role="navigation">
        
                <ul class="nav nav-list">
          
                <li class="nav-header">TEORI PEMROGRAMAN</li>

                <li><a href="https://temorubun.site/agung/php/teori/materi1/index.php">Materi PHP 1</a></li>

                <li><a href="https://temorubun.site/agung/php/teori/tugas1/index.php">Tugas PHP 1</a></li>

                <li class="nav-header">PRAKTEK PEMOGRAMAN</li>

                <li><a href="https://temorubun.site/agung/php/praktek/materi1/index.php">Materi PHP 1</a></li>

                <li><a href="https://temorubun.site/agung/php/praktek/tugas1/index.php">Tugas PHP 1</a></li>

                <li class="nav-header">Project PHP</li>

                <li><a href="#">PHP CRUD</a></li>

            </ul>
      
                </aside>
      
                <section class="well span9 ">
        
                    <h2><a href="https://temorubun.site/agung/php/index.php">Pemograman PHP</a></h2>
        
                    <ul class="nav">
          
                        <li><a href="https://github.com/temorubun/Buat-If-Statement-Dengan-PHP-.git">https://github.com/temorubun/Buat-Switch-Statement-Dengan-PHP-.git</a></li>
        
                    </ul>
      
                </section>

                <section class="well span9 ">
        
                                        <label><h3>Daftar Belanja</h3></label><br><br>
                    
                    <form method="post">

                        <table>

                            <tr>

                                <td colspan='4'><h4>Menu Makanan</h4></td>

                            </tr>

                            <tr>

                                <td>

                                    <label for="NasiGoreng">

                                        <input type="checkbox" name="barang[]" value="Nasi Goreng" id="NasiGoreng"> Nasi Goreng - Rp 20.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="MieGoreng">

                                        <input type="checkbox" name="barang[]" value="Mie Goreng" id="MieGoreng"> Mie Goreng - Rp 22.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="NasiUduk">

                                        <input type="checkbox" name="barang[]" value="Nasi Uduk" id="NasiUduk"> Nasi Uduk - Rp 20.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="BihunGoreng">

                                        <input type="checkbox" name="barang[]" value="Bihun Goreng" id="BihunGoreng"> Bihun Goreng - Rp 20.000<br>

                                    </label>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <label for="Capcay">

                                        <input type="checkbox" name="barang[]" value="Capcay" id="Capcay"> Capcay - Rp 30.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="SupBuntut">

                                        <input type="checkbox" name="barang[]" value="Sup Buntut" id="SupBuntut"> Sup Buntut - Rp 50.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="Gado-Gado">

                                        <input type="checkbox" name="barang[]" value="Gado-Gado" id="Gado-Gado"> Gado-Gado - Rp 20.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="SateAyam">

                                        <input type="checkbox" name="barang[]" value="Sate Ayam" id="SateAyam"> Sate Ayam - Rp 25.000<br>

                                    </label>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <label for="AyamGoreng">

                                        <input type="checkbox" name="barang[]" value="Ayam Goreng" id="AyamGoreng"> Ayam Goreng - Rp 30.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="IkanBakar">

                                        <input type="checkbox" name="barang[]" value="Ikan Bakar" id="IkanBakar"> Ikan Bakar - Rp 40.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="SotoAyam">

                                        <input type="checkbox" name="barang[]" value="Soto Ayam" id="SotoAyam"> Soto Ayam - Rp 25.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="Rawon">

                                        <input type="checkbox" name="barang[]" value="Rawon" id="Rawon"> Rawon - Rp 35.000<br>

                                    </label>

                                </td>

                            </tr>

                            <tr>

                                <td></td>

                            </tr>

                            <tr>

                                <td>

                                    <h4>Menu Minuman</h4>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <label for="TehManis">

                                        <input type="checkbox" name="barang[]" value="Teh Manis" id="TehManis"> Teh Manis - Rp 5.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="ThaiTea">

                                        <input type="checkbox" name="barang[]" value="Thai Tea" id="ThaiTea"> Thai Tea - Rp 30.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="KopiHitam">

                                        <input type="checkbox" name="barang[]" value="Kopi Hitam" id="KopiHitam"> Kopi Hitam - Rp 8.000<br>

                                    </label>

                                </td>
                                <td>

                                    <label for="KopiSusu">

                                        <input type="checkbox" name="barang[]" value="Kopi Susu" id="KopiSusu"> Kopi Susu - Rp 10.000<br>

                                    </label>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <label for="Cappuccino">

                                        <input type="checkbox" name="barang[]" value="Cappuccino" id="Cappuccino"> Cappuccino - Rp 12.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="Latte">

                                        <input type="checkbox" name="barang[]" value="Latte" id="Latte"> Latte - Rp 15.000<br>

                                    </label>

                                </td>

                                <td>

                                    <label for="Moccachino">

                                        <input type="checkbox" name="barang[]" value="Moccachino" id="Moccachino"> Moccachino - Rp 17.000<br>

                                    </label>

                                </td>
                                <td>

                                    <label for="GreenTeaLatte">

                                        <input type="checkbox" name="barang[]" value="Green Tea Latte" id="GreenTeaLatte"> Green Tea Latte - Rp 20.000<br>

                                    </label>

                                </td>

                            </tr>

                            <tr>

                                <td><input type="submit" name="submit" value="Hitung Total"></td>

                            </tr>

                        </table>                 
        
                    </form>

                    <br>
                
                    <div class="Hasil">

                        <table>

                            <tr>

                                <td></td>
                                <td></td>

                                <td>

                                    <?php
        
                                        if(isset($_POST['submit'])) {

                                            $barang = $_POST['barang'];

                                            $total = 0;

                                            if(empty($barang)) {

                                                echo "Anda belum memilih barang.";

                                            } else {

                                                // echo "<h2>Daftar Belanja yang Dipilih:</h2>";

                                                echo "<table border='1'>";

                                                echo "<tr><th style='padding: 15px;'>Barang</th><th style='padding: 15px;'>Harga Satuan</th><th style='padding: 15px;'>Jumlah</th><th style='padding: 15px;'>Total</th></tr>";

                                                foreach($barang as $b) {

                                                    echo "<tr>";

                                                    echo "<td style='padding: 15px;'>" . $b . "</td>";

                                                    switch($b) {

                                                        case "Nasi Goreng":
                                                        
                                                            $harga = 20000;
                                                        
                                                        break;
                                                        
                                                        case "Mie Goreng":
                                                        
                                                            $harga = 22000;
                                                        
                                                        break;
                                                        
                                                        case "Nasi Uduk":
                                                        
                                                            $harga = 20000;
                                                        
                                                        break;
                                                        
                                                        case "Bihun Goreng":
                                                        
                                                            $harga = 20000;
                                                        break;
                                                        
                                                        case "Capcay":
                                                        
                                                            $harga = 30000;
                                                        
                                                        break;
                                                        
                                                        case "Sup Buntut":
                                                        
                                                            $harga = 50000;
                                                        
                                                        break;
                                                        
                                                        case "Gado-Gado":
                                                        
                                                            $harga = 20000;
                                                        
                                                        break;
                                                        
                                                        case "Sate Ayam":
                                                        
                                                            $harga = 25000;

                                                        break;
                                                        
                                                        case "Ayam Goreng":
                                                        
                                                            $harga = 30000;
                                                        
                                                        break;
                                                        
                                                        case "Ikan Bakar":
                                                        
                                                            $harga = 40000;
                                                        
                                                        break;
                                                        
                                                        case "Soto Ayam":
                                                        
                                                            $harga = 25000;
                                                        
                                                        break;
                                                        
                                                        case "Rawon":
                                                        
                                                            $harga = 35000;

                                                        break;

                                                        case "Teh Manis":

                                                            $harga = 5000;
                                                        
                                                        break;
                                                        
                                                        case "Thai Tea":
                                                        
                                                            $harga = 30000;
                                                        
                                                        break;
                                                        
                                                        case "Kopi Hitam":
                                                        
                                                            $harga = 8000;
                                                        
                                                        break;
                                                        
                                                        case "Kopi Susu":
                                                        
                                                            $harga = 10000;

                                                        break;

                                                        case "Cappuccino":

                                                            $harga = 12000;
                                                        
                                                        break;
                                                        
                                                        case "Latte":
                                                        
                                                            $harga = 15000;
                                                        
                                                        break;
                                                        
                                                        case "Moccachino":
                                                        
                                                            $harga = 17000;
                                                        
                                                        break;
                                                        
                                                        case "Green Tea Latte":
                                                        
                                                            $harga = 20000;

                                                        break;
                                                        
                                                        default:
                                                        
                                                            $harga = 0;
                                                            
                                                        break;
                                                    }
                                                    
                                                    echo "<td>" . number_format($harga, 0, ",", ".") . "</td>";

                                                    echo "<td>1</td>";

                                                    $total += $harga;

                                                    echo "<td>" . number_format($harga, 0, ",", ".") . "</td>";

                                                    echo "</tr>";

                                                }

                                                echo "<tr><td colspan='3'>Total Belanja:</td><td>" . number_format($total, 0, ",", ".") . "</td></tr>";

                                                echo "</table>";

                                            }

                                        }

                                    ?>

                                </td>

                            </tr>

                        </table>

                    </div>
  
                </section> 
    
            </div>
  
        </div>

    </body>

</html>