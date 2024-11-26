 <?php
include "../config.php";

if(isset($_POST["simpan"])){
    try{
        $q=$db->prepare("insert into databuku set judul=?,
         penulis=? , penerbit=? ,tglterbit=? , sinopsis=?");
         $q->execute ([$_POST["judul"],$_POST["penulis"],$_POST["penerbit"],$_POST["tglterbit"],$_POST["sinopsis"]]);
         $_SESSION["notif"]="Data Berhasil Disimpan";
         header("Location: index.php");
         die();

    }catch(exception $e) {
        echo"Eror : " .$e->getMessage(); 
    }

}
if(isset($_POST["ubah"])){
    try{
        $q=$db->prepare("update databuku set judul=?,
         penulis=? , penerbit=? ,tglterbit=? , sinopsis=?");
         $q->execute ([$_POST["judul"],$_POST["penulis"],$_POST["penerbit"],$_POST["tglterbit"],$_POST["sinopsis"]]);
         
         $_SESSION["notif"]="Data Berhasil Disimpan";
         header("Location: index.php");
         die();

    }catch(exception $e) {
        echo"Eror : " .$e->getMessage(); 
    }
}

if($_GET["action"]=="hapus"){
    try{
        $q=$db->prepare("delete from databuku where id_buku=?");
        $q->execute([$_GET["id"]]);
         $_SESSION["notif"]="Data Berhasil di hapus";
         header("Location: index.php");
         die();

    }catch(exception $e) {
        $_SESSION["notif"]="Data Gagal dihapus. Error :".$e->getMessage();
        header("Location: index.php");
        die();
    }

}
?>