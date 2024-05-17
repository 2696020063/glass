<?php

/**
 * 主题自定义配置表单
 * @param array $theme_config 表单配置
 * 参数说明：
 * type：配置项表单类型，目前支持：[text：单行文本,textarea:多行文本,select：下拉菜单，checkbox:多选框,radio:单选，color:颜色]，建议使用radio(单选)替代switch(开关)
 * name：表单参数的键，在主题调用时传入，需唯一
 * title：配置项标题文字
 * description：配置项提示文字
 * value：默认值
 * enum：枚举值，下拉菜单和多选框，数组类型。需包含键值对,键为参数值，值为显示的文本
 * verify：表单验证方式，支持类型：[required：必填，url：网站，number：数字，email：邮箱等]
 */

$theme_config =  [
  [
    'type' => 'textarea',
    'name' => 'tishi',
    'title' => '右上角提示框',
    'description' => '右上角的弹框，填<code>1</code>输出随机一言，<code>支持HTML代码</code>',
    "value" => '',
  ],
  [
    'type' => 'text',
    'name' => 'bg1',
    'title' => '一张图',
    'description' => '输入图片链接',
    "value" => 'https://bing.ee123.net/img/',
    ],

    [
    'type' => 'text',
    'name' => 'gonganbei',
    'title' => '公安网备案号',
    'description' => '公安网备案号，留空不显示',
    'value' => '',
    'placeholder' => "京公安网备xxxxxxxxxx号"
  ],
  [
    'type' => 'textarea',
    'name' => 'youshang',
    'title' => '右上角链接',
    'description' => '输入链接html代码<a href="https://www.gc24.cn/295.html"><i class="fa fa-user"></i>填写教程</a>',
    "value" => '',
    ],


];