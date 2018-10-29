<?php
    class data{
        private $pdo;
        public function __construct(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "db_tp";     
            try {
                $this->pdo = new PDO("mysql:host={$host}; dbname={$db};", $user, $pass);
                $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                print "Koneksi atau query bermasalah : " . $e -> getMessage() . "<br>";
                die();
            }                      
        }    

        public function create(){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tgl =$_POST['tgl'];
            $query =$this->pdo ->prepare("INSERT INTO mahasiswa(nim, nama, tanggal_lahir) VALUES ('$nim','$nama','$tgl')");
            $query -> execute();
            if($query)
            header("location:form.php");
            else{
                die("Tambah Data Gagal");    
            }
                
        }
        public function edit($nim, $nama, $tgl){
            $query =$this->pdo ->prepare("UPDATE mahasiswa SET nama='$nama', tanggal_lahir='$tgl' WHERE nim='$nim'");
            $query -> execute();
            if($query)
            header("location:data.php");
            else{
                die("Tambah Data Gagal");    
            }
        }    
        public function delete($nim,$nama,$tgl){        
            $query = $this->pdo -> prepare("DELETE FROM mahasiswa WHERE nim ='$nim'");
            $query -> execute();
                if($query){
                ?>
                <script>
                    alert("data Berhasil Terhapus");
                    location ="data.php";
                </script>
                <?php
            } else{
                ?>
                <script>
                    alert("Data gagal Terhapus");
                    location="data.php";
                </script>
                <?php
                
            }       
        }
        public function lihat_data(){
            $query =$this->pdo ->prepare("SELECT * FROM mahasiswa"); 
            $query -> execute();
            return $query;
        }

        public function data_mhs($nim) {
            $sql = $this->pdo-> prepare("SELECT * FROM mahasiswa WHERE nim = '$nim'");
            $sql -> execute();
            return $sql;
        }
        public function delete_data($nim) {
            $sql = $this->pdo-> prepare("SELECT * FROM mahasiswa WHERE nim = '$nim'");
            $sql -> execute();
            return $sql;
        }
    }

    $data = new data();
    if(isset($_GET['tambah'])){
        $data->create();
    }
    if(isset($_GET['delete'])){
        $data->delete($_GET['delete']);
    }  
    if(isset($_GET['edit'])){
        $data->edit($_GET['edit'],$_POST['nama'],$_POST['tgl']);
    }      
?>
