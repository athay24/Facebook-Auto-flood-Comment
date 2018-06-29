
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>† Auto Flood Facebook †</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="col-md-4" style="margin: 100px auto;">
      <div class="container">
        <form class="form-control" action="autocomment.php" method="post" style="margin: 50px;">
          <div class="form-group">
          <label for="token"><h3>Token</h3></label>
          <input class="form-control" type="text" name="token" id="token" placeholder="โปรดใส่ Token">
          </div>
          <div class="form-group">
            <label for="idforcomment"><h3>ID For Comment</h3></label>
            <input class="form-control" type="text" name="idforcomment" id="idforcomment" placeholder="โปรดใส่เลข ID ที่ต้องการจะปั่น Comment">
          </div>
          <div class="form-group">
            <label for="msg"><h3>ข้อความ</h3></label>
            <input class="form-control" type="text" name="msg" id="msg" placeholder="โปรดข้อความที่ต้องการจะปั่น Comment">
          </div>
          <div class="form-group">
            <label for="numberloop"><h3>จำนวน Comment ที่ต้องการจะปั่น</h3></label>
            <input class="form-control col-md-2 text-center" type="text" name="numberloop" id="numberloop" value="1">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit">เริ่มปั่น Comment</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
