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
                    <img class="card-img " src="./images/balo3.jpg ">
                    <div class=" card-body ">
                        <h4 class="card-title ">
                            249000
                        </h4>
                        <p class="card-text ">
                            Túi Đeo Y2010 B25 BD-A74</p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mt-4">
                    <h5>Balo Y2010 H55</h5>
                    <h5 style="color: brown;">249000 đ</h5>

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
                                        0019422004</td>
                                    <td>0019422005</td>
                                    <td>0019422006</td>
                                </tr>
                                <tr>
                                    <th scope="row">Size</th>
                                    <td> ĐEN, M</td>
                                    <td> ĐEN, L</td>
                                    <td> ĐEN, XL</td>
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
                    <h6 style="color: brown;">H55 - ESSENTIAL BACKPACK
                        <br> Chất liệu: - Vài chính: 900D PVC Water proof + Lót 210D Logo chữ Y
                        <br>- PE foam 5mm + Air Mesh quai đeo và lưng chống sốc tuyệt đối.
                        <br> - Logo YaMe cùng Nhãn chữ Y/H55 chính hãng
                        <br>- Dây kéo YKK #8 siêu bền Thiết kế thời trang & Đa dụng
                        <br> - Nhiều ngăn đa tính năng - Ngăn chính rộng
                        <br>- Ngăn chống shock cho Laptop - Ngăn nhỏ bên trong tiện dụng
                        <br>- Ngăn phụ ngoài Màu sắc: Đỏ - Xanh Đen - Xám trắng - Xám đậm Kích thước:
                    </h6>

                </div>
            </div>
        </div>

<?php
include 'inc/footer.php'
?>
</body>

</html>