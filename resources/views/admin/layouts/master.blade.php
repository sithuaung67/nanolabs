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

        }
        document.getElementById('dataTable1').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
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

        }
        document.getElementById('dataTable').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
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

        }
        document.getElementById('dataTableInvoice').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
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
            $('#text1').val(totalSum);
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