<?php
    require_once('data.php');
    require_once('header.php'); 
?>

<div class="container pt-5">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            <h1 class="logo">Nando Resto</h1>
        </div>
        <div class="row mt-5">
            <form class="form-inline" method="POST" action="confirm.php">
                <div class="menu-items d-flex">
                <?php foreach ($menus as $menu): ?>
                    <div class="menu-item">
                        <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                        <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                        <p class="price">Rp<?php echo $menu->getPrice() ?></p>
                        <div class="form-group">
                            <input type="number" name="<?php echo $menu->getName() ?>" id="qty" class="form-control" value="0">
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <button class="btn btn-primary mt-5" type="submit" name="submit">Pembayaran</button>
            </form>
        </div>
    </div>
</div>
    
<?php
    require_once('footer.php'); 
?>