<?php

session_start();

include "dp.php";
if(isset($_POST["category"])){
    $category_query="SELECT*FROM tblcategory";
    $run_query=mysqli_query($con,$category_query);
    echo "
    <div class='l_w_title'>
    <h3>Browse Categories</h3>
    </div>
    <div class='widgets_inner'>
                  <ul class='list'>
    ";
    if(mysqli_num_rows($run_query)>0){
        while($row=mysqli_fetch_array($run_query)){
            $cid=$row["Cate_ID"];
            $cat_name=$row["Cate_Name"];
            echo "
            <li>
            <a href='#' class='category' cid='$cid'>$cat_name</a>
            </li>
            ";
        }
        echo "</ul>
        </div>";
    }
}

if(isset($_POST["brand"])){
    $brand_query="SELECT*FROM tblbrand";
    $run_query=mysqli_query($con,$brand_query);
    echo "
    <div class='l_w_title'>
    <h3>Product Brand</h3>
    </div>
    <div class='widgets_inner'>
                  <ul class='list'>
    ";
    if(mysqli_num_rows($run_query)>0){
        while($row=mysqli_fetch_array($run_query)){
            $bid=$row["B_ID"];
            $brand_name=$row["B_Name"];
            echo "
            <li>
            <a href='#' class='brand' bid='$bid'>$brand_name</a>
            </li>
            ";
        }
        echo "</ul>
        </div>";
    }
}

if(isset($_POST["page"])){
  $sql="SELECT * FROM tblproduct";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  $pageno=ceil($count/9);
  for($i=1;$i<=$pageno;$i++){
    
     echo"
    <li class='page-item'><a class='page-link' href='#' page='$i' id='page' >$i</a></li>
    ";
  }
}

if(isset($_POST["product"])){
  $limit=9;
  if(isset($_POST["setPage"])){
    $pageno=$_POST["pagenumber"];
    $start=($pageno*$limit) - $limit;
  }
  else{
    $start=0;
  }
    $product_query="SELECT*FROM tblproduct LIMIT $start,$limit";
    $run_query=mysqli_query($con,$product_query);
    if(mysqli_num_rows($run_query)>0){
        while($row=mysqli_fetch_array($run_query)){
                $pro_id=$row["P_ID"];
                $pro_name=$row["P_Name"];
                $pro_Cat=$row["P_Category"];
                $pro_brand=$row["P_Brand"];
                $pro_price=$row["P_Price"];
                $pro_quan=$row["P_Quantity"];
                $pro_img=$row["P_IMG"];
                echo "
                <div class='col-lg-4 col-md-6'>
                  <div class='single-product'>
                    <div class='product-img'>
                      <img
                        class='card-img'
                        src='img/product/$pro_img'
                        alt=''
                        style='width:262px;height:261px;'
                      />
                      <div class='p_icon'>
                        <a href='#' pid='$pro_id' id='detail'>
                          <i class='ti-eye'></i>
                        </a>
                        <a href='#' pid='$pro_id' id='product'>
                          <i class='ti-shopping-cart'></i>
                        </a>
                      </div>
                    </div>
                    <div class='product-btm'>
                      <a href='#' class='d-block'>
                        <h4>$pro_name</h4>
                      </a>
                      <div class='mt-3'>
                        <span class='mr-4'>$ $pro_price</span>
                      </div>
                    </div>
                  </div>
                </div>
                ";
        }
    }
}

if(isset($_POST["productsell"])){
  $product_query="SELECT*FROM tblproduct ORDER BY RAND() LIMIT 0,8";
  $run_query=mysqli_query($con,$product_query);
  if(mysqli_num_rows($run_query)>0){
      while($row=mysqli_fetch_array($run_query)){
              $pro_id=$row["P_ID"];
              $pro_name=$row["P_Name"];
              $pro_Cat=$row["P_Category"];
              $pro_brand=$row["P_Brand"];
              $pro_price=$row["P_Price"];
              $pro_quan=$row["P_Quantity"];
              $pro_img=$row["P_IMG"];
              echo "
            <div class='col-lg-3 col-md-6'>
              <div class='single-product'>
                <div class='product-img'>
                  <img class='card-img' src='img/product/$pro_img' alt=''
                    style='width:262px;height:261px';
                  />
                  <div class='p_icon'>
                    <a href='#'>
                      <i class='ti-eye' pid='$pro_id' id='detail'></i>
                    </a>
                    <a href='#' pid='$pro_id'>
                      <i class='ti-shopping-cart'></i>
                    </a>
                  </div>
                </div>
                <div class='product-btm'>
                  <a href='#' class='d-block'>
                    <h4>$pro_name</h4>
                  </a>
                  <div class='mt-3'>
                    <span class='mr-4'>$ $pro_price</span>
                  </div>
                </div>
              </div>
            </div>
            ";
      }
  }
}

