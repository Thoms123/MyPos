<section class="content-header">
    <h1>
        Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">

            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> </i> Back
                </a>
            </div>
            <h3>Add Users</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="" method="post">
                        <div class="form-group <?= form_error('fullname')  ? 'has-error' : null ?>">
                            <label>Name *</label>
                            <input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control">
                            <?= form_error('fullname') ?>
                        </div>
                        <div class="form-group <?= form_error('username')  ? 'has-error' : null ?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password')  ? 'has-error' : null ?>">
                            <label>Password *</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passconf')  ? 'has-error' : null ?>">
                            <label>Confirm Password *</label>
                            <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class="form-control">
                            <?= form_error('passconf') ?>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea name="address" class="form-control"><?= set_value('address') ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group <?= form_error('level')  ? 'has-error' : null ?>">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <option value=""><i>--Pilih--</i></option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>