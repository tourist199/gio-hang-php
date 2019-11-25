<?php
class Bill{
    #Begin properties
    var $id;
    var $name;
    var $price;
    var $quantity;
    var $image;
    var $date;

    #Construct function
    function Bill($id , $name, $price, $quantity, $image, $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->date = $date;
    }
    

    static function connect(){
        $con = new  mysqli("localhost","root","","products_carts");
        $con->set_charset("utf8");//hướng đối tượng
        if($con->connect_error)
            die("kết nối thất bại. Chi tiết:".$con->connect_error);
        return $con;
    }
    static function getListBills(){
        $con = Bill::connect();
        //b2: thao tác với csdl : CRUD
        $un = $_SESSION['username'];
        $sql = "SELECT bills.id,products.name, products.price, bills.quantity, products.image,bills.date FROM products inner join bills on bills.id_product = products.id WHERE bills.username = '$un'";
        $result =  $con->query($sql);
        $lsBills = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                $bill = new Bill($row["id"],$row["name"],$row["price"],$row["quantity"],$row["image"],$row["data"]);
                array_push($lsBills,$bill);
            }
        }
        //b3 : đóng kết nối
        $con->close();
        //echo "<h4>kết nối thành công<h4>";
        return $lsBills;
    }


}
?>