if(isset($_POST["productnew"])){
  $product_query="SELECT*FROM tblproduct ORDER BY RAND() LIMIT 0,4";
  $run_query=mysqli_query($con,$product_query);
  if(mysqli_num_rows($run_query)>0){
      while($row=mysqli_fetch_array($run_query)){
              $pro_id=$row["P_ID"];
              $pro_name=$row["P_Name"];
              $pro_Cat=$row["P_Category"];
              $pro_brand=$row["P_Brand"];
              $pro_price=$row["P_Price"];
              $pro_quan=$row["P_Quantity"];
              $pro_img=$row["P_IMG"];
              echo "
              <div class='col-lg-6 col-md-6'>
              <div class='single-product'>
                <div class='product-img'>
                  <img class='img-fluid w-100' src='img/product/$pro_img' alt=''
                  style='width:262px;height:261px'
                  />
                  <div class='p_icon'>
                    <a href='#'>
                      <i class='ti-eye' pid='$pro_id' id='detail'></i>
                    </a>
                    <a href='#' pid='$pro_id'>
                      <i class='ti-shopping-cart'></i>
                    </a>
                  </div>
                </div>
                <div class='product-btm'>
                  <a href='#' class='d-block'>
                    <h4>$pro_name</h4>
                  </a>
                  <div class='mt-3'>
                    <span class='mr-4'>$ $pro_price</span>
                  </div>
                </div>
              </div>
            </div>
            ";
      }
  }
}

if(isset($_POST["get_selected_Category"])||isset($_POST["get_selected_Brand"])||isset($_POST["search"])){
  if(isset($_POST["get_selected_Category"])){
    $id=$_POST["cat_id"];
    $sql="SELECT * FROM tblproduct WHERE P_Category ='$id'";
  }
  else if(isset($_POST["get_selected_Brand"])){
    $id=$_POST["brand_id"];
    $sql="SELECT * FROM tblproduct WHERE P_Brand ='$id'";
  }
  else{
    $keyword=$_POST["keyword"];
    $sql="SELECT * FROM tblproduct WHERE P_Name LIKE '%$keyword%'";
  }
  $run_query=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($run_query)){
      $pro_id=$row["P_ID"];
      $pro_name=$row["P_Name"];
      $pro_Cat=$row["P_Category"];
      $pro_brand=$row["P_Brand"];
      $pro_price=$row["P_Price"];
      $pro_quan=$row["P_Quantity"];
      $pro_img=$row["P_IMG"];
      echo "
      <div class='col-lg-4 col-md-6'>
        <div class='single-product'>
          <div class='product-img'>
            <img
              class='card-img'
              src='img/product/$pro_img'
              alt=''
              style='width:262px;height:261px;'
            />
            <div class='p_icon'>
              <a href='#'>
                <i class='ti-eye' pid='$pro_id' id='detail' ></i>
              </a>
              <a href='#' pid='$pro_id' id='product'>
                <i class='ti-shopping-cart'></i>
              </a>
            </div>
          </div>
          <div class='product-btm'>
            <a href='#' class='d-block'>
              <h4>$pro_name</h4>
            </a>
            <div class='mt-3'>
              <span class='mr-4'>$ $pro_price</span>
            </div>
          </div>
        </div>
      </div>
      ";
    
  }
}

