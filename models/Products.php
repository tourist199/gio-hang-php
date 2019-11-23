<?php
class Products{
    #Begin properties
    var $id;
    var $name;
    var $desc;
    var $price;
    var $description;
    var $star;

    #Construct function
    function Products($id , $name , $desc, $price, $description, $star)
    {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->description = $description;
        $this->star = $star;
    }
    

    static function connect(){
        $con = new  mysqli("localhost","root","","Products");
        $con->set_charset("utf8");//hướng đối tượng
        if($con->connect_error)
            die("kết nối thất bại. Chi tiết:".$con->connect_error);
        return $con;
    }
    static function getListDanhBaFromDB(){
       
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD

        $username = $_SESSION["username"];

        $sql = "SELECT * FROM Products where username='$username'";
        $result =  $con->query($sql);
        $lsDanhba = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $Products = new Products($row["id"],$row["name"],$row["phonenumber"],$row["email"]);
                array_push($lsDanhba,$Products);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsDanhba;
    }

    static function addDanhBaToDB($content)
    {
        $con = Products::connect();
        $username = $_SESSION["username"];
        $sql="INSERT INTO `Products`( `name`, `phonenumber`, `email`,`username`) VALUES ('$content[0]','$content[1]','$content[2]','$username')";
       // $result =  $con->query($sql);
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

    static function editDanhBaDB($content){
        $con = Products::connect();
        $sql="UPDATE `Products` SET `name`='$content[1]',`phonenumber`='$content[2]',`email`='$content[3]' WHERE id='$content[0]'";
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        $con->close();
    }
    
    static function deleteDanhBaDB($id){
        $con = Products::connect();
        $sql="DELETE FROM `Products` WHERE id='$id'";
        if (mysqli_query($con, $sql)) {
            echo "alert('Delete  successfully')";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

    static function searchDanhBaByLabel( $id_label){
        session_start();
        $_SESSION["idlabel"] = $id_label;
        $con = Products::connect();
        $username = $_SESSION["username"];
        // $sql="SELECT * FROM `Products` WHERE name LIKE '%$name%'";
        $sql="SELECT distinct Products.* FROM Products INNER JOIN label_danhba
        on Products.id = label_danhba.danhba_id WHERE Products.username = '$username' and label_danhba.label_id = '$id_label'";
        $result =  $con->query($sql);
        $lsDanhBa = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $Products = new Products($row["id"],$row["name"],$row["phonenumber"],$row["email"]);
                array_push($lsDanhBa,$Products);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsDanhBa;
    }

}
?>