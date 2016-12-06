<?php
include 'header.php';
?>
<body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Chicago Reallife</b> CP      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Melde dich mit deinen Ingame Daten an</p>
		        <form action="index.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Account" name="acc">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src='plugins/jQuery/jQuery-2.1.4.min.js'></script>
<script src='bootstrap/js/bootstrap.min.js'></script>
<script src='plugins/slimScroll/jquery.slimscroll.min.js'></script>
<script src='plugins/fastclick/fastclick.min.js'></script>
<script src='dist/js/app.min.js'></script>
<script src='dist/js/demo.js'></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
