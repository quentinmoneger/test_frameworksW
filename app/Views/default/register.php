<?php $this->layout('layout', ['title' => 'Register']); ?>

<?php $this->start('main_content'); ?>

    <?php if(!empty($w_flash_message) && isset($flash_custom) == false): ?>

        <?php foreach($w_flash_message as $flash_msg):?>

        <div class="alert alert-<?=$flash_msg['level'];?> alert-dismissible alert-custom" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
            <?=$flash_msg['message'];?>
        </div>

        <?php endforeach;?>
    <?php endif;?>

    <form  method="POST" class="form-example" novalidate>
    <div class="form-example">
        <label for="name">Entrer votre pseudo: </label>
        <input type="text" name="username" id="username" required>
        <small>Entrer que des lettres !!</small>
    </div>
    <div class="form-example">
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required>
        <small>Entrer un email !</small>
    </div>
    <div class="form-example">
        <label for="password">Enter your password: </label>
        <input type="password" name="password" id="password" required>
        <small>Mini -> 3 Max -> 10</small>
    </div>
    <div class="form-example">
        <input class="btn btn-dark" type="submit" value="Subscribe!">
    </div>
    </form>
<?php $this->stop(); ?>


