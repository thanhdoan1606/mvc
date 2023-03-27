<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
    <div class="form-group"><label>STT</label>
        <input type="hidden" value="<?php echo $customer->customerNumber; ?>" class="form-control" name="customerNumber">
    </div>
    <div class="form-group"><label>Tên khách hàng</label>
    <input type="text" value="<?php echo $customer->customerName; ?>" class="form-control" name="customerName">
    </div>
    <div class="form-group"><label>Tên</label>
    <input type="text" value="<?php echo $customer->contactLastName; ?>" class="form-control" name="contactLastName">
    </div>
    <div class="form-group"><label>Họ</label>
    <input type="text" value="<?php echo $customer->contactFirstName; ?>" class="form-control" name="contactFirstName">
    </div>
    <div class="form-group"><label>SDT</label>
    <input type="text" value="<?php echo $customer->phone; ?>" class="form-control" name="phone">
    </div>
    <div class="form-group"><label>Địa chỉ</label>
    <input type="text" value="<?php echo $customer->addressLine1; ?>" class="form-control" name="addressLine1">
    </div>
    <div class="form-group"><label>Thành phố</label>
    <input type="text" value="<?php echo $customer->city; ?>" class="form-control" name="city">
    </div>
    <div class="form-group"><label>Quốc gia</label>
    <input type="text" value="<?php echo $customer->country; ?>" class="form-control" name="country">
    </div>

    <div class="form-group"><input type="submit" value="Update" class="btn btn-primary" />
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>