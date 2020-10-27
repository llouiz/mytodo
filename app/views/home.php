<?php if($this->session->flashdata('registered')) : ?>
    <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('login_success')) : ?>
    <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('logged_out')) : ?>
    <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('logged_out'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('noaccess')) : ?>
    <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('noaccess'); ?></p>
<?php endif; ?>

<h1>Welcome to myTodo!</h1>
<p>myTodo us a simple and helpful application to help you manage your day to day tasks. You can add as many task lists as you want and as many tasks as you want. myTodo is absolutely free! Have fun.</p>