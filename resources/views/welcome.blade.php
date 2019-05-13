<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;   /*该元素将以块级元素展示*/
                font-weight: 100;
                font-family: "Helvetica Neue", NotoSansHans-Regular,AvenirNext-Regular,arial,Hiragino Sans GB,"Microsoft Yahei","Hiragino Sans GB","WenQuanYi Micro Hei",sans-serif;
                color:#777;
            }
            .container {
                text-align: center;
                display: table-cell; /* 此元素会以表格单元显示 */
                vertical-align: middle;
            }
            .content {
                display: inline-block; /* 此元素为行内块元素  */
                text-align: center;
            }
            .title {
                font-size: 66px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    "Hello Laravel! by Tiger"
                </div>
            </div>
        </div>
    </body>
</html>
