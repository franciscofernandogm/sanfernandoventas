<?php
class Cart extends Product{
	public $cart=array();
	public function __construct() {
        parent::__construct();
        if(isset($_SESSION['cart'])){
          $this->cart=$_SESSION['cart'];
        }
    }

    public function add_item($code,$amount){
    	$search=$this->search_code($code);
      if($search >0){
        $code=$this->code;
        $product=$this->product;
        $price=$this->price;
        $item= array(
          'code'=>$code,
          'product'=>$product,
          'price'=>$price,
          'amount'=>$amount
        );
        if(!empty($this->cart)){
          foreach ($this->cart as $key) {
            if($key['code']==$code){
              $item['amount']=$key['amount']+$item['amount'];
            }
          }
        }
        $item['subtotal']=$item['price']*$item['amount'];
        $id=md5($code);
        $_SESSION["cart"][$id]=$item;
        $this->update_cart();
      }
    }

    public function remove_item($code){
      $id=md5($code);
      unset($_SESSION['cart'][$id]);
      $this->update_cart();
      return true;
    }
    
    public function borrar(){
      foreach ($this->cart as $key){
        $code=$key['code'];
      $id=md5($code);
      unset($_SESSION['cart'][$id]);
      }
      $this->update_cart();
      return true;
    }
    public function get_items(){
      $html='';
      for($i=1;$i<=56;$i++){
        $_SESSION["code$i"]='';
        $_SESSION["producto$i"]='';
        $_SESSION["price$i"]='';
        $_SESSION["subtotal$i"]='';
        $_SESSION["amount$i"]='';
      }
      if(!empty($this->cart)){
        foreach ($this->cart as $key){
          $code="'".$key['code']."'";
        $html.='<tr>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black"><em><b>'.$key['code'].'</b></em></td>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black"><em><b>'.$key['product'].'</b></em></td>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black"><em><b>S/'.number_format($key['price'],2).'</b></em></td>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black"><em><b>'.$key['amount'].'</td>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black"><em><b>S/'.number_format($key['subtotal'],2).'</b></em></td>
                  <td style="text-align:center;padding:10px;background-color:white;border:1px solid black">
                         <button onclick="deleteProduct('.$code.');" style="padding:8px 30px;font-size:17px;border-radius: 10px;color: #00cc88;background-color: black;border: 2px solid #00cc88;text-decoration: none;;outline: none;"><i class="fas fa-trash-alt"></i></button>
                  </td>
               </tr>';
          for($i=1;$i<=9;$i++){
          if($key['code']=="P0$i"){
               $_SESSION["code$i"]=$key['code'];
               $_SESSION["producto$i"]=$key['product'];
               $_SESSION["price$i"]=$key['price'];
               $_SESSION["subtotal$i"]=$key['subtotal'];
               $_SESSION["amount$i"]=$key['amount'];
             }
            }
            for($i=10;$i<=56;$i++){
          if($key['code']=="P$i"){
               $_SESSION["code$i"]=$key['code'];
               $_SESSION["producto$i"]=$key['product'];
               $_SESSION["price$i"]=$key['price'];
               $_SESSION["subtotal$i"]=$key['subtotal'];
               $_SESSION["amount$i"]=$key['amount'];
             }
            }
      
      }
    }
    return $html;
  }

    public function get_total_items(){
      $total=0;
      if(!empty($this->cart)){
        foreach($this->cart as $key){
          $total +=$key['amount'];
        }
      }
      return $total;
    }

    public function get_total_payment(){
      $total=0;
      if(!empty($this->cart)){
        foreach($this->cart as $key){
          $total +=$key['subtotal'];
        }
      }
      $_SESSION["total"]=$total;
      return number_format($total,2);
    }

    public function update_cart(){
      self::__construct();
    }
}
?>