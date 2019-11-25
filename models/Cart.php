<?php
class Cart{
    #Begin properties
    var $id;
    var $name;
    var $price;
    var $quantity;
    var $image;
    var $id_product;

    #Construct function
    function Cart($id , $name, $price, $quantity, $image, $id_product)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->id_product = $id_product;
    }
    

    static function connect(){
        $con = new  mysqli("localhost","root","","products_carts");
        $con->set_charset("utf8");//hướng đối tượng
        if($con->connect_error)
            die("kết nối thất bại. Chi tiết:".$con->connect_error);
        return $con;
    }
    static function getListCarts(){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image, products.id as 'id_product' FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un'";
        $result =  $con->query($sql);
        $lsCarts = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $cat = new Cart($row["id"],$row["name"],$row["price"],$row["quantity"],$row["image"],$row["id_product"]);
                array_push($lsCarts,$cat);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsCarts;
    }

    static function getCartById($id){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image, products.id as 'id_product' FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un' and carts.id = $id";
        $result =  $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $cat = new Cart($row["id"],$row["name"],$row["price"],$row["quantity"],$row["image"],$row["id_product"]);
                return $cat;
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return null;
    }

    static function getCartByIdProduct($id){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un' and products.id = $id";
        $result =  $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                // $cat = new Cart($row["id"],$row["name"],$row["price"],$row["quantity"],$row["image"]);
                return intval($row["id"]);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return -1;
    }

    static function getTotalPriceCarts(){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un'";
        $result =  $con->query($sql);
        $totalPrice = 0;
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $totalPrice += intval($row["price"]) * intval($row["quantity"]);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $totalPrice;
    }

    static function getAmountCarts(){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un'";
        $result =  $con->query($sql);
        $dem = 0;
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $dem += intval($row["quantity"]);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $dem;
    }

    static function addCarts($item){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $indexCart = Cart::getCartByIdProduct($item->id);
        $un = $_SESSION['username'];
        if ($indexCart==-1)
            $sql = "INSERT INTO `carts`( `id_product`, `quantity`, `username`) VALUES ($item->id,1,'$un')";
        else {
            $temp = Cart::getCartById($indexCart);
            $quantity = intval($temp->quantity) + 1;
            $sql = "UPDATE `carts` SET `quantity`=$quantity WHERE username = '$un' and id = $indexCart ";
        }
            
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }
    static function addBill($item){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "INSERT INTO `bills`( `id_product`, `quantity`, `date`, `username`) VALUES ('$item->id_product',$item->quantity,NOW(),'$un') ";
        
        if (mysqli_query($con, $sql)) {
            echo "---------------------------------------------";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }
    static function deleteBills(){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "DELETE FROM `carts` WHERE username = '$un'";
        
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

    static function checkOutBills(){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT carts.id,products.name, products.price, carts.quantity, products.image, products.id as 'id_product' FROM carts inner join products on carts.id_product = products.id WHERE carts.username = '$un'";
        $result =  $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $cat = new Cart($row["id"],$row["name"],$row["price"],$row["quantity"],$row["image"],$row["id_product"]);
                Cart::addBill($cat);
            }
        }
        Cart::deleteBills();
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
    }

    static function deleteCart($id){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "DELETE FROM `carts` WHERE id = $id and username = '$un'";
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

    static function changeQuantityCart($id,$value){
        $con = Cart::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $item = Cart::getCartById($id);
        $quantity = intval($value) + intval($item->quantity);
        $quantity = $quantity == 0 ? 1:$quantity;
        $sql = "UPDATE `carts` SET `quantity`=$quantity WHERE username = '$un' and id = $id ";
        if (mysqli_query($con, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        //b3 : đóng kết nối
        $con->close();
    }

}
?>