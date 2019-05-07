@extends('common.base')

<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        a, a:visited {
            text-decoration:none;
        }

        .json_key{ color: #92278f;font-weight:bold;}.json_null{color: #f1592a;font-weight:bold;}.json_string{ color: #3ab54a;font-weight:bold;}.json_number{ color: #25aae2;font-weight:bold;}.json_boolean{ color: #f98280;font-weight:bold;}.json_link{ color: #61D2D6;font-weight:bold;}.json_array_brackets{}
    </style>
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/jquery.numberedtextarea.css">
</head>
<body>

<script>
    {{--var $res = {{ $ret }};--}}

</script>
<header>

</header>
    {{--//添加navbar-fixed-top可以让导航条一直固定在顶部，不会因为滚动条改变而改变，navbar-inverse让导航条黑底展示--}}
    <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
        <div class="container">
            {{--//container让导航条居中container-fluid让导航条自适应--}}
            <div class="navbar-header">
                {{--　　　　　　//粉色字体代表响应式布局：当浏览器宽度小于某个值时导航栏折叠变成三道杠--}}
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" type="button">
                    <span class="sr-only">看看这是什么</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                {{--//绿色代表导航栏左侧logo或者图标--}}
                <a class="navbar-brand" href="/testapi">TESTAPI</a>
            </div>
            {{--　　　　//棕色包裹项目是导航条内容，为了响应式布局，点击三道杠弹出导航栏--}}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                {{--　　　　　　　　//紫色代表导航栏中的项目--}}
                <ul class="nav navbar-nav">
                <li><a href="#">综述</a></li>
                <li>
                    {{--//蓝色为下拉菜单--}}
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">简述<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">谷歌浏览器</a></li>
                        <li><a href="#">IE浏览器</a></li>
                        <li><a href="#">360浏览器</a></li>
                        <li><a href="#">谷歌火狐浏览器</a></li>
                    </ul>
                </li>
                <li><a href="#">特点</a></li>
                <li><a href="#">关于</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
<form id="form">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <div class="control-group">

                        <select style="width: 100px" class="form-control" id="method_select">
                            <option value="get">GET</option>
                            <option value="post">POST</option>
                            {{--<option>3</option>--}}
                            {{--<option>4</option>--}}
                            {{--<option>5</option>--}}
                        </select>

                        <!-- Single button -->
                        {{--<div class="btn-group">--}}
                            {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--Action <span class="caret"></span>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    </div>

                </div><!-- /btn-group -->
                <input id="url" type="" placeholder="Enter request URL" class="form-control" name="url">

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <input id="button" class="btn btn-primary" type="button" value="Send"></input>
    </div><!-- /.row -->

    <table class="table table-hover table-bordered table-condensed">
        <tr>
            <td class="">Key</td>
            <td class="">Value</td>
        </tr>
        <tbody>
        <tr id="tr-id-1" class="tr-class-1" data-title="bootstrap table">
            <td id="td-id-1" class="td-class-1" data-title="bootstrap table">
                <input type="text" placeholder="New key" class="form-control" aria-label="" name="key_1">
            </td>
            <td data-value="526">
                <input type="text" placeholder="value" class="form-control" aria-label="" name="value_1">
            </td>
        </tr>
        <tr id="tr-id-2" class="tr-class-2">
            <td id="td-id-2" class="td-class-2" data-title="bootstrap table">
                <input type="text" placeholder="New key" class="form-control" aria-label="" name="key_2">
            </td>
            <td data-value="526">
                <input type="text" placeholder="value" class="form-control" aria-label="" name="value_2">
            </td>
        </tr>
        <tr id="tr-id-3" class="tr-class-3">
            <td id="td-id-3" class="td-class-3" data-title="bootstrap table">
                <input type="text" placeholder="New key" class="form-control" aria-label="" name="key_3">
            </td>
            <td data-value="52">
                <input type="text" placeholder="value" class="form-control" aria-label="" name="value_3">
            </td>
        </tr>
        <tr id="tr-id-2" class="tr-class-2">
            <td id="td-id-2" class="td-class-2" data-title="bootstrap table">
                <input type="text" placeholder="New key" class="form-control" aria-label="" name="key_4" >
            </td>
            <td data-value="526">
                <input type="text" placeholder="value" class="form-control" aria-label="" name="value_4">
            </td>
        </tr>
        <tr id="tr-id-2" class="tr-class-2">
            <td id="td-id-2" class="td-class-2" data-title="bootstrap table">
                <input type="text" placeholder="New key" class="form-control" aria-label="" name="key_5">
            </td>
            <td data-value="526">
                <input type="text" placeholder="value" class="form-control" aria-label="" name="value_5">
            </td>
        </tr>
        </tbody>
    </table>
</form>
<main class="row-fluid" style="height:85%;min-height:550px;">
    <div class="col-md-7" style="padding:0;position:relative;height:100%;">
        <div  class="tool" style="position:absolute;">
            <a href="#" class="tip zip" title="压缩"  data-placement="bottom"><i class="fa fa-database"></i></a>
            <a href="#" class="tip xml" title="转XML"  data-placement="bottom"><i class="fa fa-file-excel-o"></i></a>
            <a href="#" class="tip shown"  title="显示行号"  data-placement="bottom"><i class="glyphicon glyphicon-sort-by-order"></i></a>
            <a href="#" class="tip clear" title="清空"  data-placement="bottom"><i class="fa fa-trash"></i></a>
            <a href="#" class="tip save" title="保存"  data-placement="bottom"><i class="fa fa-download"></i></a>
            <a href="#" class="tip copy" title="复制" data-clipboard-target="#json-target"  data-placement="bottom"><i class="fa fa-copy"></i></a>
            <a href="#" class="tip compress" title="折叠"  data-placement="bottom"><i class="fa fa-compress"></i></a>
        </div>
        <div id="right-box"  style="width:100%;height: 87vh;min-height:520px;border:solid 1px #f6f6f6;border-radius:0;resize: none;overflow-y:scroll; outline:none;position:relative;font-size:12px;padding-top:40px;">
            <div id="line-num" style="background-color:#fafafa;padding:0px 8px;float:left;border-right:dashed 1px #E5EBEE;display:none;z-index:-1;color:#999;position:absolute;text-align:center;over-flow:hidden;">
                <div></div>
            </div>
            <div class="ro" id="json-target" style="padding:0px 25px;white-space: pre-line;word-wrap:break-word;">
                {{--{{$res}}--}}
            </div>
        </div>
        <form id="form-save" method="POST"><input type="hidden" value="" id="txt-content" name="content"></form>
    </div>
    <br style="clear:both;" />
</main>
</div>
<script src="/assets/js/jquery.js"></script>
<script type="text/javascript">
    //ajax提交表单

    $("#button").click(function () {

        var url = $("#url").val();
        console.log('url: ' + url);
        // URL不能为空
        if($.isEmptyObject(url)) {
            alert("请输入URL .");
            return false;
        }
        var params = $("#form").serialize();

        // 每次点击后清掉之前的数据
        $("#json-target").html('');
        $.ajax({
            type : $('#method_select').val(),
            dataType : 'json',
            url : '/index',
            data : params,
            success : function(data) {
                console.log(data);
                if (data.data == -1) {
                    alert("url 不能为空");
                    return false;
                }
                res = JSON.stringify(data);
                $("#json-target").append(res);
            },
            error : function(data) {
                $("#json-target").append(JSON.stringify(data));
            }
        });
    });


</script>
<script src="/assets/js/jquery.json.js"></script>

<script src="/assets/js/jquery.numberedtextarea.js"></script>
<script type="text/javascript">

    $('textarea').numberedtextarea();
    var current_json = '';
    var current_json_str = '';
    var xml_flag = false;
    var zip_flag = false;
    var shown_flag = false;
    var compress_flag = false;
    var res = $('#txt-content').val();
    //$('.tip').tooltip();
    function init(){
        xml_flag = false;
        zip_flag = false;
        shown_flag = false;
        compress_flag = false;
        renderLine();
        $('.xml').attr('style','color:#999;');
        $('.zip').attr('style','color:#999;');

    }
    $('#commit').click(function() {
        var data = {

        };
        $.ajax({
            url : '',
            type : 'post',
            dataType : 'JSON',
            data : data,
            success: function(data) {

            },
            error : function() {

            }
        });
    });

    $('#json-src').keyup(function(){
        init();
        var content = $.trim($(this).val());
        var result = '';
        if (content!='') {
            //如果是xml,那么转换为json
            if (content.substr(0,1) === '<' && content.substr(-1,1) === '>') {
                try{
                    var json_obj = $.xml2json(content);
                    content = JSON.stringify(json_obj);
                }catch(e){
                    result = '解析错误：<span style="color: #f1592a;font-weight:bold;">' + e.message + '</span>';
                    current_json_str = result;
                    $('#json-target').html(result);
                    return false;
                }

            }
            try{
                current_json = jsonlint.parse(content);
                current_json_str = JSON.stringify(current_json);
                //current_json = JSON.parse(content);
                result = new JSONFormat(content,4).toString();
            }catch(e){
                result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
                current_json_str = result;
            }

            $('#json-target').html(result);
        }else{
            $('#json-target').html('');
        }

    });
    $('.xml').click(function(){
        if (xml_flag) {
            $('#json-src').keyup();
        }else{
            var result = $.json2xml(current_json);
            $('#json-target').html('<textarea style="width:100%;position:absolute;height: 80vh;min-height:480px;border:0;resize:none;">'+result+'</textarea>');
            xml_flag = true;
            $(this).attr('style','color:#15b374;');
        }

    });
    $('.shown').click(function(){
        if (!shown_flag) {
            renderLine();
            $('#line-num').show();
            $('.numberedtextarea-line-numbers').show();
            shown_flag = true;
            $(this).attr('style','color:#15b374;');
        }else{
            $('#line-num').hide();
            $('.numberedtextarea-line-numbers').hide();
            shown_flag = false;
            $(this).attr('style','color:#999;');
        }
    });
    function renderLine(){
        var line_num = $('#json-target').height()/20;
        $('#line-num').html("");
        var line_num_html = "";
        for (var i = 1; i < line_num+1; i++) {
            line_num_html += "<div>"+i+"<div>";
        }
        $('#line-num').html(line_num_html);
    }
    $('.zip').click(function(){
        if (zip_flag) {
            $('#json-src').keyup();
        }else{
            $('#json-target').html(current_json_str);
            zip_flag = true;
            $(this).attr('style','color:#15b374;');
        }

    });
    $('.compress').click(function(){
        if(!compress_flag){
            $(this).attr('style','color:#15b374;');
            //$(this).attr('title','取消折叠').tooltip('fixTitle').tooltip('show');
            $($(".fa-minus-square-o").toArray().reverse()).click();
            compress_flag = true;
        }else{
            while($(".fa-plus-square-o").length>0){
                $(".fa-plus-square-o").click();
            }
            compress_flag = false;
            $(this).attr('style','color:#555;');
            $(this).attr('title','折叠').tooltip('fixTitle').tooltip('show');
        }
    });
    $('.clear').click(function(){
        $('#json-src').val('');
        $('#json-target').html('');
    });
    (function($){
        $.fn.innerText = function(msg) {
            if (msg) {
                if (document.body.innerText) {
                    for (var i in this) {
                        this[i].innerText = msg;
                    }
                } else {
                    for (var i in this) {
                        this[i].innerHTML.replace(/&amp;lt;br&amp;gt;/gi,"n").replace(/(&amp;lt;([^&amp;gt;]+)&amp;gt;)/gi, "");
                    }
                }
                return this;
            } else {
                if (document.body.innerText) {
                    return this[0].innerText;
                } else {
                    return this[0].innerHTML.replace(/&amp;lt;br&amp;gt;/gi,"n").replace(/(&amp;lt;([^&amp;gt;]+)&amp;gt;)/gi, "");
                }
            }
        };
    })(jQuery);
    $('.save').click(function(){
        // var content = JSON.stringify(current_json);
        // $('#txt-content').val(content);
        //var text = "hell world";
        var html = $('#json-target').html().replace(/\n/g,'<br/>').replace(/\n/g,'<br>');
        var text = $('#json-target').innerText().replace('　　', '    ');
        var blob = new Blob([text], {type: "application/json;charset=utf-8"});
        var timestamp=new Date().getTime();
        saveAs(blob, "format."+timestamp+".json");
    });
    $('.copy').click(function(){
        $.msg("成功复制到粘贴板","color:#00D69C;");
         $(this).tooltip('toggle')
               .attr('data-original-title', "复制成功！")
               .tooltip('fixTitle')
               .tooltip('toggle');
    });
    //svar clipboard = new Clipboard('.copy');
    $('#json-src').keyup();
</script>

</body>
</html>
