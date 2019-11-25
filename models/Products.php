<?php
class Products{
    #Begin properties
    var $id;
    var $name;
    var $desc;
    var $price;
    var $description;
    var $star;
    var $image;
    var $category;

    #Construct function
    function Products($id , $name , $desc, $price, $description, $star,$image,$category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->description = $description;
        $this->star = $star;
        $this->image = $image;
        $this->category = $category;
    }
    

    static function connect(){
        $con = new  mysqli("localhost","root","","products_carts");
        $con->set_charset("utf8");//hướng đối tượng
        if($con->connect_error)
            die("kết nối thất bại. Chi tiết:".$con->connect_error);
        return $con;
    }
    static function getListProductsFromDB(){
       
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD

        $sql = "SELECT * FROM `products` ";
        $result =  $con->query($sql);
        $lsProducts = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $Products = new Products($row["id"],$row["name"],$row["desc"],$row["price"],$row["description"],$row["star"],$row["image"],$row["category_id"]);
                array_push($lsProducts,$Products);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsProducts;
    }

    static function getListProductsByCategory($cate){
       
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD

        $sql = "SELECT * FROM `products` where category_id = $cate";
        $result =  $con->query($sql);
        $lsProducts = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $Products = new Products($row["id"],$row["name"],$row["desc"],$row["price"],$row["description"],$row["star"],$row["image"],$row["category_id"]);
                array_push($lsProducts,$Products);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsProducts;
    }

    static function getProductById($id){
       
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD

        $sql = "SELECT * FROM `products` where id = $id";
        $result =  $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $Products = new Products($row["id"],$row["name"],$row["desc"],$row["price"],$row["description"],$row["star"],$row["image"],$row["category_id"]);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $Products;
    }

}
?>