<h2>Danh sách khách hàng</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <th>customerNumber</th>
            <th>customerName </th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone</th>
            <th>addressLine1 </th>
            <th>city</th>
            <th>country</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers  as $key => $customer) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $customer->customerNumber ?></td>
                <td><?php echo $customer->customerName ?></td>
                <td><?php echo $customer->contactLastName ?>
                <td><?php echo $customer->contactFirstName ?></td>
                <td><?php echo $customer->phone ?></td>
                <td><?php echo $customer->addressLine1 ?>
                <td><?php echo $customer->city ?></td>
                <td><?php echo $customer->country ?></td>
                <td>
                    <a href="./index.php?page=delete&id=<?php echo $customer->customerNumber; ?>" class="btn btn-warning btn-sm">Delete</a>
                </td>
                <td>
                    <a href="./index.php?page=edit&id=<?php echo $customer->customerNumber; ?>" class="btn btn-sm">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>