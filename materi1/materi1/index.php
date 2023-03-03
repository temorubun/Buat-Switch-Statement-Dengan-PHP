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
        
                    <h3>TUGAS TEORI PHP 1</h3>

                    <H4>Berikut ini adalah 2 contoh soal yang berkaitan dengan switch statement di PHP:</H4>
                    
                    <table>

                        <tr>

                            <td><h4>1.</h4></td>
                            <td><h4>Buatlah sebuah program sederhana dengan menggunakan switch statement, yang menentukan harga barang berdasarkan kode barang yang dimasukkan. Kode barang dan harganya adalah sebagai berikut:</h4></td>

                        </tr>

                        <tr>

                            <td></td>
                            <td><h4>A : Rp 5.000 <br>B : Rp 10.000 <br>C : Rp 20.000 <br>D : Rp 50.000 <br>E : Rp 100.000</h4></td>

                        </tr>

                        <tr>

                            <td></td>
                            <td><h4>Contoh: jika kode barang yang dimasukkan adalah A, maka output yang dihasilkan adalah "Harga barang tersebut adalah Rp 5.000". <br><br> ket: buat harga jangan ada yang sama dengan di atas,</h4></td>

                        </tr>

                        <tr>

                            <td></td>
                            <td><h4> </h4></td>

                        </tr>

                        <tr>

                            <td><h4>2.</h4></td>
                            <td><h4>Buatlah sebuah program sederhana dengan menggunakan ternary operator, yang mengecek apakah sebuah bilangan adalah bilangan genap atau ganjil. Jika bilangan tersebut genap, maka output yang dihasilkan adalah "Bilangan genap", jika ganjil, maka output yang dihasilkan adalah "Bilangan ganjil". Contoh: jika bilangan yang dimasukkan adalah 4, maka output yang dihasilkan adalah "Bilangan genap". <br><br>ket: masukkan gambar hasil inputan nilai di github</h4></td>

                        </tr>
                        
                        <tr>

                            <td></td>
                            <td>
                                
                                <section>

                                    <form>
            
                                        <table>
            
                                            <tr>
            
                                                <td>
            
                                                    <label><h4>Bilangan Bulat Genap Atau Ganjil!</h4></label>
            
                                                </td>
            
                                            </tr>
            
                                            <tr>
            
                                                <td>
            
                                                    <input type="number" name="genapganjil" placeholder="Masukan Nilai " class="input">
            
                                                </td>
            
                                                <td>
            
                                                    <button type="submit" name="Genap-Ganjil" class="button">Priksa</button>
            
            
                                                </td>
            
                                            </tr>
            
                                            <tr>
            
                                                <td>
            
                                                    <?php
            
                                                        if (isset($_GET["Genap-Ganjil"])){
            
                                                            $bilangan = $_GET["genapganjil"];
            
                                                            $output = ($bilangan % 2 == 0) ? "$bilangan Adalah Bilangan Genap" : "$bilangan Adalah Bilangan Ganjil";
                                                            
                                                            echo $output;
                                                            
                                                        }
            
                                                    ?>
            
                                                </td>
            
                                            </tr>
            
                                        </table>
            
                                    </form>

                                </section>

                            </td>

                        </tr>
                        
                    </table>
                    
                    <br><br><hr>

                    <footer>
                        
                        <p>CopyRaight Agung Hendi Temorubun 2023</p>

                    </footer>
      
                </section> 
    
            </div>
  
        </div>

    </body>

</html>