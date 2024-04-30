<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="Cache-Control" content="no-transform">
	<meta name="applicable-device" content="pc,mobile">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="author" content="敢闯" />
	<title><?php echo $conf['title'] ?></title>
	<meta name="keywords" content="<?php echo $conf['keywords'] ?>" />
	<meta name="description" content="<?php echo $conf['description'] ?>" />
	<link rel="icon" href="<?php echo $conf['logo'] ?>" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $templatepath; ?>/css/style.css" />
	<link rel="stylesheet" href="<?php echo $cdnpublic ?>/assets/css/fontawesome-free5.13.0.css">
	<meta name="lsvn" content="<?php echo base64_encode($conf['version']) ?>">
</head>
<body>
    <header style="background-image: url('<?php echo background() ?>')">
        <div class="logo">
            <img src="<?php echo $conf['logo'] ?>" >
            </div>
      <div class="title">
      <?php echo $conf['title'];?>
      </div>
      <div class="yan time"></div>
    <?php
//调用随机一言
if ($conf['yan'] == 'true') {
    echo '<div class="yan"><p>' . yan().'</p></div>'; 
}
?>
  <?php if ($conf['tq'] == 'true'){
      echo 
 ' <div class="yan">
<iframe allowtransparency="true" frameborder="0" width="290" height="98" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=0&v=0&d=2&bd=0&k=000000&f=ffffff&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=54511&w=290&h=96&align=center"></iframe>
  </div>';}
  ?>
      <?php if (count($conf['home-title']) == '1'){
      echo '<div class="yan"><div class="me">'.$conf['home-title'].'</div></div>' ;
      } ?>
  <div class="arrow">
      <svg t="1714058148009" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4256" width="24" height="24"><path d="M159.417291 157.449985l352.753089 343.768461 357.257683-345.263511 41.97602 1.49505-399.233704 422.216137-399.221424-422.216137L159.417291 157.449985zM159.417291 438.754812l352.753089 343.769484L869.428064 437.763229l41.97602 0.991584-399.233704 422.717557-399.221424-422.717557L159.417291 438.754812z" p-id="4257" fill="#dbdbdb"></path></svg>
  </div>
  </header>
<div class="container">
   
  <?php
  
    $html= array(
        'g1' => '<div class="card">', //分组开始标签
        'g2' => '<div class="card-title">{group_name}</div>',  //分组内容
        'g3' => '</div>',  //分组结束标签

        'l1' => '<div class="card-list">',  //链接开始标签
        'l2' => '<li>{link_icon}</li><a rel="nofollow" href="{link_url}" target="_blank">&nbsp{link_name}</a>',  //链接内容
        'l3' => '</div>',  //链接结束标签
    );
    lists($html); //调用
    ?>
  <div class="footer">
    <!--版权-->
    <?php echo $conf['copyright'] ?>
    <p>Theme&nbspBy&nbsp<a href="https://www.gc25.cn" target="_blank">敢闯</a></p>
    <!--备案信息-->
    <?php if (!empty($conf['icp'])) {
                echo '<p><img src="./assets/img/icp.png" width="16px" height="16px" /><a href="http://beian.miit.gov.cn/"  class="icp nav-link" target="_blank" _mstmutation="1" _istranslated="1">' . $conf['icp'] . '</a></p>'; }?>
   <?php echo $conf['wztj'] ?>
  </div>
</div>
<script src="<?php echo $templatepath; ?>/js/script.js"></script>
<script src="<?php echo $cdnpublic ?>/assets/js/svg.js"></script>
</body>
</html>