<?php
class Category{
    #Begin properties
    var $id;
    var $name;

    #Construct function
    function Category($id , $name )
    {
        $this->id = $id;
        $this->name = $name;
    }
    

    static function connect(){
        $con = new  mysqli("localhost","root","","products_carts");
        $con->set_charset("utf8");//hướng đối tượng
        if($con->connect_error)
            die("kết nối thất bại. Chi tiết:".$con->connect_error);
        return $con;
    }
    static function getListCategoryFromDB(){
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD

        $sql = "SELECT * FROM `category` ";
        $result =  $con->query($sql);
        $lsCategory = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $cat = new Category($row["id"],$row["name"]);
                array_push($lsCategory,$cat);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsCategory;
    }

    

}
?>