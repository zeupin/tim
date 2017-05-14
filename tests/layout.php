<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test Layout</title>
  <link rel="stylesheet" href="../dist/css/tim.base.css">
  <style>
    h2 {
      margin: 1em 0;
      text-align: center;
      background-color: gray;
    }

    h3 {
      margin: 1em 0;
      text-align: center;
    }

    .row {
      margin-top: 0.5em;
      margin-bottom: 0.5em;
    }

    .box {
      white-space: nowrap;
      line-height: 2em;
      width: 100%;
      background-color: #eeeeee;
    }
  </style>
</head>

<body>
<h2>网格系统</h2>
<?php
  $columns_list = [2,3,4,5,6,7,8,9,10,12,20];

  foreach ($columns_list as $columns) {

    echo <<<EOL
      <h3>{$columns}列网格</h3>
EOL;

    echo <<<EOL
      <div class="container gutter">
EOL;
    for ($i = 1; $i < $columns; $i++) {
      $rest = $columns - $i;
      echo <<<EOL
        <div class="row">
          <div class="col grid-{$columns}-{$i}">
            <div class="box">grid-{$columns}-{$i}</div>
          </div>
          <div class="col grid-{$columns}-{$rest}">
            <div class="box">grid-{$columns}-{$rest}</div>
          </div>
        </div>
EOL;
    }
    echo <<<EOL
        <div class="row">
          <div class="col">
            <div class="box">grid</div>
          </div>
        </div>
EOL;

    echo <<<EOL
      </div>
EOL;
  }

?>

<h2>Gutter</h2>
<?php
  $gutter_list = ['', 'gutter', 'gutter-x', 'gutter-xx'];
  foreach ($gutter_list as $gutter) {
    $gutter_text = ($gutter) ? $gutter : '无gutter';
    echo <<<EOL
      <h3>{$gutter_text}</h3>
      <div class="container {$gutter}">
        <div class="row">
          <div class="col grid-4-1">
            <div class="box">grid-4-1</div>
          </div>
          <div class="col grid-4-1">
            <div class="box">grid-4-1</div>
          </div>
          <div class="col grid-4-1">
            <div class="box">grid-4-1</div>
          </div>
          <div class="col grid-4-1">
            <div class="box">grid-4-1</div>
          </div>
        </div>
      </div>
EOL;
  }

?>

  <h2>响应式</h2>
  <div class="container gutter">
    <div class="row">
      <div class="col  grid-4-1--md grid-2-1--lg">
        <div class="box">grid-4-1--md <br> grid-2-1--lg</div>
      </div>
      <div class="col  grid-4-3--md grid-2-1--lg">
        <div class="box">grid-4-3--md <br> grid-2-1--lg</div>
      </div>
    </div>
  </div>

  <h2>Push 和 Pull</h2>

  <div class="container gutter">
    <div class="row">
      <div class="col grid-6-1">
        <div class="box">A <br> grid-6-1 </div>
      </div>
      <div class="col grid-6-1 push-6-1">
        <div class="box">B <br> grid-6-1 <br> push-6-1</div>
      </div>
    </div>
    <div class="row">
      <div class="col grid-6-1">
        <div class="box">A <br> grid-6-1</div>
      </div>
      <div class="col grid-6-1 push-6-2">
        <div class="box">B <br> grid-6-1 <br> push-6-2</div>
      </div>
    </div>
    <div class="row">
      <div class="col grid-6-1">
        <div class="box">A <br> grid-6-1 </div>
      </div>
      <div class="col grid-6-1 push-6-1">
        <div class="box">B <br> grid-6-1 <br> pull-6-1</div>
      </div>
      <div class="col grid-6-1 pull-6-1">
        <div class="box">C <br> grid-6-1 <br> push-6-1</div>
      </div>
    </div>
  </div>

  <h2>Offset</h2>

  <div class="container">
    <div class="row">
      <div class="col grid-6-1">
        <div class="box">A <br> grid-6-1</div>
      </div>
      <div class="col grid-6-1 offset-6-1">
        <div class="box">B <br> grid-6-1 <br> offset-6-1</div>
      </div>
      <div class="col grid-6-1 offset-6-1">
        <div class="box">C <br> grid-6-1 <br> offset-6-1</div>
      </div>
    </div>
  </div>
</body>

</html>