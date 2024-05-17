<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="敢闯" />
    <title><?php echo $conf['title'] ?></title>
    <meta name="keywords" content="<?php echo $conf['keywords'] ?>" />
    <meta name="description" content="<?php echo $conf['description'] ?>" />
    <link rel="icon" href="<?php echo $conf['logo'] ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo $templatepath; ?>/css/index.css" />
    <link rel="stylesheet" href="<?php echo $cdnpublic ?>/assets/css/fontawesome-free5.13.0.css">
    <meta name="lsvn" content="<?php echo base64_encode($conf['version']) ?>">
<link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('<?php echo background();?>'),linear-gradient(59deg, #EE7752, #e73c7e, #23A6D5, #23D5AB)">
<header>
  <li class="title">敢闯</li>
  <li class="h-link">
    <?php echo(theme_config(youshang)) ?>
  </li>
</header>
<div class="container">
  <div class="container-l">
    <div class="l-card" id="tq">
    <iframe allowtransparency="true" frameborder="0" width="360" height="160" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=2&t=0&v=0&d=2&bd=0&k=&f=ffffff&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=54511&w=360&h=96&align=center"></iframe>
    </div>
    <div style="width: 100%; display: flex;flex-wrap: wrap;justify-content: center;">
      <div class="s-card">
        <div id="time"></div>
        <div id="month"></div>
      </div>
      <div class="s-card" id="photo">
        <img src="<?php echo theme_config(bg1) ?>" />
    </div>
    </div>
    <div class="l-card" style="height: 480px;"l><div id="lytoday"></div><script src="https://lytoday.lylme.com/?day=none&hot=weibo"></script></div>
     <div class="l-card" id="xx1">
      <p style="margin: 20px">网站信息</p>
      <li>站点：<?php echo $conf['title'] ?></li>
      <li>主题：<a href="https://github.com/lzzzy6/glass">Glass</a>  By  <a href="https://www.gc24.cn">敢闯</a></li>
      <?php if(!empty(theme_config(gonganbei)));
        echo '<li>ICP备案号：<a href="#">'.theme_config(gonganbei).'</a></li>'
      
      ?>
      
    </div>
   </div>
  </div>
    <div class="container-r">
      <div class="r-top">
        <div class="search">
          <form target="_blank" method="GET" action="https://www.baidu.com/s?">
            <input type="text" class="searchTerm" id="sousuo" placeholder="百度两下，都不知道" name="word">
            <button type="submit" class="searchButton">Go</button>
          </form>
     </div>
      </div>
    <div class="r-buttom">
      <?php
    $html= array(
        'g1' => '<div class="card">', //分组开始标签
        'g2' => '<p>{group_name}</p>',  //分组内容
        'g3' => '</div>',  //分组结束标签

        'l1' => '<a rel="nofollow" href="{link_url}" target="_blank">',  //链接开始标签
        'l2' => '{link_icon}<li>{link_name}</li>',  //链接内容
        'l3' => '</a>',  //链接结束标签
    );
    lists($html); //调用
    ?>
     </div>
 
     <div class="l-card" id="xx2">
      <p style="margin: 20px">网站信息</p>
      <li>站点：<?php echo $conf['title'] ?></li>
      <li>主题：<a href="https://github.com/lzzzy6/glass">Glass</a>  By  <a href="https://www.gc24.cn">敢闯</a></li>
      <?php if(!empty(theme_config(gonganbei)));
        echo '<li>ICP备案号：<a href="#">'.theme_config(gonganbei).'</a></li>'
      
      ?>
 
    </div>
    </div>
</div> 
<!--一言弹窗-->
<?php
$yiyana = '<div class="l-card" id="yiyan">';
$yiyanb = '</div>';
 if(theme_config(tishi) == 1)
{ echo $yiyana;echo yan();echo $yiyanb;
}
    elseif (!empty(theme_config(tishi))) {
        echo $yiyana;echo theme_config(tishi);
echo $yiyanb;    };

?>
  <script src="<?php echo $templatepath?>/js/js.js"></script>
 <script src="<?php echo $templatepath?>/js/time.js"></script>
    <script src="<?php echo $cdnpublic ?>/assets/js/svg.js"></script>
 <?php echo $conf['wztj']?>
</body>

</html>