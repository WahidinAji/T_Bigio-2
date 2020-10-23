<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

  <title>Soal No 1</title>
</head>

<body>
  <header>
    <!-- Just an image -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-badge-cc" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.708 7.755c0-1.111.488-1.753 1.319-1.753.681 0 1.138.47 1.186 1.107H7.36V7c-.052-1.186-1.024-2-2.342-2C3.414 5 2.5 6.05 2.5 7.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114H6.213c-.048.615-.496 1.05-1.186 1.05-.84 0-1.319-.62-1.319-1.727v-.743zm6.14 0c0-1.111.488-1.753 1.318-1.753.682 0 1.139.47 1.187 1.107H13.5V7c-.053-1.186-1.024-2-2.342-2C9.554 5 8.64 6.05 8.64 7.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05-.839 0-1.318-.62-1.318-1.727v-.743z" />
            <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
          </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/palindrome">Soal no 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notasi_f5">Soal no 2 f(5)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notasi_f3">Soal no 2 F(3)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/poin_15">Soal no 3</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container" style="margin-top: 2%;">
      <form method="post">
        <input type="text" name="a" maxlength="1" /><br>
        <input type="text" name="b" maxlength="1" /><br>
        <input type="text" name="c" maxlength="1" /><br>
        <input type="text" name="d" maxlength="1" /><br>
        <input type="text" name="e" maxlength="1" /><br>
        <input type="text" name="f" maxlength="1" /><br>
        <input type="submit" name="submit" value="Submit" />
      </form>

      <?php
      if (isset($_POST['submit'])) {

        // put your code here
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];
        $f = $_POST['f'];
        $word = $a . $b . $c . $d . $e . $f;
        $arr = array($a, $b, $c, $d, $e, $f);
        $reverse = strrev($word);
        array_pop($arr);
        // var_dump($word2, $reverse);
        echo 'Hasil :       ';
        foreach ($arr as $array) {
          echo $array;
        }
        echo $reverse;
      }
      ?>
    </div>
  </main>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>