<!DOCTYPE html>
<html>
  <head>
    <meta charet="utf-8">
      <title>
        株式会社ウェヴァード様 2次課題
      </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
    <body>
      <div class="header">
        <div class="header">
          株式会社ウェヴァード様 2次課題
        </div>
      </div>

        <div class="main">
          <div class="contact-form">
            <form method="POST" action="sent.php" accept-charset="UTF-8">
              <div class="input-form">
                <label class="form-label">
                  名前
                </label><br>
                  <input type="text" id="name" name="name"><br>
              </div>

                  <div class="input-form">
                    <label class="form-label">
                      年齢
                    </label><br>
                    <input type="text" id= "age" name="age"><br>
                  </div>

                    <div class="input-form">
                      <label class="form-label">
                        学部
                      </label><br>
                        <label class="form-label">
                          法学部
                        </label>
                          <input type="radio" name="faculty" value="1"
                            <?php if (isset($_POST['faculty']) && $_POST['faculty'] == "1")
                              echo 'checked';
                             ?>
                          >

                            <label class="form-label">
                              経済学部
                            </label>
                              <input type="radio" name="faculty" value="2"
                                <?php if (isset($_POST['faculty'])&& $_POST['faculty']== "2")
                                  echo 'checked';
                                 ?>
                              ><br>

                    </div>
                            <div class="input-form">
                              <label class="form-label">
                                趣味
                              </label><br>
                                <label class="form-label">
                                  野球
                                </label>
                                <input type="checkbox" name="baseball" value="1"
                                  <?php if (isset($_POST['baseball'])) 
                                    echo 'checked'
                                   ?>
                                >

                                <label class="form-label">
                                  サッカー
                                </label>
                                  <input type="checkbox" name="soccer"value="2"
                                    <?php if (isset($_POST['soccer']))
                                      echo 'checked'
                                     ?>
                                  ><br>
                            </div>
                              <button type="submit" style="background:blue;color:white;">
                                登録
                              </button>
            </form>
          </div>
        </div>
    </body>
</html>