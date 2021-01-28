<?php
    require_once('data.php');
    require_once('header.php'); 
?>

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Bill Pembayaran</h1>
        </div>
    </div>
    <div class="row">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $totalItemsPrice = 0;
                $tax = 0;
                foreach ($menus as $menu) : ?>
                    <?php 
                        $orderCount = $_POST[$menu->getName()];
                        $itemsPrice = $menu->getPrice() * $orderCount;                    
                        $totalItemsPrice += $itemsPrice;
                        if($orderCount !== "0") : ?>
                            <tr>
                                <td> <?= $menu->getName(); ?> </td>
                                <td> <?= $orderCount ?></td>
                                <td> Rp<?= $itemsPrice ?></td>
                            </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <tr>
                    <td></td>
                    <td>Total Harga Item</td>
                    <td>Rp<?= $totalItemsPrice ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pajak (10%)</td>
                    <td>
                    <?php
                        $tax = $totalItemsPrice * 0.1;
                        echo "Rp$tax";
                    ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><strong>Total Pembayaran</strong></td>
                    <td><strong>Rp<?= $totalItemsPrice + $tax ?></strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
    require_once('footer.php'); 
?>