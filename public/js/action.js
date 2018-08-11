
$(function () {

    getReport();
    function getReport() {
        $.ajax({
            type: 'get',
            url : 'pre-report',
            success:function (msg) {
                $("#getReport").html(msg);
            }
        })
    }

    $("#searchInvoiceForm").on('submit', function (e) {
        e.preventDefault();
        var invoiceId=$("#invoiceId").val();

        $.ajax({
            type: 'get',
            url : 'pre-report',
            data: {invoiceId:invoiceId},
            success:function (msg) {
                $("#invoiceId").val('');
                $("#getReport").html(msg);
            }
        })
    });

    $("#reportFilterForm").on('submit', function (e) {
        e.preventDefault();
        var q=$("#q").val();

        $.ajax({
            type: 'get',
            url : 'pre-report',
            data: {q:q},
            success:function (msg) {
                $("#getReport").html(msg);
            }
        })

    })



    $("#sale_item").focus();
    cartItem();


    $("#btnClearCart").on('click', function () {
        $.ajax({
            type: "get",
            url : 'clear/cart',
            success:function (msg) {
                if(msg==="success"){
                    cartItem();
                }
            }
        })
    });

    function cartItem() {
        $.ajax({
            type: 'get',
            url: 'pre-cart',
            success:function (msg) {
                $("#cartItem").html(msg);
            }
        })
    }

    $("#checkoutForm").on('submit', function (e) {
        e.preventDefault();
        var customer=$("#customer").val();
        if(customer){
            $.ajax({
                type: 'get',
                url : 'checkout',
                data: {customer:customer},
                success:function (msg) {
                    if(msg.length <50){
                        cartItem();
                        $("#myInfo").html("<div class='alert alert-success'><span class='glyphicon glyphicon-ok-circle'></span> Checkout completed.</div>")
                        setTimeout(function () {
                            $("#btnCheckout").modal('hide');
                            window.open('print/' +msg, '_blank');
                        }, 2000)

                    }else{
                        $("#myInfo").html(msg)
                    }
                }
            })
        }else{
            $("#myInfo").html("<div class='alert alert-warning'><i class='fa fa-warning'></i> Customer table must be selected.</div>");
        }
    });

    $("body").delegate('#btnIncreaseCart', 'click', function () {
        var id=$(this).attr('idd');
        $.ajax({
            type: 'get',
            url : 'increase/cart',
            data: {id:id},
            success:function (msg) {
               cartItem();
            }
        })
    })

    $("body").delegate('#btnDecreaseCart', 'click', function () {
        var id=$(this).attr('idd');
        $.ajax({
            type: 'get',
            url : 'decrease/cart',
            data: {id:id},
            success:function (msg) {
                cartItem();
            }
        })
    })

    $("body").delegate('#btnAddToCart', 'click', function () {
        var sale_item=$(this).attr('item_name');

        $.ajax({
            type: 'get',
            url: '../../add-to-cart',
            data: {sale_item:sale_item},
            success:function (msg) {
                if(msg==="success"){
                    $("#sale_item").val('');
                    cartItem();
                }
            }
        })

    })

    $("#sale_form").on('submit', function (e) {
        e.preventDefault();
        var sale_item=$("#sale_item").val();

        $.ajax({
            type: 'get',
            url: '../../add-to-cart',
            data: {sale_item:sale_item},
            success:function (msg) {
                if(msg==="success"){
                    $("#sale_item").val('');
                    cartItem();
                }
            }
        })

    })

})
