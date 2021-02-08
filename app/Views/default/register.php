<?php $this->layout('layout', ['title' => 'Register']); ?>

<?php $this->start('main_content'); ?>
    <form  method="POST" class="form-example">
    <div class="form-example">
        <label for="name">Enter your username: </label>
        <input type="text" name="username" id="username" required>
    </div>
    <div class="form-example">
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="form-example">
        <label for="password">Enter your password: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <div class="form-example">
        <input type="submit" value="Subscribe!">
    </div>
    </form>
<?php $this->stop(); ?>


