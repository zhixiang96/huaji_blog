<?php
session_start();
if(!isset($_SESSION['status']))
    header("location: login.php");
else{
    if(!$_SESSION['status'])
        header("location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <link rel="icon" href="img/huaji_s.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/huaji_s.png" type="image/x-icon"/>
    <title>创建新文章</title>
    <link href="css/index_footer.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">
    <link href="css/general.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="editor/dist/css/wangEditor.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>

</head>
<body id=new_article_body>
<div class="header">
    <a id="header_new_logo" class="header_logo">huaji.io<span class="header_logo_sub">batterfly</span></a>
    <form class="file_upload" enctype="multipart/form-data">
        <input type="file" name="first" id="file" />
    </form>
    <a id="header_new_publish" class="hj_button" ondblclick="publish()">发布</a>
</div>
<div class="header2">
    <div class="header2_title">无标题文章</div><div class="header2_subtitle" style="font-family:'PingFang SC','Microsoft yahei';font-size: 16px;margin-top: -1px"></div>
</div>
<div id="category_new">
    <div class="hjs_con">
        <div onmouseover="over_hjs2(this)" onmouseout="leave_hjs2(this)" onclick="click_hjs(this)" class="hjs_result">心情</div>
        <br>
        <div class="hjs_list" id="category_list">
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">心情</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">人月神话</p><br>
            <p onmouseover="over_hjs(this)" onmouseout="leave_hjs(this)" onclick="choose_hjs(this)">观点</p>
        </div>
    </div>

</div>
<div id="new_article_words">

    <input id="new_article_title" class="hjt" type="text" title="article_title"/><br>
    https://cn.huaji.io/page.php?name =
    <input id="new_article_name" type="text" title="article_name"/>

</div>

<div id="new_article_box">
    <div id="new_article_content">
        <p>

        </p>
    </div>
</div>
<div id="footer">
    <div class="footer_tips">
        <p>* cn.huaji.io是huaji.io的SSL安全副本，且huaji.io仍处于测试阶段</p>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Authority</p>
        <ul class="footer_block_list">
            <li>Developer mode</li>
            <li>Download pages</li>
            <li>Opensource</li>
            <li>Backup</li>
        </ul>
    </div>
    <div class="footer_block">
        <p class="footer_block_title">Contact me</p>
        <ul class="footer_block_list">
            <li>E-mail</li>
            <li>Build-in Messager</li>
            <li>Tencent QQ</li>
            <li>WeChat</li>
        </ul>
    </div>
    <div id="footer_end" style="text-align: center">
        <div style="position: absolute;left: 0">Copyright © 2017 huaji.io All rights reserved.</div>
        <div style="position: absolute;left: 45%">鲁ICP备16011857号</div>
        <div style="position: absolute;right: 0">powered by huaji blog</div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/new.js"></script>
<script type="text/javascript" src="editor/dist/js/wangEditor.js"></script>
<script type="text/javascript">
    var editor = new wangEditor('new_article_content');
    wangEditor.config.printLog = false;
    editor.create();
</script>


</html>