if(isset($_POST["addToProduct"])){
  $p_id=$_POST["proid"];
  $user_id=$_SESSION["uid"];
  $sql="SELECT * FROM tblcart WHERE P_ID ='$p_id' AND Cus_ID = '$user_id'";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  if($count>0){
    echo"Product is already added into the Cart...";
  }
  else{
    $sql="SELECT *FROM tblproduct WHERE P_ID = '$p_id'";
    $run_query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run_query);
    $id=$row["P_ID"];
    $pro_name=$row["P_Name"];
    $pro_img=$row["P_IMG"];
    $pro_price=$row["P_Price"];
    $sql="INSERT INTO `tblcart` (`ID`, `P_ID`, `IP_ADD`, `Cus_ID`,
     `P_Name`, `P_IMG`, `Quantity`, `Price`, `Total`) 
    VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_img',
     '1', '$pro_price', '$pro_price')";
     if(mysqli_query($con,$sql)){
       echo"<div class='alert alert-success'>
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       <b>Product is Added...!</b>
       </div>";
     }
  }
}

if(isset($_POST["get_cart_product"])){
  $uid=$_SESSION["uid"];
  $sql="SELECT * FROM tblcart WHERE Cus_ID ='$uid'";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  if($count>0){
    $no=1;
    while($row=mysqli_fetch_array($run_query)){
      $id=$row["ID"];
      $pro_id=$row["P_ID"];
      $pro_name=$row["P_Name"];
      $pro_img=$row["P_IMG"];
      $pro_price=$row["Price"];

      echo"
      <div class='row'>
        <div class='col-md-3' style='font-size:14px; text-align: center; color:black;'>$no</div>
        <div class='col-md-3' style='font-size:14px; text-align: center; color:black;'><img src='img/product/$pro_img' width='60px' height='50px'></div>
        <div class='col-md-3' style='font-size:14px; text-align: center; color:black;'>$pro_name</div>
        <div class='col-md-3' style='font-size:14px; text-align: center; color:black;'>$ $pro_price</div>
      </div>
      ";
      $no=$no+1;

    }
  }
}

if(isset($_POST["cart_count"])){
  $uid=$_SESSION["uid"];
  $sql="SELECT * FROM tblcart WHERE Cus_ID ='$uid'";
  $run_query=mysqli_query($con,$sql);
  echo mysqli_num_rows($run_query);
}

if(isset($_POST["cart_checkout"])){
  $uid=$_SESSION["uid"];
  $sql="SELECT * FROM tblcart WHERE Cus_ID ='$uid'";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  if($count>0){
    $no=1;
    $total_amt=1;
    $i=0;
    while($row=mysqli_fetch_array($run_query)){
      $id=$row["ID"];
      $pro_id=$row["P_ID"];
      $pro_name=$row["P_Name"];
      $pro_img=$row["P_IMG"];
      $qty=$row["Quantity"];
      $pro_price=$row["Price"];
      $total=$row["Total"];
      $price_array=array($total);
      $total_sum=array_sum($price_array);
      $total_amt=$total_amt+$total_sum;
      
      echo"
      <tr>
      <td>
        <div class='media'>
          <div class='d-flex'>
            <img src='img/product/$pro_img' width='100px' height='80px'>
          </div>
          <div class='media-body'>
            <p>$pro_name</p>
          </div>
        </div>
      </td>
      <td>
        <div class='product_count'>
          <input
              type='text'
              value='$pro_price'
              title='Price:'
              class='form-control price'
              pid='$pro_id'
              id='price-$pro_id'
              disabled>
          </div>
      </td>
      <td>
        <div class='product_count'>
          <input
            type='text'
            value='$qty'
            title='Quantity:'
            class='form-control qty'
            pid='$pro_id'
            id='qty-$pro_id'>
        </div>
      </td>
      <td>
        <div class='product_count'>
          <input
            type='text'
            value='$total'
            title='Total:'
            class='form-control total'
            pid='$pro_id'
            id='total-$pro_id'
            disabled>
        </div>
      </td>
      <td>
          <a href='' update_id='$pro_id' id='update' class='update'></a>
          <a href='' remove_id='$pro_id' id='remove'><i class='fas fa-times'></i></a>
      </td>
    </tr>
      ";
      $i=$i+1;
    }
  }
}


if(isset($_POST["cart_total"])){
  $uid=$_SESSION["uid"];
  $sql="SELECT * FROM tblcart WHERE Cus_ID ='$uid'";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  if($count>0){
    $no=1;
    $total_amt=0;
    while($row=mysqli_fetch_array($run_query)){
      $id=$row["ID"];
      $pro_id=$row["P_ID"];
      $pro_name=$row["P_Name"];
      $pro_img=$row["P_IMG"];
      $qty=$row["Quantity"];
      $pro_price=$row["Price"];
      $total=$row["Total"];
      $price_array=array($total);
      $total_sum=array_sum($price_array);
      $total_amt=$total_amt+$total_sum;
      
    }
    echo"<h5>$ $total_amt</h5>";
  }
}

