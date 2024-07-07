<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="<?php echo base_url(); ?>assets/bootswatch-5/dist/united/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/bootswatch-5/docs/_assets/img/logo.svg'); ?>" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('error')) : ?>
                            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                        <?php endif; ?>
                        <?php echo form_open('login/authenticate'); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukan Username" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="card-footer text-center">
                        <small>&copy; 2024 Your Company</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
