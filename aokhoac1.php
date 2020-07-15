<!DOCTYPE html>
<html>


<body>
<?php
include 'inc/header.php'
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
                    <img class="card-img " src="./images/aokhoac1.jpg ">
                    <div class=" card-body ">
                        <h4 class="card-title ">
                            350000
                        </h4>
                        <p class="card-text ">Áo Khoác Hoodie Y2010 E04</p>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mt-4">
                    <h5>Áo Khoác Hoodie Y2010 E04</h5>
                    <h5 style="color: brown;">350000 đ</h5>

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
                                    <td>ĐEN, M</td>
                                    <td>ĐEN, L</td>
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
                    <h6 style="color: brown;">Chất liệu: VẢY CÁ CHÉP</h6>
                    <h6 style="color: brown;">Thành phần: 95%cotton 5%spandex</h6>
                    <h6 style="color: brown;">Cách nhiệt tốt, độ bền màu cao.</h6>
                    <h6 style="color: brown;">Co giãn, hút ẩm tốt và thấm hút mồ hôi.</h6>
                    <h6 style="color: brown;">không khuyến kích ăn dưới mọi hình thức</h6>
                    <h6 style="color: brown;">- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.</h6>
                </div>
            </div>
        </div>

        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-12">
                    <h2>FOLLOW US</h2>
                </div>
                <div class="col-12 social padding">
                    <a href="https://www.facebook.com/www.YaMe.vn/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/yame_vn/?fbclid=IwAR3dkgxQ0J4FNLJgtp4ouf2XQKaUEsfhytOV6Chf6ThiTjTQtAtFIVEYeBg"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCi0jrGCcWZBymVWleyWcz4Q"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

</body>
<?php
include 'inc/footer.php'
?>
</html>