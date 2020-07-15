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
				<img class="card-img " src="./images/hot14.jpg ">
				<div class=" card-body ">
					<h4 class="card-title ">
						249000
					</h4>
					<p class="card-text ">Túi Đeo Y2010 B15</p>
					
				</div>
			</div>
        </div>
        <div class="col-md-5">
            <div class="mt-4">
               <h5>Túi Đeo Y2010 B15</h5>
               <h5 style="color: brown;">249000 đ</h5>
                
            </div>  
            <div class="row"><div class="col-md-12"><table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><a href="#"style="color: black;"data-toggle="modal" data-target="#myModal">mua</a></th>
                   
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>0018555002</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Size</th>
                    <td>Đen, Free size</td>
                    
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
               <h6 style="color: brown;">VALKNUT BAG</h6>
               <h6 style="color: brown;">Chất liệu: 420D Caro trượt nước
				Thiết kế ấn tượng với logo Valknut thêu chỉ kim tuyến Kyototex</h6>
               <h6 style="color: brown;">Valknut là một biểu tượng bao gồm ba hình tam giác lồng vào nhau. Nó xuất hiện trên một loạt các vật thể từ hồ sơ khảo cổ của các dân tộc Đức cổ đại. Cho đến hiện tại, ý nghĩa thật sự của Valknut vẫn còn nhiều tranh cãi và bí ẩn.</h6>
               
            </div>
        </div>
	</div>
<?php
include 'inc/footer.php'
?>
</body>
</html>
    

