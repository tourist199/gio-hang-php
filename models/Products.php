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

    static function addProducts( $name, $price,$desc,$description, $star, $category_id, $image)
    {
        //session_start();
        $con = Products::connect();
        //$username = $_SESSION["username"];
        
            $sql= "INSERT INTO `products`( `name`, `price`, `desc`, `description`, `star`, `category_id`, `image`) VALUES ('$name','$price','$desc','$description','$star','$category_id','$image')";
            if (mysqli_query($con, $sql)) {
                echo "Thành công";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        
        $con->close();
    }

    static function deleteProduct($id){
        $con = Products::connect();
        //b2: thao tác với csdl : CRUD
        $sql = "DELETE FROM `products` WHERE id = $id ";
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

    static function editProducts( $id,$name, $price,$desc,$description, $star, $category_id, $image)
    {
        //session_start();
        $con = Products::connect();
        //$username = $_SESSION["username"];
        if ($image!=null)
            $sql= "UPDATE `products` SET `name`='$name',`price`='$price',`desc`='$desc',`description`='$description',`star`='$star',`category_id`='$category_id',`image`='$image' WHERE id = $id";
        else
            $sql= "UPDATE `products` SET `name`='$name',`price`='$price',`desc`='$desc',`description`='$description',`star`='$star',`category_id`='$category_id' WHERE id = $id";
            if (mysqli_query($con, $sql)) {
                echo "Thành công";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        
        $con->close();
    }

}
?>