<!doctype html>
<html>
<head>
  <title>Tool Up Avatar Clone Facebook</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <script>
    function DuySexilee(){
      if($('#token').val() == ''){
        alert('Không nhập token thì up cmm ah ??');
      }else{
        $('#result').html('Đang xử lí....');
        $('#submit').addClass('btn btn-info').html('Đang Up Avatar...').attr('disabled','disabled');
        $.post('progress.php',{token:$('#token').val()},function(result){$('#result').html(result);$('#submit').removeClass('btn btn-info').addClass('btn btn-primary').html('Auto Up Avatar').removeAttr('disabled'); $('#token').val('');});
      }
    }
  </script>
  <div class="col-md-12" id="form">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Tool Auto Up Avatar Profile, Fanpage</h3>
      </div>
        <div class="box-body">   
           <div class="form-group">
            <label for="nd">Nhập List Token, Mỗi Token 1 dòng</label>
            <textarea class="form-control" rows="15" name="token" id="token" placeholder="Nhập List Token" required></textarea>
          </div>
          <span class="h4" id="result"></span>
        </div>
        <div class="box-footer">
          <button type="button" class="btn btn-primary" id="submit" onclick="DuySexilee()">Auto Up Avatar</button>
        </div>
    </div>
  </div>
</body>
</html>
