<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="">
    <tr>
        <td>Tinggi : <input type="text" name="tinggi"></td><br>
    </tr>
    <tr>
        <td>Berat Badan : <input type="text" name="berat"></td><br>
    </tr>
    <tr>
        <td>
            <input type="radio" name="jenis" value="Wanita">Wanita
            <input type="radio" name="jenis" value="laki-laki">Laki-laki
        </td>
        <br>
        <br>
    </tr>
    <tr>
    <td><input type="submit" name="submit" value="kirim"></td>
    </tr>
    </form>
</body>
</html>



<?php
class kalkulator{
    public $tinggi;
    public $berat;
    public $jenis="";
    public $hasil_berat;
    public function tampil(){
        echo "BMI anda adalah ".$this->hasil_tinggi;
    }

    public function hasil_tinggi(){
        $this->berat = $_POST['berat'];
        $this->tinggi = $_POST['tinggi']/100;
        $this->jenis = $_POST['jenis'];
        $this->hasil_berat = $berat / ($tinggi*$tinggi);
        return $hasil_berat;

        if($this->jenis == 'Wanita'){
            if($this->hasil_berat <18){
                echo"Kurus";
            }elseif($this->hasil_berat >18 || $this->hasil_berat<25){
                echo "Normal";
            }
            elseif($this->hasil_berat >25 || $this->hasil_berat<27){
                echo"kegemukan";
            }else if($this->hasil_berat >27){
                echo "Obesitas";
            }
        }

        elseif($this->jenis =='Laki-laki'){
            if($this->hasil_berat<17){
                echo "kurus";
            }elseif($this->hasil_berat >17 ||$this->hasil_berat<23){
                echo"normal";
            }elseif($this->hasil_berat >23 ||$this->hasil_berat<27){
                echo"kegemukan";
            }elseif($this->hasil_berat>27){
                echo"obesitas"
            }
        }
    }
    

    
    //$hasil_akhir->hasil(800,5);

    if (isset($_POST['submit'])){
        $hasil_akhir = new kalkulator();
        $hasil_akhir->hasil_berat();
        $hasil_akhir->tampil();
    }

?>
