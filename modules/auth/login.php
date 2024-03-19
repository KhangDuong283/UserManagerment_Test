<?php
if (!defined('_CODE')) {
    die ('Access denied...');
}
require_once _WEB_PATH_TEMPLATES .'/layout/header.php';
?>

<div class="row">
    <div class="col-4" style="margin: 50px auto">
        <form action="" method="post">
            <div class="form-group mg-form">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group mg-form">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>

            <button type="submit" class="btn btn-primary btn-block mg-form">Đăng nhập</button> 
        </form>
    </div>
</div>

<?php
require_once _WEB_PATH_TEMPLATES . '/layout/footer.php';
?>