<div id="footer-top">
        <div class="container">
            <div class="row">
                <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                    <h2><a href="#"><img class="img-fluid" src="img/logo.png"></a></h2>
                    <p>
                        Xuất thân từ cửa hàng kinh doanh máy tính được thành lập từ năm 1997, NVT mobie được biết đến là đơn vị bán lẻ lâu đời và uy tín tại Việt Nam. NVT mobie chuyên kinh doanh các sản phẩm công nghệ thông tin, thiết bị giải trí game, thiết bị văn phòng và thiết bị hi-tech của nhiều nhãn hàng lớn như Dell, Asus, HP, MSI, Lenovo…
                    </p>
                </div>
                <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                    <h3>Địa chỉ</h3>
                    <p>475A, Điện Biên Phủ, P. 25, Q.Bình Thạnh, Tp. Hồ Chí Minh</p>
                    <p>Tầng 11 Minh Long Tower, số 17 Bà Huyện Thanh Quan, Phường Võ Thị Sáu, Quận 3, TP. Hồ Chí Minh</p>
                </div>
                <div id="service" class="col-lg-3 col-md-6 col-sm-12">
                    <h3>Dịch vụ</h3>
                    <p>Tất cả các sản phẩm do NVT Comphuter bán đều được bảo hành đúng và đủ theo chính sách của nhà sản xuất.</p>
                    <p>Tất cả sản phẩm hư hỏng, không thuộc điều kiện đổi trả, sẽ được gửi cho nhà sản xuất hoặc đơn vị được nhà sản xuất uỷ quyền để sửa chữa theo đúng chính sách bảo hành của họ.</p>
                    <p>NVT mobie không chịu trách nhiệm nếu nhà sản xuất và/hoặc đơn vị được nhà sản xuất uỷ quyền từ chối bảo hành và/hoặc không thực hiện theo đúng cam kết của họ.</p>
                </div>
                <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                    <h3>Hotline</h3>
                    <p>Hotline: +84 123 456 789</p>
                    <p>Hỗ trợ: support@nvtmobie.tech</p>
                    <p>Hỗ trợ Khách hàng: cskh@nvtmobie.tech</p>
                    <p>Liên hệ báo giá: baogia@nvtmobie.tech</p>
                    <p>Hợp tác phát triển: hoptac@nvtmobie.tech</p>
                </div>
            </div>
        </div>
    </div>

    <!--	Footer	-->
    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>
                        NVT © Copyrights 2021 Công Ty TNHH NVT Computer
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--	End Footer	-->

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"> </script>
    <script type="text/javascript">
    $('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  wrapAround:true,
  freeScroll: true
});
    
    
    </script>
    <script>
     $(document).scroll(function () {
        var vitri = $("body").scrollTop();
      
        if (vitri >=100) {
            $(".header0").addClass("header01");
        }

        else {
            $(".header0").removeClass("header01")

        }

    })
   


</script>
<script>

    $('#add-cart').click(function(event){
        $('.pay').addClass('noidunghienra');
        $('.momo').addClass('momohienra');

    
    });
    $('.close1, .momo').click(function(event){
        $('.pay').removeClass('noidunghienra');
        $('.momo').removeClass('momohienra');

    
    });
</script>

   
</body>

</html>