<?php
if (strlen($MESSAGE)) {
    echo "<h5 >$MESSAGE</h5>";
}
?>

<div class="card-header">
    <h3>
        Loại hàng
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post">
    <table boder="1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">MÃ LOẠI</th>
                <th scope="col">TÊN LOẠI</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($items as $item) {
                extract($item);
            ?> 
             
                <tr scope="row">
                    <th> <?= $count++; ?></th>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>">Sửa</a>
                        <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="index.php?btn_delete&id=<?= $id ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a href="index.php?btn_new" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>

<?php if(isset($_COOKIE["customer_name"])){?>
                   <script>
                function a(){
                    return confirm('Bạn k thể xóa tối đa 7 sản phẩm ?'); 
                }
                a();
            </script>
            <?php  } ?>
