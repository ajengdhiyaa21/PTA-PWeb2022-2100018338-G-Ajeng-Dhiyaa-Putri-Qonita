<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>CSS Dan PHP</title>
</head>

<body>
  <div id="slideout-menu">
      <ul>
          <li>
              <a href="index.html">Home</a>
          </li>
          <li>
              <a  href="blogslist.html">Blog</a>
          </li>
          <li>
              <a href="about.html">About</a>
          </li>
          <li>
              <input type="text" placeholder="Search Here">
          </li>
      </ul>
  </div>

  <nav>
      <div id="logo-img">
          Projek Tugas Akhir <br>Pemrograman Web
      </div>
      <div id="menu-icon">
          <i class="fas fa-bars"></i>
      </div>
      <ul>
          <li>
              <a href="index.html">Home</a>
          </li>
          <li>
              <a class="active" href="blogslist.html">Blog</a>
          </li>
          <li>
              <a href="about.html">About</a>
          </li>
          <li>
              <div id="search-icon">
                  <i class="fas fa-search"></i>
              </div>
          </li>
      </ul>
  </nav>

  <div id="searchbox">
      <input type="text" placeholder="Search Here">
  </div>

  <main>

    <h2 class="page-heading">CSS Dan PHP</h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
            Posted by Admin on 22/07/2022
          </div>
          <div class="card-image">
            <img src="img/13.jpg" alt="Card Image">
          </div>
          <div class="card-description">
            <h2 id="css">Cascading Style Sheets (CSS)</h2>
            <h3 id="css1">1. Definisi Cascading Style Sheets (CSS)</h3>
            <p>
                Cascading Style Sheets (CSS) adalah untuk suatu
                teknologi yang digunakan untuk memperindah halaman website,
                dengan CSS pengguna dapat dengan mudah mengubah keseluruan
                warna dan tampilan yang ada di situs sekaligus memformat ulang situs.
            </p>
            <h3 id="css2">2. Sintaks CSS</h3>
            <p>
                Sebuah style sheets terdiri dari beberapa aturan masing-masing aturan
                terdiri dari satu atau lebih selektor dan sebuah blok deklarasi.
                Sebuah blok deklarasi terdiri dari beberapa deklarasi yang dipisahkan oleh titik koma (;).
                Masing-masing deklarasi terdiri dari property, titik dua(:) dan nilai (value).
            </p>
            <h3 id="css3">3. Property CSS</h3>
            <p>
                <h4 id="css3a">a. Properti Font</h4>
                - <u>Sintaks Font <br></u>
                 &nb.sp;font : < nilai/value > <br><br>
                - <u>Sintaks Font Family <br></u>
                 &nbsp;font-family : [[< family-name >|< generic-family >],]*[< family-name  >|< generic-family >] <br><br>
                - <u>Sintaks Font Style <br></u>
                 &nbsp;font-style : < value > <br><br>
                - <u>Sintaks Font Variant <br></u>
                 &nbsp;font-variant : < value > <br><br>
                - <u>Sintaks Font Weight <br></u>
                 &nbsp;font-weight : < value > <br><br>
                - <u>Sintaks Font Size <br></u>
                 &nbsp;font-size : < absolute-size >|< relative-size >|< length >|< percentage > <br><br>
                
                <h4 id="css3b">b. Properti Color & Background</h4>
                - <u>Sintaks Color<br></u>
                 &nbsp;color: < color > <br><br>
                - <u>Sintaks Background Color <br></u>
                 &nbsp;background-color : < value > <br><br>
                - <u>Sintaks Background <br></u>
                 &nbsp;Background : < value > <br><br>
                
                <h4 id="css3c">c. Properti Teks</h4>
                - <u>Sintaks Text alignment <br></u>
                 &nbsp;text-align : < value > <br><br>

                <h4 id="css3d">d. Properti Box</h4>
                - <u>Sintaks Bottom Border Width <br></u>
                 &nbsp;border-bottom-width : < value > <br><br>
                - <u>Sintaks Width & Height <br></u>
                 &nbsp;width : < value > <br>
                 &nbsp;height: < value ><br><br>
                - <u>Sintaks Border Style <br></u>
                 &nbsp;border-style : < value > <br><br>

                <h4 id="css3e">e. Properti Classification</h4>
                - <u>Sintaks Display <br></u>
                 &nbsp;display : < value > <br><br>
                - <u>Sintaks Whitespace <br></u>
                 &nbsp;white-space : < value > <br><br>
                - <u>Sintaks List style Type <br></u>
                 &nbsp;list-style-type : < value > <br><br>
            </p>
            <h2 id="php">PHP</h2>
            <p>PHP merupakan sebuah bahasa scripting yang dibundel dengan HTML,
                yang dijalankan disisi server. Bahasa ini memungkinkan pembuat aplikasi
                web menyajikan halaman HTML dinamis dan interaktif dengan cepat dan mudah.
            </p>
            <h3 id="php1">1. Percabangan Dan Perulangan</h3>
            <h4 id="php1a">a. Struktur Percabangan</h4>
            -<u>Kondisi if</u><br>
            if (kondisi) {<br>
            &nbsp;statment-jika-kondisi-true;<br>
            } <br>
            -<u>Kondisi if else</u><br>
            if (kondisi){ <br>
            &nbsp;statment-jika-kondisi-true; <br>
            } else{ <br>
            &nbsp;statment-jika-kondisi-false; <br>
            } <br>
            -<u>Kondisi switch case</u> <br>
            switch ($var){ <br>
            &nbsp;case '1' : statment-1;break; <br>
            &nbsp;case '2' : statment-2;break; <br>
            } <br>
            
            <h4 id="php1b">b. Struktur Perulangan</h4>
            -<u>Kondisi for</u><br>
            for(init_awal,kondisi,counter){ <br>
            &nbsp;statment-yang-diulang; <br>
            } <br>
            contoh :
            <?php
            for($i=1;$i<=10;$i++){
                echo"$i";
            }
            ?>
            <br><br>
            -<u>Kondisi While</u><br>
            init_awal; <br>
            while (kondisi){ <br>
            &nbsp;statment-yang-diulang; <br>
            &nbsp;counter; <br>
            } <br>
            contoh :
            <?php
            $i=1;
            while($i<=10){
                echo $i++;
            }
            ?><br><br>
            -<u>Kondisi do while</u><br>
            init_awal; <br>
            do{ <br>
            &nbsp;statment-yang-diulang; <br>
            &nbsp;counter; <br>
            } while (kondisi); <br>
            contoh :
            <?php
            $i=1;
            do{
                echo"$i";
                $i+=2;
            } while ($i<=20)
            ?><br><br>
            -<u>kondisi foreach</u><br>
            foreach(array_expression as $value) <br>
            &nbsp;statment; <br>
            foreach(array_expression as $key => $value)
            &nbsp;statment;<br><br>
            
            <h3 id="php2">2. Penanganan Form</h3>
            <h4>a. Form Input Type Text dan Password</h4>
            <h4>b. Form Input Type Radio</h4>
            <h4>c. Form Input Type Checkbox</h4>
            <h4>d. Form Input Type Combobox</h4>
            <h4>e. Form Input Type TextArea</h4>
            <h4>f. Form Validation</h4>
            <p>Berikut merupakan contoh penggunaan form input dengan beberapa type diatas : </p>
            <?php
                $nameErr    = $emailErr = $komenErr = "";
                $name       = $email    = $komen    = "";
                
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["name"])){
                        $nameErr = "Name is requied";
                    }
                    else{
                        $name = test_input($_POST["name"]);
                        if(!preg_match("/^[a-zA-Z]*$/", $name)){
                            $nameErr = "Only letter and white space allowed";
                        }
                    }

                    if(empty($_POST["email"])){
                        $emailErr = "Email is requied";
                    }
                    else{
                        $email = test_input($_POST["email"]);
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $emailErr = "Invalid email format";
                        }
                    }

                    if(empty($_POST["komen"])){
                        $komenErr = "Comment is requied";
                    }
                    else{
                        $komen = test_input($_POST["komen"]);
                    }

                    if(empty($_POST["check"])){
                        $checkErr = "Comment is requied";
                    }
                    else{
                        $check = test_input($_POST["check"]);
                    }
                }
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>

    <form method="POST" action="" >
        Nama &nbsp; &ensp; &ensp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; : <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">
            *<?php echo $nameErr;?>
        </span>
        <br><br>
        
        Materi Yang Disukai &nbsp; &emsp; &emsp; &emsp; &emsp;&emsp;:
        <input type="checkbox" name="check1" value="HTML Dan JavaScript"> HTML & JavaScript
        <input type="checkbox" name="check2" value="CSS Dan PHP"> CSS & PHP <br>
        <br><br>

        Apakah Anda Menyukai Konten Ini :
        <input type="radio" name="radio" value="Suka" checked/> Suka
        <input type="radio" name="radio" value="Tidak"> Tidak
        <br><br>

        E-mail &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;: <input type="email" name="email" value="<?php echo $email;?>">
        <span class="error">
            *<?php echo $emailErr;?>
        </span>
        <br><br>

        Jenis Kelamin &nbsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; :
        <select name="jk" size="1">
            <option value="Perempuan"> Perempuan</option>
            <option value="Laki-Laki"> Laki-Laki</option>
        </select>
        <br><br>
        
        Komentar &ensp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; :  <textarea name="komen" id="" cols="30" rows="10" value="<?php echo $komen;?>"></textarea>
        <span class="error">
            *<?php echo $komenErr;?>
        </span>
        <br><br>
        <input type="submit" name="Submit" value="Submit">
        <input type="submit" name="reset" value="Reset">
    </form>

    <?php
    echo "<h2>Your Input : </h2>";
    echo $name;
    echo "<br>";
    if (isset($_POST['Submit'])){
        echo "<br>Materi Yang Dipilih : ";
        if(isset($_POST['check1'])){
            echo "-" .$_POST['check1'] . "<br>";
        }if(isset($_POST['check2'])){
            echo "-" .$_POST['check2'] . "<br>";
        }
        $or=$_POST['radio'];
        echo "Apakah Anda Menyukai Konten Ini? $or <br>";
        $jk=$_POST['jk'];
        echo "Jenis Kelamin : $jk";
    }
    echo "<br>";
    echo $email;
    echo "<br>";
    echo "Komentar : <br> $komen";
    echo "<br>"
    ?>
    <?php
    
    ?>
            
            <h3 id="php3">3. Array Dan Fungsi</h3>
            <p>Array merupakan tipe data terstruktur yng berguna untuk menyimpan sejumlah data yang bertipe sama.</p>
            <h4 id="php3a">a. Mendeklarasikan Dan Menampilkan Array</h4>
            <?php
                $arrBuah=array("Mangga","Markisa","Pisang","Jeruk");
                echo$arrBuah[0]."<br>";
                echo$arrBuah[3]."<br><br>";

                $arrWarna=array();
                $arrWarna[]="Biru";
                $arrWarna[]="Hitam";
                $arrWarna[]="Hijau";
                $arrWarna[]="Putih";
                echo $arrWarna[0]. "<br>";
                echo $arrWarna[2]. "<br>";
                ?>

            <h4 id="php3b">b. Menampilkan Seluruh Isi Array Dengan For Dan Foreach</h4>
            <?php
                echo("Menampilkan Seluruh Isi Array dengan For dan Foreach");
                $arrWarna=array("Red","Orange","Yellow","Green","Blue","Purple");

                echo"<br>Menampilkan isi arrray dengan For : <br>";
                for($i=0;$i<count($arrWarna);$i++){
                    echo"Warna Pelangi <font color=$arrWarna[$i]>".$arrWarna[$i]."</font><br>";
                }

                echo"<br>Menampilkan isi array dengan Foreach : <br>";
                foreach($arrWarna as $warna){
                    echo "Warna Pelang <font color=$warna>".$warna."</font><br>";
                }
            ?>

            <h4 id="php3c">c. Fungsi Pengurutan Array</h4>
            <p>
                arsort() = pengurutan array berdasarkan value descending<br>
                asort() = pengurutan array berdasarkan value ascending<br>
                krsort() = pengurutan array berdasarkan index descending<br>
                ksort() = pengurutan array berdasarkan index ascending<br>
                rsort() = pengurutan array berdasarkan value descending<br>
                sort() = pengurutan array berdasarkan value ascending<br>
                shuffle () = random pengurutan array<br>
            </p>
            <h4 id="php3d">d. Fungsi Pengaturan Pointer Array</h4>
            <p>
                current() = mendapatkan elemen array yang ditunjuk oleh pointer<br>
                end ()= pointer menunjuk pada elemen terakhir<br>
                key() = mendapatkan key yang ditunjuk oleh pointer<br>
                next() = pointer menunjuk pada elemen selanjutnya<br>
                prev () = pointer menunjuk pada elemen sebelumnya<br>
                reset() = memindahkan pointer array ke awal<br>
                count() = menghitung jumlah elemen array<br>
            </p>
            <h4 id="php3e">e. Fungsi Pencaharian Pada Array</h4>
            <p>
                array_search() = mencari posisi key dari suatu value dalam array<br>
                array_key_exsists() = memeriksa suatu key ada dalam array atau tidak<br>
                in_array() = memeriksa suatu elemen da dalam suatu array atau tidak<br>
            </p>

            </div>
        </div>

        <div id="comments-section">
          Comments Section <br><br>
          <form method="post" action="" >
            Name &nbsp; &emsp; &ensp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; : <input type="text" name="name">
            <br><br>
            Apakah Anda Menyukai Konten Ini :
            <input type="radio" name="radio" value="Suka" checked/> Suka
            <input type="radio" name="radio" value="Tidak"> Tidak
            <br><br>
            Jenis Kelamin &nbsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; :
            <select name="jk" size="1">
                <option value="Perempuan"> Perempuan</option>
                <option value="Laki-Laki"> Laki-Laki</option>
            </select>
            <br><br>
            E-mail &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;: <input type="text" name="email">
            <br><br>
            Comment &ensp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; : <textarea name="komen" id="" cols="30" rows="10"></textarea>
            <br><br>
            <input type="submit" name="Submit" value="Submit">
            <input type="submit" name="reset" value="Reset">
        </form>
        </div>
      </section>

      <aside id="sidebar">
        <div>
        <h3><a href="#css">CSS</a></h3>
        &nbsp; <h4><a href="#css1">- Definisi CSS</a></h4>
        &nbsp; <h4><a href="#css2">- Sintaks CSS</a></h4>
        &nbsp; <h4><a href="#css3">- Properti CSS</a></h4>
        <hr>
        <h3><a href="#php">PHP</a></h3>
        &nbsp; <h4><a href="#php1">- Percabangan & Perulangan</a></h4>
        &nbsp; <h4><a href="#php2">- Penanganan Form</a></h4>
        &nbsp; <h4><a href="php3">- Array & Fungsi</a></h4>
      </aside>
    </div>

    <footer>
        <div id="left-footer">
            <h3>More To Explore</h3>
            <p>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blogslist.html">Blogs</a>
                    </li>
                    <li>
                        <a href="mailto:ajengdpq@gmail.com">Contact</a>
                    </li>
                </ul>
            </p>
        </div>

        <div id="right-footer">
            <h3>Connect With Us</h3>
            <div id="social-media-footer">
                <ul>
                    <li>
                        <a href="https://gitlab.com/Ajengdhiyaa21">
                            <i class="fab fa-gitlab"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/ajengdhiyaa21">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p>&copy;2022 | Ajeng Dhiyaa Putri Qonita</p>
        </div>
    </footer>

  </main>

  <script src="main.js"></script>
</body>

</html>