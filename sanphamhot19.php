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
				<img class="card-img " src="./images/hot19.jpg ">
				<div class=" card-body ">
					<h4 class="card-title ">
						299000
					</h4>
					<p class="card-text ">Balo Y2010 H59</p>
					
				</div>
			</div>
        </div>
        <div class="col-md-5">
            <div class="mt-4">
               <h5>Balo Y2010 H59</h5>
               <h5 style="color: brown;">299000 đ</h5>
                
            </div>  
            <div class="row"><div class="col-md-12"><table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">Mua</a></th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>0019097002</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    <td>Đen, Free Size</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Tình trạng</th>
                    <td>Còn hàng</td>
                   
                  </tr>
                </tbody>
              </table></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mt-4"style="display:block;">
               <h5>Mô tả sản phẩm</h5>
               <h6 style="color: brown;">H59 - ESSENTIAL BACKPACK</h6>
               <h6 style="color: brown;">- Vải chính: 420D PVC trượt nước + Lót 210D</h6>
               <h6 style="color: brown;">- PE foam 5mm/8mm chống sốc tuyệt đối.</h6>
               <h6 style="color: brown;">Thiết kế thời trang & Đa dụng</h6>
               <h6 style="color: brown;">- Nhiều ngăn đa tính năng</h6>
               <h6 style="color: brown;">- Ngăn chính rộng</h6>
            </div>
        </div>
	</div>
<?php
include 'inc/footer.php'
?>
</body>
</html>
    

