<!DOCTYPE html>
<html>

<body>
<?php
include 'inc/header.php';
	?>  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 >Giỏ Hàng</h4>
      </div>
      <div class="modal-body">
        <p>Sản phẩm này sẽ được thêm vào giỏ hàng</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default"href="#" >Đặt Hàng</button>
      </div>
    </div>

  </div>
</div>
    


	

<div class="container-fluid padding">
	<div class="row padding" >
		<div class="col-md-4">
			<div class="card">
				<img class="card-img " src="./images/hot1.jpg ">
				<div class=" card-body ">
					<h4 class="card-title ">
						285000
					</h4>
					<p class="card-text ">Sơ Mi Nam Y2010 BD-A97</p>
					
				</div>
			</div>
        </div>
        <div class="col-md-5">
            <div class="mt-4">
               <h5>Sơ Mi Nam Y2010 BD-A97</h5>
               <h5 style="color: brown;">285000 đ</h5>
                
            </div>  
            <div class="row"><div class="col-md-12"><table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>0019416001</td>
                    <td>0019416002</td>
                    <td>0019416003</td>
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    <td>Đen, M</td>
                    <td>Đen, L</td>
                    <td>Đen, XL</td>
                  </tr>
                  <tr>
                    <th scope="row">Tình trạng</th>
                    <td>Còn hàng</td>
                    <td>Còn hàng</td>
                    <td>Còn hàng</td>
                  </tr>
                </tbody>
              </table></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mt-4"style="display:block;">
               <h5>Mô tả sản phẩm</h5>
               <h6 style="color: brown;">Chất liệu: Kate</h6>
               <h6 style="color: brown;">Thành phần: Cotton và Polyester.</h6>
               <h6 style="color: brown;">- Vải ít nhăn, mặt vải phẳng và mịn</h6>
               <h6 style="color: brown;">- Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát</h6>
               <h6 style="color: brown;">- Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo</h6>
               <h6 style="color: brown;">- Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )</h6>
            </div>
        </div>
	</div>
<?php
include 'inc/footer.php'
?>
</body>
</html>
    

