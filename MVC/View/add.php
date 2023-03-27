<?php if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
} ?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group"><label>STT</label>
                    <input type="text" class="form-control" name="customerNumber" placeholder="" required>
                </div>
                <div class="form-group"><label>Tên khách hàng</label>
                    <input type="text" class="form-control" name="customerName" placeholder="" required>
                </div>
                <div class="form-group"><label>Tên</label>
                    <input type="text" class="form-control" name="contactLastName" placeholder="" required>
                </div>
                <div class="form-group"><label>Họ</label>
                    <input type="text" class="form-control" name="contactFirstName" placeholder="" required>
                </div>
                <div class="form-group"><label>SDT</label>
                    <input type="number" class="form-control" name="phone" placeholder="" required>
                </div>
                <div class="form-group"><label>Địa chỉ</label>
                    <input type="text" class="form-control" name="addressLine1" placeholder="" required>
                </div>
                <div class="form-group"><label>Thành phố</label>
                    <input type="text" class="form-control" name="city" placeholder="" required>
                </div>
                <div class="form-group"><label>Quốc gia</label>
                    <input type="text" class="form-control" name="country" placeholder="" required>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>