if(isset($_POST["removeFromCart"])){
  $pid=$_POST["removeid"];
  $uid=$_SESSION["uid"];
  $sql="DELETE FROM tblcart WHERE Cus_ID='$uid' AND P_ID='$pid'";
  $run_query=mysqli_query($con,$sql);
  if($run_query){
    echo"<div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Product is Romoved from Cart...!</b>
    </div>";
  }
}


if(isset($_POST["updateProduct"])){
  $pid=$_POST["updateid"];
  $uid=$_SESSION["uid"];
  $qty=$_POST["qty"];
  $price=$_POST["price"];
  $total=$_POST["total"];
  $sql="UPDATE tblcart SET Quantity='$qty', Price='$price', Total='$total'
   WHERE Cus_ID='$uid' AND P_ID='$pid'";
  $run_query=mysqli_query($con,$sql);
  if($run_query){
    echo"<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Product is Updated...!</b>
    </div>";
  }
}

if(isset($_POST["productDetail"])){
  $uid=$_SESSION["uid"];
  $pid=$_POST["keyword"];
  $sql="SELECT *FROM tblproduct WHERE P_ID='$pid'";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($run_query);
  if($count>0){
    $row=mysqli_fetch_array($run_query);
      $pro_id=$row["P_ID"];
      $pro_name=$row["P_Name"];
      $pro_img=$row["P_IMG"];
      $pro_cate=$row["P_Category"];
      $pro_brand=$row["P_Brand"];
      $qty=$row["P_Quantity"];
      $pro_price=$row["P_Price"];

      $sql1="SELECT *FROM tblcategory WHERE Cate_ID='$pro_cate'";
      $run_query1=mysqli_query($con,$sql1);
      $row1=mysqli_fetch_array($run_query1);
      $category=$row1["Cate_Name"];

    echo"
    <div class='container'>
    <div class='row s_product_inner'>
      <div class='col-lg-6'>
        <div class='s_product_img'>
          <img src='img/product/$pro_img' alt='' width='600px' height='550px'>
        </div>
      </div> 
      <div class='col-lg-5 offset-lg-1'>
        <div class='s_product_text'>
          <h3>$pro_name</h3>
          <h2>$ $pro_price</h2>
          <ul class='list'>
            <li>
              <a class='active' href='#'>
                <span>Category</span> : $category</a
              >
            </li>
            <li>
              <a href='#'> <span>Availibility</span> : In Stock</a>
            </li>
          </ul>
          <p>
            Mill Oil is an innovative oil filled radiator with the most
            modern technology. If you are looking for something that can
            make your interior look awesome, and at the same time give you
            the pleasant warm feeling during the winter.
          </p>
          <div class='product_count'>
            <label for='qty'>Quantity:</label>
            <input
              type='text'
              name='qty'
              id='sst'
              maxlength='12'
              value='1'
              title='Quantity:'
              class='input-text qty'
            />
          </div>
          <div class='card_area'>
            <a class='main_btn' href='#' id='product' pid='$pro_id'>Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    ";
  }
}

if(isset($_POST["makeorder"])){
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $oid=generateRandomString($length=10);
  $uid=$_SESSION["uid"];
  $trn_date = date("Y-m-d H:i:s");
  $sql="INSERT INTO `tblorder` (`O_ID`, `O_Date`, `Cus_ID`) 
 VALUES ('$oid', '$trn_date', '$uid')";
  $run_query=mysqli_query($con,$sql);
  
  $sql1="SELECT *FROM tblorder WHERE O_ID ='$oid'";
  $run_query1=mysqli_query($con,$sql1);
  if($run_query1){
    $sql2=  " INSERT INTO tblorderdetail (O_ID, P_ID, Quantity)
              SELECT '$oid', P_ID, Quantity
              FROM tblcart
              WHERE Cus_ID='$uid'";
      $run_query2=mysqli_query($con,$sql2);
      
      if($run_query2){
        $sql3="DELETE FROM tblcart
        WHERE Cus_ID='$uid'";

        $run_query3=mysqli_query($con,$sql3);
        echo"truesssssss";
      }
  }
}
?>