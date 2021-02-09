<?php $this->layout('layout', ['title' => 'Login']); ?>

<?php $this->start('main_content'); ?>
<?php   if ($w_user): ?>
<a href='/logout'>Logout</a>
<?php else: ?>
<p>Veuillez vous connecter</p>
<?php endif; ?>

    <form  method="POST" class="form-example">
    <div class="form-example">
        <label for="name">Enter your username: </label>
        <input type="text" name="username" id="username" required>
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