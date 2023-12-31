
    <div class="banneranh">
        <img class="slide" src="/img/banner1.jpg" alt="Image 1">
        <img class="slide" src="/img/banner2.jpg" alt="Image 2">
      </div>

    <div id="bannerchu">
        <span>Chào bạn đến với DDH-08 Store!</span>
    </div>

<!-- phan main -->
<div class="container">
    <div class="header-image">
      <img src="/img/banner1.jpg" alt="Header Image">
      <div class="overlay">
        <div class="header-text">
          <a href="index.php?type=chinhsachbaohanh"><h1 style="font-size: 48px;">Chính sách bảo hành đồng hồ</h1></a>
        </div>
      </div>
    </div>
  
    <div class="content-section">
        <p>Chiếc đồng hồ bạn mua tại hệ thống DDH-08 Store (Mua trực tuyến hoặc trực tiếp tại cửa hàng) đều là hàng chính hãng 100%, áp dụng chính sách bảo hành theo từng hãng đồng hồ bao gồm bảo hành quốc tế.</p>
        <h2 class="text-warning">Nơi tiếp nhận bảo hành:</h2>
        <ol>
          <li>Đến trực tiếp hoặc gửi đồng hồ kèm theo Thẻ bảo hành qua dịch vụ chuyển phát đến DDH-08 Store.</li>
          <li>Đến trực tiếp hoặc gửi đồng hồ kèm theo Thẻ bảo hành qua dịch vụ chuyển phát đến Trung tâm bảo hành của hãng tại Việt Nam.</li>
          <li>Khi bạn ra nước ngoài, vui lòng tra cứu Trung tâm bảo hành của hãng tại quốc gia bạn đến, đến trực tiếp hoặc gửi đồng hồ kèm Thẻ bảo hành qua dịch vụ chuyển phát để làm thủ tục bảo hành cho đồng hồ.</li>
        </ol>
        <p>Tất cả đồng hồ được bảo hành về phần bộ máy bên trong, thời gian bảo hành theo qui định của từng hãng đồng hồ được ghi trên Thẻ bảo hành (Có nghĩa là ngoài phần bộ máy bên trong đồng hồ các bộ phận khác không áp dụng bảo hành như: vỏ, dây đeo, mặt kính). Đồng hồ hết hạn bảo hành khi Khách hàng yêu cầu sửa chữa, thay thế linh kiện sẽ áp dụng thu phí dịch vụ với sự đồng ý của Khách hàng.</p>
        
        <h2 class="text-danger">Lưu ý quan trọng:</h2>
        <ul>
          <li>Trong thời gian 06 tháng kể từ ngày mua nếu dây da nguyên bản chính hãng kèm theo đồng hồ bị hỏng, chúng tôi sẽ gửi tặng 01 bộ dây da mới nhãn hiệu ROCHET trị giá 500.000đ (không áp dụng với đồng hồ giảm giá đặc biệt).</li>
          <li>Đồng hồ Automatic (đồng hồ máy cơ tự động) được miễn phí lau dầu, bảo dưỡng trọn đời và không hạn chế số lần.</li>
          <li>Đồng hồ Quartz (đồng hồ máy sử dụng Pin) được miễn phí thay Pin trọn đời và không hạn chế số lần (không áp dụng với đồng hồ sử dụng Pin năng lượng, Pin Eco-Drive).</li>
          <li>Miễn phí vệ sinh vỏ đồng hồ, dây đeo đồng hồ (dây kim loại) trọn đời và không hạn chế số lần.</li>
          <li>Giảm 10% phí linh kiện thay thế.</li>
          <li>Miễn phí giao nhận đồng hồ bảo hành toàn quốc.</li>
      <!-- Các phần khác -->

    </div>
    <h2 class="text-dhnam">Đăng ký bảo hành:</h2>
      <form action="process_registration.php" method="post">
        <div class="form-group">
          <label for="name">Họ và tên:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="nameClock">Tên đồng hồ:</label>
          <input type="text" class="form-control" id="nameClock" name="nameClock" required>
        </div>
        <div class="form-group">
          <label for="serviceCenter">Chọn trung tâm bảo hành:</label>
          <select class="form-control" id="serviceCenter" name="serviceCenter">
            <option value="dongho_tot">DDH-08 Store</option>
            <option value="hcm_center">Trung tâm bảo hành HCM</option>
            <option value="hanoi_center">Trung tâm bảo hành Hà Nội</option>
          </select>
        </div>
        <div class="form-check mt-3">
          <input type="checkbox" class="form-check-input" id="agreeCheck">
          <label class="form-check-label" for="agreeCheck">Tôi đồng ý với điều khoản sử dụng</label>
        </div>
        <button type="button" class="btn btn-primary mt-3" onclick="agreeTerms()">Đăng ký</button>
      </form>
  </div>

<script src="view/user/asset/js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
