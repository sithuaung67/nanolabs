<!doctype html>
<html lang="en">
<head>
    <style>
        #back{
            background: #1e282c;
            height: 40px;
            width: 150px;
            color: white;
            border-radius: 30px;
            font-size: 15px;
            border: none;
            box-shadow: 0 7px #999;
            outline: none;
            cursor: pointer;
            text-align: center;
        }
        #back:hover {background-color: #312e25}

        #button {
            padding: 10px 25px;
            font-size: 13px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 20px;
            box-shadow: 0 7px #999;
        }

        #button:hover {background-color: #312e25}

        #button:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #changePass:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #buttonPrint {
                    padding: 10px 25px;
                    font-size: 15px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 20px;
                    box-shadow: 0 7px #999;
                }

        #buttonPrint:hover {background-color: #312e25}

        #buttonPrint:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #gobutton {
                    padding: 10px 20px;
                    font-size: 15px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #gobutton:hover {background-color: #312e25}

        #gobutton:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #print {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #print:hover {background-color: #312e25}

        #print:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #back_invoices_price {
            padding: 10px 20px;
            font-size: 15px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 30px;
            box-shadow: 0 7px #999;
        }
        #back_invoices_price:hover {background-color: #312e25}

        #back_invoices_price:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #back_invoices_price {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #CustomerQrcode:hover {background-color: #312e25}

        #CustomerQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #SaleQrcode {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #SaleQrcode:hover {background-color: #312e25}

        #SaleQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #RankButton {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #RankButton:hover {background-color: #312e25}

        #RankButton:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #SearchButton {
            padding: 9px 45px;
            font-size: 13px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px #999;
        }
        #SearchButton:hover {background-color: #312e25}

        #SearchButton:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #CustomerQrcode {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 4px #999;
                }
        #CustomerQrcode:hover {background-color: #312e25}

        #CustomerQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMT | @yield('title')</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <!-- Data table-->
    <link rel="stylesheet" href="{{asset('datatable/app.css')}}">

    <!-- Google Font -->


    @yield('style')

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        @include('admin.layouts.navBar')
        @include('admin.layouts.sideBar')
        @yield('content')
    </div>

    <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

     <script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>

      <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('datatable/app.js')}}"></script>

    <script src="{{asset('js/action.js')}}"></script>
    <script src="{{asset('jquery.tableTotal.js')}}"></script>


    <script>
        $(function () {
            $(".tem").fadeOut(5000);

           $("#dataTable").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTable1").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });

           $("#sum").dataTable({
               order:[[2,"desc"]],
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTableInvoice").dataTable({
               "bFilter" : true,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTableInvoicePrint").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#user_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#customer_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#sale_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
        });

    </script>
    <script type="text/javascript">
        function printData()
        {
            var divToPrint=document.getElementById("dataTable4");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#button').on('click',function(){
            printData();
        });
        function printData3()
        {
            var divToPrint=document.getElementById("QrcodeCustomer");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#CustomerQrcode').on('click',function(){
            printData3();
        });
        function printData2()
        {
            var divToPrint=document.getElementById("QrcodeSale");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#SaleQrcode').on('click',function(){
            printData2();
        });
        function printData6()
        {
            var divToPrint=document.getElementById("PrintHello");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#reportPrint').on('click',function(){
            printData6();
        });
        function printData1()
        {
            var divToPrint=document.getElementById("dataTableInvoicePrint");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#buttonPrint').on('click',function(){
            printData1();
        });
        function printRank()
        {
            var divToPrint=document.getElementById("RankTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#RankButton').on('click',function(){
            printRank();
        });
        function Qrcode()
        {
            var divToPrint=document.getElementById("RankTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#Qrcode').on('click',function(){
            printRank();
        });
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable1').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTable1').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable2').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTable2').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point_eight') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        //document.getElementById('dataTable').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
        document.getElementById('dataTable').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';

        document.getElementById('TotalPointEight').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTableInvoice').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal = 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point_eight') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTableInvoice').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td><td><b>' + sum2 + '<b></td><td><b>' + sum3 + '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        // document.getElementById('dataTableInvoice').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '</b></td> </tr> ';
        // document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        // document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        // document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
       // document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script>
        $('.form-group').on('input','.prc',function () {
            var totalSum=1;
            $('.form-group .prc').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum *=parseFloat(inputVal);
                }
            });
            $('#point').val(totalSum);
        });

        $('.form-group').on('input','.pc0',function () {
            var totalSum=0;
            $('.form-group .pc0').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum +=parseFloat(inputVal);
                }
            });
            $('#text4').val(totalSum);
        });

        $('.form-group').on('input','.pc1',function () {
            $kyat=0;
            $pal=0;
            $yae=0;
            $inputVal=0;
            $number=16.6;
            $('.form-group .pc1').each(function () {
                $inputVal=$(this).val();
                if($.isNumeric($inputVal)){
                    $kyat =parseInt($inputVal/$number);
                    $pal =parseFloat((($inputVal/$number)-$kyat)*16);
                    $pal1=parseInt($pal);
                    $yae=$pal-$pal1;
                    $yae1=$yae*8;
                    $form=parseFloat($yae1).toFixed(2);
                    // $pal2 =parseInt((((($inputVal%$number)/$number)*16)/$number)*8);
                }
            });
            $('#kyat').val($kyat);
            $('#pal').val($pal1);
            $('#yae').val($form);
        });

        $(document).ready(function () {
                $('.form-group').on('input', '.previous_remain_kyat', function () {
                    //var previous_remain_kyat=$kyat;
                    var previous_remain_kyat = $('#total_kyat').val();
                    $('.form-group .previous_remain_kyat').each(function () {
                        var inputVal = $(this).val();
                        if ($.isNumeric(inputVal)) {
                            $payment_kyat = parseInt(previous_remain_kyat) + parseInt(inputVal);
                        }
                    });
                    $('#buy_debit_kyat').val($payment_kyat);
                });
            $('.form-group').on('input','.previous_remain_pal',function () {
                var previous_remain_pal=$('#total_pal').val();
                $('.form-group .previous_remain_pal').each(function () {
                    var inputVal=$(this).val();
                    if($.isNumeric(inputVal)){
                        $payment_pal=parseInt(previous_remain_pal) +parseInt(inputVal);
                    }
                    if ($payment_pal < 16){
                        $('#buy_debit_pal').val($payment_pal);
                        $('#buy_debit_kyat').val($payment_kyat);
                    }
                    else if($payment_pal >= 16){
                        $pal_plus=$payment_pal/16;
                        $aa=$payment_pal%16;
                        $('#buy_debit_pal').val($aa);
                        $('#buy_debit_kyat').val($payment_kyat+$pal_plus);
                    }

                });

            });

            $('.form-group').on('input','.previous_remain_yae',function () {
                var previous_remain_yae=parseFloat($('#total_yae').val());
                $('.form-group .previous_remain_yae').each(function () {
                    var inputVal1 = $(this).val();
                    if ($.isNumeric(inputVal1)) {
                        $payment_y = previous_remain_yae + parseFloat(inputVal1);
                        $payment_yae = parseFloat($payment_y).toFixed(2);
                    }
                    if($payment_yae < 8 ){
                        $('#buy_debit_yae').val($payment_yae);
                        $('#buy_debit_pal').val($payment_pal);
                    }
                    else if($payment_yae >= 8){
                        $yae_plus=parseInt($payment_yae/8);
                        $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
                        $('#buy_debit_pal').val(parseInt($payment_pal+$yae_plus));
                    }
                    if ( ($('#buy_debit_pal').val()) >=16){
                        $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
                        $payment_pal+=$payment_yae/8;
                        $pal_plus=$payment_pal/16;
                        $palremain=parseInt($payment_pal%16);
                        $('#buy_debit_pal').val($palremain);
                        $('#buy_debit_kyat').val(parseInt($payment_kyat+$pal_plus));

                    }
                });
            });

        });
                    // if ( ($('#buy_debit_yae').val()) >=16){
                    //     $('#buy_debit_yae').val($payment_yae%8);
                    //     $payment_pal+=$payment_yae/8;
                    //     $pal_plus=$payment_pal/16;
                    //     $palremain=parseInt($payment_pal%16);
                    //     $('#buy_debit_pal').val($palremain);
                    //     $('#buy_debit_kyat').val($payment_kyat+$pal_plus);
                    //
                    // }



            // $('.form-group').on('input','.pc21',function () {
            //     var previous_remain_pal=$pal1;
            //     $('.form-group .pc21').each(function () {
            //         var inputVal=$(this).val();
            //         if($.isNumeric(inputVal)<16){
            //             $payment_pal=previous_remain_pal +=parseInt(inputVal);
            //             $('#bye_debit_pal').val($payment_pal);
            //         }
            //         if($payment_pal >= 16){
            //             $resultPal=0;
            //            // $PlusKyat=$payment_pal / 8;
            //             $resultPal=$payment_pal % 16;
            //            // $totalPalss = $payment_kyat;
            //             //$resultPal11=$totalPalss+$PlusPal;
            //
            //             $('#bye_debit_pal').val($resultPal);
            //             $('#bye_debit_kyat').val($payment_kyat+1);
            //
            //         }
            //     });
            //
            // });
            // $('.form-group').on('input','.pc21',function () {
            //     var previous_remain_pal=$pal1;
            //     $('.form-group .pc21').each(function () {
            //         var inputVal=$(this).val();
            //         if($.isNumeric(inputVal)){
            //             $payment_pal=previous_remain_pal +=parseInt(inputVal);
            //         }
            //         if($payment_pal<16){
            //             $palunder16=$('#buy_debit_pal').val($payment_pal);
            //             $kyatunder16=$('#buy_debit_kyat').val($payment_kyat);
            //
            //         }
            //          if($payment_pal >= 16){
            //             $resultPal=0;
            //             $PlusKyat=$payment_pal / 16;
            //             $resultPal=$payment_pal % 16;
            //             $totalkyat=parseInt($payment_kyat+$PlusKyat);
            //
            //
            //             $palovergrater=$('#buy_debit_pal').val($resultPal);
            //             $kyatovergrater=$('#buy_debit_kyat').val($totalkyat);
            //         }
            //         // if($payment_yae < 8){
            //         //     $('#buy_debit_yae').val($payment_yae);
            //         // }
            //         // else if($payment_yae >= 8){
            //         //     $resultYae=0;
            //         //     $PlusPal=$payment_yae / 8;
            //         //     $resultYae=$payment_yae % 8;
            //         //     $totalpal=parseInt($payment_pal+$PlusPal);
            //         //
            //         //     $('#buy_debit_yae').val($resultYae);
            //         //     $('#buy_debit_pal').val($totalpal);
            //         //
            //         // }
            //     });
            //
            // });


            // $('.form-group').on('input','.previous_remain_yae',function () {
            //     var previous_remain_yae=parseFloat($('#total_yae').val());
            //     $('.form-group .previous_remain_yae').each(function () {
            //         var inputVal1 = $(this).val();
            //         if ($.isNumeric(inputVal1)) {
            //             $payment_y=previous_remain_yae + parseFloat(inputVal1);
            //             $payment_yae = parseFloat($payment_y).toFixed(2);
            //
            //             $('#buy_debit_yae').val($payment_yae);
            //
            //
            //         }


            //         if($payment_yae < 8){
            //             $yaeunder8=$('#buy_debit_yae').val($payment_yae);
            //             $palunder8=$('#buy_debit_pal').val($payment_pal);
            //             $('#buy_debit_kyat').val($payment_kyat);
            //             if($payment_pal >=16){
            //                 $('#buy_debit_pal').val($payment_pal % 16);
            //                 $('#buy_debit_kyat').val($payment_kyat+1);
            //
            //             }
            //         }
            //         if($payment_yae >= 8){
            //             $resultYae=0;
            //             $PlusPal=$payment_yae / 8;
            //             $resultYae=parseFloat($payment_yae % 8).toFixed(2);
            //             $totalpal=parseInt($payment_pal+$PlusPal);
            //
            //             if($payment_pal>=16 && $payment_yae >=8){
            //
            //                 $yae167=$('#buy_debit_yae').val($resultYae);
            //                 $pal167=$('#buy_debit_pal').val($resultPal+1);
            //                 //$('#buy_debit_kyat').val($payment_kyat+1);
            //
            //             }
            //             if($payment_pal<16 && $payment_yae < 8){
            //                 $yae165=$('#buy_debit_yae').val($resultYae);
            //                 $pal165=$('#buy_debit_pal').val($totalpal);
            //
            //             }
            //             if($payment_pal<16 && $payment_yae >= 8){
            //                 $yae164=$('#buy_debit_yae').val($resultYae);
            //                 $pal164=$('#buy_debit_pal').val($totalpal);
            //                 if($totalpal === 16){
            //                     $kyatequal16=$('#buy_debit_kyat').val($payment_kyat+1);
            //                     $palequal16=$('#buy_debit_pal').val($totalpal % 16);
            //                 }
            //
            //             }
            //         }
            //

        $(document).ready(function () {
            $('.form-group').on('input','.pc23',function () {
                $totalSumkyat=$('#buy_debit_kyat').val();
                $('.form-group .pc23').each(function () {
                    var inputVal=$(this).val();
                    if($.isNumeric(inputVal)){
                        $totalSumkyat -=parseInt(inputVal);
                    }
                });
                $('#now_remain_kyat').val($totalSumkyat);
            });
             $('.form-group').on('input','.pc24',function () {
                $totalSumpal=$('#buy_debit_pal').val();
                $('.form-group .pc24').each(function () {
                    var inputVal=$(this).val();
                    if($.isNumeric(inputVal)){
                        if(inputVal < $totalSumpal) {
                            $totalSumpal -= parseInt(inputVal);
                            $('#now_remain_pal').val($totalSumpal);
                        }
                    }
                    if(inputVal === $totalSumpal){
                        $('#now_remain_pal').val(0);
                    }
                    // if (inputVal > $totalSumpal && $totalSumpal !==0){
                     if (inputVal > $totalSumpal){
                        //$('#now_remain_pal').val($totalSumpal-1);
                        $('#now_remain_kyat').val($totalSumkyat-1);
                        $inputpal=parseInt($('#buy_debit_pal').val())+16;
                        $totalSumPal1=parseInt($inputpal-inputVal);
                        $('#now_remain_pal').val($totalSumPal1);
                        if($totalSumpal === 0 && inputVal > $totalSumyae ){
                            $('#now_remain_kyat').val($totalSumkyat-1);
                            $('#now_remain_pal').val($totalSumpal+15);
                            $inputyae=parseInt($('#buy_debit_yae').val())+8;
                            $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                            $('#now_remain_yae').val($totalSumYae);
                        }

                        // $gettotalkyat=parseInt($('#buy_debit_kyat').val())-1;
                        // $totalSumpal=$totalSumpal+16;
                        // if(parseInt($('#payment_yae').val()) > parseInt($('#buy_debit_yae').val())){
                        //     $('#now_remain_pal').val("gekdkjd");
                        // }
                    }
                    // else if($('#now_remain_pal').val(0)){
                    //     $('#now_remain_pal').val(0);
                    //
                    // }
                });
            });
             $('.form-group').on('input','.pc25',function () {
                $totalSumyae=$('#buy_debit_yae').val();
                $('.form-group .pc25').each(function () {
                    var inputVal=$(this).val();
                    if($.isNumeric(inputVal)){

                        if (inputVal < $totalSumyae ) {
                            //$('#now_remain_pal').val($totalSumpal2);
                            $totalSumyae -=parseFloat(inputVal).toFixed(2);
                            // $r=parseFloat($aa).toFixed(2);
                            $('#now_remain_yae').val(parseFloat($totalSumyae).toFixed(2));
                        }
                        else if (inputVal > $totalSumyae){
                            $('#now_remain_pal').val($totalSumpal-1);
                            $('#now_remain_kyat').val($totalSumkyat);
                            $inputyae=parseInt($('#buy_debit_yae').val())+8;
                            $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                            $('#now_remain_yae').val($totalSumYae);
                            if($totalSumpal ===0 && inputVal > $totalSumyae ){
                                $('#now_remain_kyat').val($totalSumkyat-1);
                                $('#now_remain_pal').val($totalSumpal+15);
                                $inputyae=parseInt($('#buy_debit_yae').val())+8;
                                $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                                $('#now_remain_yae').val($totalSumYae);
                            }
                        }
                         if( inputVal > $totalSumpal && inputVal > $totalSumyae){
                            $('#now_remain_pal').val($totalSumPal1-1);
                            $('#now_remain_kyat').val($totalSumkyat-1);
                            $inputyae=parseInt($('#buy_debit_yae').val())+8;
                            $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                            $('#now_remain_yae').val($totalSumYae);
                            if($totalSumpal ===0 && inputVal > $totalSumyae ){
                                $('#now_remain_kyat').val($totalSumkyat-1);
                                $('#now_remain_pal').val($totalSumpal+15);
                                $inputyae=parseInt($('#buy_debit_yae').val())+8;
                                $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                                $('#now_remain_yae').val($totalSumYae);
                            }
                        }
                        //  if( inputVal < $totalSumpal && inputVal > $totalSumyae){
                        //     //$('#now_remain_pal').val($totalSumpal-1);
                        //     //('#now_remain_kyat').val($totalSumkyat-1);
                        //     $inputyae=parseInt($('#buy_debit_yae').val())+8;
                        //     $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                        //     $('#now_remain_yae').val($totalSumYae);
                        //     // if($totalSumpal ===0 && inputVal > $totalSumyae ){
                        //     //     $('#now_remain_kyat').val($totalSumkyat-1);
                        //     //     $('#now_remain_pal').val($totalSumpal+15);
                        //     //     $inputyae=parseInt($('#buy_debit_yae').val())+8;
                        //     //     $totalSumYae=parseFloat($inputyae-inputVal).toFixed(2);
                        //     //     $('#now_remain_yae').val($totalSumYae);
                        //     // }
                        // }
                        else if(inputVal === $totalSumyae){
                            $('#now_remain_yae').val(0);

                        }

                    }
                });
            });


        });


        $('.form-group').on('input','#first_name',function () {
            var totalSum=0;
            $('.form-group #first_name').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum +=parseFloat(inputVal);
                }
            });
            $('#showpoint').val(totalSum);
        });
        $('.form-group').on('input','.pc10',function () {
            var totalSum=0;
            $('.form-group .pc10').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text10').val(totalSum);
        });
        $('.form-group').on('input','.pc11',function () {
            var totalSum=0;
            $('.form-group .pc11').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text11').val(totalSum);
        });
        $('.form-group').on('input','.pc12',function () {
            var totalSum=0;
            $('.form-group .pc12').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text12').val(totalSum);
        });
       $('.form-group').on('input','.pc15',function () {
            var totalSum=0;
            $('.form-group .pc15').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text15').val(totalSum);
        });

        $('.form-group').on('input','.pc14',function () {
            var totalSum=0;
            $('.form-group .pc14').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text14').val(totalSum);
        });

    </script>
    <script>
        $(document).ready(function () {
                $('.form-group').on('input','.ex1',function () {
                    $kyat=0;
                    $pal=0;
                    $yae=0;
                    $inputVal=0;
                    $number=16.6;
                    $('.form-group .ex1').each(function () {
                        $inputVal=$(this).val();
                        if($.isNumeric($inputVal)){
                            $kyat =parseInt($inputVal/$number);
                            $pal =parseFloat((($inputVal/$number)-$kyat)*16);
                            $pal1=parseInt($pal);
                            $yae=$pal-$pal1;
                            $yae1=$yae*8;
                            $form=parseFloat($yae1).toFixed(2);

                            // $pal2 =parseInt((((($inputVal%$number)/$number)*16)/$number)*8);

                        }
                    });
                    $('#kyat').val($kyat);
                    $('#pal').val($pal1);
                    $('#yae').val($form);


                });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $(".id").toggle();
                $("#id").toggle();

            });
            $("#ring").click(function(){
                $(".ring").toggle();
            });
            $("#hide9").click(function(){
                $(".ring").hide();
            });

            $("#ring0").click(function(){
                $(".ring0").toggle();

            });
            $("#hide0").click(function(){
                $(".ring0").hide();
            });
            $("#ring1").click(function(){
                $(".ring1").toggle();

            });
            $("#hide1").click(function(){
                $(".ring1").hide();
            });
            $("#ring2").click(function(){
                $(".ring2").toggle();
            });
            $("#hide2").click(function(){
                $(".ring2").hide();
            });
        });
    </script>


    @yield('script')

</body>
</html>