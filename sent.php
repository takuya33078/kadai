<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
          <?php
            if (!empty($_POST['name']) && ((is_numeric ($_POST['age']))&&(!empty($_POST['age']))) && (!empty($_POST['faculty'])) && ((!empty($_POST['baseball'])) || (!empty($_POST['soccer'])))){
              echo '入力に成功しました。';
            }
           ?>
             <div class="contact-form">
               <form method="POST" action="sent.php" accept-charset="UTF-8">
                 <div class="input-form">
                   <label class="form-label">
                     名前
                   </label><br>
                     <input type="text" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];} ?>"><br>
                       <?php
                         if(empty($_POST['name'])){
                           echo '<font color="red">名前を入力してください。</font>';
                         }
                        ?>
                 </div>

                  <div class="input-form">
                    <label class="form-label">
                      年齢
                    </label><br>
                      <input type="text" name= "age" value="<?php if(!empty($_POST['age']))
                       {echo $_POST['age'];} ?>"><br>
                         <?php
                           if((isset($_POST['age']))&&(!is_numeric ($_POST['age']))&& (!empty($_POST['age']))) {
                             print '<font color="red">年齢は半角数値で入力してください。</font>';
                               } elseif(empty($_POST['age'])){
                                 echo '<font color="red">年齢を入力してください。</font>';
                               }
                          ?>
                  </div>

                    <div class="input-form">
                        <label class="form-label">
                          学部
                        </label><br>
                          <label class="form-label">
                            法学部
                          </label>
                            <input type="radio" name="faculty" value="1"
                              <?php
                                if (isset($_POST['faculty']) && ($_POST['faculty'] == "1"))
                                  echo 'checked';
                               ?>
                            >

                              <label class="form-label">
                                経済学部
                              </label>
                                <input type="radio" name="faculty" value="2"
                                  <?php
                                    if (isset($_POST['faculty'])&&($_POST['faculty']=="2")){
                                      echo'checked';
                                    }
                                   ?>
                                ><br>
                                  <?php
                                    if(empty($_POST['faculty'])){
                                      echo '<font color="red">学部を選択してください。</font>';
                                    }
                                   ?>
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
                                    <?php
                                      if(empty($_POST['baseball'])&&(empty($_POST['soccer']))){
                                        echo '<font color="red">趣味を選択してください。</font>';
                                      }
                                     ?>
                            </div>
                              <button type="submit" style="background:blue;color:white;"
                                <?php
                                  if (!empty($_POST['name']) && ((is_numeric ($_POST['age']))&&(!empty($_POST['age']))) && (!empty($_POST['faculty'])) && ((!empty($_POST['baseball'])) || (!empty($_POST['soccer'])))){
                                    echo header("Location:flash.php");
                                  }
                                 ?>
                              >
                                登録
                              </button>
            </form>
          </div>
        </div>
    </body>
</html>
