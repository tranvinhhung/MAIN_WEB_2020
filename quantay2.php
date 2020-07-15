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

                    <h4>Giỏ Hàng</h4>
                </div>
                <div class="modal-body">
                    <p>Sản phẩm này sẽ được thêm vào giỏ hàng</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" href="#">Đặt Hàng</button>
                </div>
            </div>

        </div>
    </div>

    
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img " src="./images/quantay1.jpg ">
                    <div class=" card-body ">
                        <h4 class="card-title ">
                            425000
                        </h4>
                        <p class="card-text ">Quần Tây No Style HG08</p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mt-4">
                    <h5>Quần Tây No Style HG08</h5>
                    <h5 style="color: brown;">425000 đ</h5>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><a href="#" style="color: black;" data-toggle="modal" data-target="#myModal">Mua</a></th>
                                    <th scope="col"><a href="#" style="color: black;" data-toggle="modal" data-target="#myModal">Mua</a></th>
                                    <th scope="col"><a href="#" style="color: black;" data-toggle="modal" data-target="#myModal">Mua</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Mã sản phẩm</th>
                                    <td>
                                        00192132004</td>
                                    <td>0013213422005</td>
                                    <td>001946752006</td>
                                </tr>
                                <tr>
                                    <th scope="row">Size</th>
                                    <td> Xanh trắng, M</td>
                                    <td> Xanh trắng, L</td>
                                    <td> Xám trắng, XL</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tình trạng</th>
                                    <td>Còn hàng</td>
                                    <td>Còn hàng</td>
                                    <td>Còn hàng</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mt-4" style="display:block;">
                    <h5>Mô tả sản phẩm</h5>
                    <h6 style="color: brown;">Chất liệu: kaki</h6>
                    <h6 style="color: brown;">Thành phần: 98%cotton 2%spandex</h6>
                    <h6 style="color: brown;">bận quần giúp bạn đẹp hơn khi ở ngoài đường</h6>
                    <h6 style="color: brown;"></h6>
                    <h6 style="color: brown;">- Giặt để thơm không giặt bận cũng được , hơi thúi</h6>
                    <h6 style="color: brown;">- được sử dụng máy sấy, ủi ở nhiệt độ âm.</h6>
                </div>
            </div>
        </div>

<?php
include 'inc/footer.php'
?>
</body>

</html>