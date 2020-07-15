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
				<img class="card-img " src="./images/hot15.jpg ">
				<div class=" card-body ">
					<h4 class="card-title ">
						425000
					</h4>
					<p class="card-text ">Quần Jean Slimfit Y2010 B36</p>
					
				</div>
			</div>
        </div>
        <div class="col-md-5">
            <div class="mt-4">
               <h5>Quần Jean Slimfit Y2010 B36</h5>
               <h5 style="color: brown;">425000 đ</h5>
                
            </div>  
            <div class="row"><div class="col-md-12"><table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
					<th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
					<th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>0019586006</td>
                    <td>0019586007</td>
					<td>0019586008</td>
					<td>0019586009</td>
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    <td>Xanh Dương, 29</td>
                    <td>Xanh Dương, 30</td>
					<td>Xanh Dương, 31</td>
					<td>Xanh Dương, 32</td>
                  </tr>
                  <tr>
                    <th scope="row">Tình trạng</th>
                    <td>Còn hàng</td>
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
               <h6 style="color: brown;">Chất liệu: Jean Cotton</h6>
               <h6 style="color: brown;">Thành phần: 98% cotton 2% spandex</h6>
               <h6 style="color: brown;">- Độ bền cao</h6>
               <h6 style="color: brown;">- Mặc mát, rất thoải mái.</h6>
              
            </div>
        </div>
	</div>
<?php
include 'inc/footer.php'
?>
</body>
</html>
    

