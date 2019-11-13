<script type="text/javascript">


    function addHyphen (element) {
        let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }


    function addFoods(foodName){

        let FoodName = foodName;

        $.ajax({
            url: '{{route('orderMenu')}}',
            type: 'POST',
            data: {'FoodName':FoodName, _token: $('input[name="_token"]').val()},
            success: function (data) {

                $("#MenuDiv").html(data);

            }
        });

    }

    function subFoods(foodName) {

        let FoodName = foodName;

        $.ajax({
            url: '{{route('orderMenuSub')}}',
            type: 'POST',
            data: {'FoodName':FoodName, _token: $('input[name="_token"]').val()},
            success: function (data) {

                $("#MenuDiv").html(data);

            }
        });
    }

    function viewNotification(id) {
        let notificationID = id;


        $.ajax({
            url: '{{route('meeting.view-notification')}}',
            type: 'POST',
            data: {'notificationID':notificationID, _token: $('input[name="_token"]').val()},
            success: function (data) {

                $('#meetingName-notification').html(data.notification_data[0].meeting_name);
                $('#meetingStart-notification').html(data.notification_data[0].start);
                $('#meetingEnd-notification').html(data.notification_data[0].end);
                $('#meetingDate-notification2').html(data.notification_data[0].date);
                $('#visitor-notification').html(data.notification_data[0].meeting_name);
                $('#meetingName-notification').html(data.notification_data[0].meeting_name);
                $('#hiddenMeetingID').val(data.notification_data[0].meeting_id);
                $('#hiddenVisiID').val(data.notification_data[0].v_id);



                if(data.visitor_data.length != 0){

                    $("#visitor-notification").html(data.visitor_data[0].first_name + ' ' + data.visitor_data[0].last_name);
                    $("#Email-notification").html(data.visitor_data[0].email);
                    $("#NIC-notification").html(data.visitor_data[0].nic);
                    $("#hiddenvisitorIDModel").val(data.visitor_data[0].id);
                    $("#Organization-notification").html(data.visitor_data[0].organization);
                    $("#deviceTable").html(data.devices);

                }else{
                    $('#1n,#2n,#3n,#4n').hide();
                    $('#parking,#parking-to-admin,#re-register').hide();
                }

                $('#notificationView').modal('show');
                $("#"+notificationID+"").removeClass('btn-success');

                $.ajax({
                    url: '{{route('meeting.update-notification')}}',
                    type: 'POST',
                    data: {'id':notificationID, _token: $('input[name="_token"]').val()},
                    success: function (data) {

                    }
                });

                console.log(data);
            }
        });
    }
    
    function ResendNotification(pendingRef) {

        let meeting_id_pending = pendingRef;
        $.ajax({
            url: '{{route('ResendPending')}}',
            type: 'POST',
            data: {"meeting_id_pending":meeting_id_pending,_token: $('input[name="_token"]').val()},
            success: function (data) {

                $("#resendMsg").show();
                $("#resendMsg").html("Request Sent !");
            }
        });


    }

    function viewMeeting(id){

        let meeting_ref = id;

        $.ajax({
            url: '{{route('meeting.fullview')}}',
            type: 'POST',
            data: {'meeting_ref':meeting_ref, _token: $('input[name="_token"]').val()},
            success: function (data) {

                $('#fullHeightModalRight').modal('show');
                $("#request_cancel").attr("disabled", false);
                $("#alreadycancel").hide();

                $("#meetingNamea").html(data[0].meeting_name);
                $("#namea").html(data[0].visitor_first_name + data[0].visitor_last_name);
                $("#meetingStarta").html(data[0].start);
                $("#meetingEnda").html(data[0].end);
                $("#meetingdatea").html(data[0].date);
                $("#hiddenMeetingIDa").val(data[0].meeting_id);

                if(data['req'] == '1'){

                    $("#request_delay").attr("disabled", true);
                    $("#alreadyhide").show();
                }
                if(data['cancel'] == '1'){

                    $("#request_cancel").attr("disabled", true);
                    $("#alreadycancel").show();
                }
            }
        });

    }

    function removeRaw() {
        $('#deviceTable tr:last').remove();
    }

    function getNotification(id) {

        let notificationID = id;
        $.ajax({
            url: '{{route('meeting.get-notification')}}',
            type: 'POST',
            data: {'notificationID':notificationID, _token: $('input[name="_token"]').val()},
            success: function (data) {

                $('#meetingName-notification').html(data.notification_data[0].meeting_name);
                $('#meetingStart-notification').html(data.notification_data[0].start);
                $('#meetingEnd-notification').html(data.notification_data[0].end);
                $('#meetingDate-notification2').html(data.notification_data[0].date);
                $('#visitor-notification').html(data.notification_data[0].meeting_name);
                $('#meetingName-notification').html(data.notification_data[0].meeting_name);
                $('#hiddenMeetingID').val(data.notification_data[0].meeting_id);
                $('#hiddenVisiID').val(data.notification_data[0].v_id);

                if(data.visitor_data.length != 0){

                    $("#visitor-notification").html(data.visitor_data[0].first_name + ' ' + data.visitor_data[0].last_name);
                    $("#Email-notification").html(data.visitor_data[0].email);
                    $("#NIC-notification").html(data.visitor_data[0].nic);
                    $("#hiddenvisitorIDModel").val(data.visitor_data[0].id);
                    $("#Organization-notification").html(data.visitor_data[0].organization);

                }else{
                    $('#1n,#2n,#3n,#4n').hide();
                    $('#parking,#parking-to-admin,#re-register').hide();
                }

                $('#notificationView').modal('show');
                $("#"+notificationID+"").removeClass('btn-success');

                $.ajax({
                    url: '{{route('meeting.update-notification')}}',
                    type: 'POST',
                    data: {'id':notificationID, _token: $('input[name="_token"]').val()},
                    success: function (data) {

                    }
                });

                console.log(data);

            }
        });

    }

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
    function previewFile() {
        var preview = document.getElementById('VImagehere');
        var file    = document.getElementById('visitor_img_model').files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
    (function( $ ){
        $.fn.multipleInput = function() {
            return this.each(function(e) {
                // list of email addresses as unordered list
                $list = $('<ul/>');
                // input
                var $input = $('<input type="email" id="email_search" class="email_search multiemail"/>').keyup(function(event) {
                    if(event.which== 13){
                        e.preventDefault();
                    }
                    else if(event.which == 13 || event.which == 32 || event.which == 188) {
                        if(event.which==188){
                            var val = $(this).val().slice(0, -1);// remove space/comma from value
                        }
                        else{
                            var val = $(this).val(); // key press is space or comma
                        }

                        if(validateEmail(val)){
                            let hiddenArray = $('#hiddenArray').val();


                            if(hiddenArray.length){
                                let  hiddenArrayDecoded = hiddenArray;
                                hiddenArrayDecoded = hiddenArrayDecoded + '-' + val;

                                let toArray = hiddenArrayDecoded;
                                $('#hiddenArray').val(toArray);
                            }else {

                                let toArray = val;
                                $('#hiddenArray').val(toArray);
                            }
                            // append to list of emails with remove button
                            $list.append($('<li  class="multipleInput-email"><span>' + val + '</span></li>')
                                .append($('<a href="#" class="multipleInput-close" title="Remove"><i class="glyphicon glyphicon-remove-sign"></i></a>')
                                    .click(function(e) {
                                        $(this).parent().remove();
                                        e.preventDefault();
                                    })
                                )


                            );

                            $(this).attr('placeholder', '');
                            // empty input
                            $(this).val('');





                        }
                        else{
                            alert('Please enter valid email id, Thanks!');
                        }
                    }
                });
                // container div
                var $container = $('<div class="multipleInput-container" />').click(function() {
                    $input.focus();
                });
                // insert elements into DOM
                $container.append($list).append($input).insertAfter($(this));
                return $(this).hide();
            });
        };
    })( jQuery );
    $('#recipient_email').multipleInput();

    $(document).ready(function () {

        $('#example').DataTable(
            {
                "paging":   false,
                "ordering": false,
                "info":     false,
                search: true
            }
        );
        $('#meetingpop-listing').DataTable(
            {

            }
        );


        // $('#self-reg-user').click(function () {
        //
        //     $("#exampleModal").modal('show');
        // });

        $("#assetsSelect").select2();
        $("#partnerSelect").select2(
            {
                tags: true,
                tokenSeparators: [',', ' ']
            }
        );
        $("#selectVisitors").select2(
            {
                tags: true,
                tokenSeparators: [',', ' ']
            }

        );

        $(".select2").removeAttr('style');
        $(".select2").width('100%');

        $("#recipient_email").addClass('form-control');
        $("#submitMeeting").click(function () {
            $('#meetingForm').submit();
        });

        $("#createVModal").click(function (e) {

            let nic = $("#nic").val();
            if(nic == ''){
                $("#nic").css('border-color', 'red');
                e.preventDefault();
            }else{
                let empty = true;
                $('input').each(function(){
                    if($(this).val()== ""){
                        empty =false;
                        //$('"#'+this.id+'"').addClass('btn-danger');
                        $(this).css('border-color', 'red');

                    }

                });
            }

        });

            $("#SaveAndMake").click(function () {


            $.ajax({
                url: '{{route('makeMeetingSession')}}',
                type: 'POST',
                data: {_token: $('input[name="_token"]').val()},
                success: function (data) {

                   $("#visiform").submit();
                }
            });

        });

        $('#visitor_img').change(function() {
            if ($(this).val()) {
                let  filename = "One File Selected for Visitor Image !";
                $("#visitorText").html(filename);
            }
        });
        $('#nic_img').change(function() {
            if ($(this).val()) {
                let  filename = "One File Selected for Visitor NIC !";
                $("#NICText").html(filename);
            }
        });


        $("#partnerSelect").attr('width','100%!important');


        $('#end').timepicker(
            {
                'timeFormat': 'H:i' ,
                pick12HourFormat: false
            }
        );


        $('#date').datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true,
            minDate:new Date(),

            todayBtn: true,
            setDate: new Date(),
        });
        //
        $('#start').timepicker(
            { 'timeFormat': 'H:i' ,
                pick12HourFormat: false
            }
        );
        // $('#start').timepicker({
        //     uiLibrary: 'bootstrap4',
        //     dateFormat: 'yy-mm-dd',
        // });


        $("#device").click(function () {
            $("#tableRegister").toggle('slow');
        });

        $("#prerequisites").click(function () {
            $("#tableAssets").toggle('slow');
        });

        $("#orderSave").click(function () {
            let facility_id = 1;
            $.ajax({
                url: '{{route('OrderSave')}}',
                type: 'POST',
                data: {"facility_id":facility_id,_token: $('input[name="_token"]').val()},
                success: function (data) {

                    if(data == "Please Enter your login credentials first"){
                        alert("Please Enter your login credentials first");
                        return false;
                    }
                    alert('Order Created Successfully')
                    $("#refreshmentsModal").modal('hide');

                }
            });


        });




        $("#addBtnraw").click(function () {

            var rawCounter = $("#rawCounter").val();
            rawCounter = parseInt(rawCounter);
            rawCounter =  rawCounter + 1;

            let raw = "<tr>";
            raw += "<td><input id='item_"+rawCounter+"' name='item_"+rawCounter+"' class='form-control' type='text'></td> ";
            raw += "<td><input id='brand_"+rawCounter+"' name='brand_"+rawCounter+"' class='form-control' type='text'></td> ";
            raw += "<td><input id='serial_"+rawCounter+"' name='serial_"+rawCounter+"' class='form-control' type='text'></td> ";
            raw += "<td align='left'><input onclick='removeRaw();' style=\"border-radius: 70%;font-size: 40px;color: red;\" class=\"btn\" type=\"button\" id=\"removeBtnRaw\" name=\"removeBtnRaw\" value=\"\"><i  onclick='removeRaw();' class=\"fa fa-minus-circle fa-2x\" aria-hidden=\"true\"></i></td> ";

            raw += "</tr>";

            $("#rawCounter").val(rawCounter);
            $("#deviceTable").append(raw);

        });



        $("#request_cancel").click(function () {

            let meeting_id = $("#hiddenMeetingIDa").val();
            $.ajax({
                url: '{{route('requestCancel')}}',
                type: 'POST',
                data: {'meeting_id':meeting_id, _token: $('input[name="_token"]').val()},
                success: function (data) {

                    alert('Requested to Cancel the Meeting');
                    $('#fullHeightModalRight').modal('hide');

                }
            });


        });

        $("#request_delay").click(function () {

            let meeting_id = $("#hiddenMeetingIDa").val();
            $.ajax({
                url: '{{route('requestDelay')}}',
                type: 'POST',
                data: {'meeting_id':meeting_id, _token: $('input[name="_token"]').val()},
                success: function (data) {

                    alert('Requested to Delay the Meeting');
                    $('#fullHeightModalRight').modal('hide');

                }
            });

        });




        $("#addItem").click(function () {

            let itemValue = $('.foodItem').val();

            alert(itemValue)
            {{--let foodType = $("#goodsAdd").val();--}}
            {{--let foodQty = $("#qtyAdd").val();--}}




        });


        $("#order_refreshments").click(function () {

            $("#loginModel").modal('show');
        });

        $("#loginBtn").click(function () {

            let userEmail = $('#user-email').val();
            let password = $('#password').val();
            $.ajax({
                url: '{{route('check-user-login')}}',
                type: 'POST',
                data: {'userEmail':userEmail,'password':password, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    if(data == 'Wrong Credentials'){
                        $('#showmsgDiv').show();
                        $('#showmsgDiv').html('Wrong Credentials !');
                    }else{
                        // $("#loginModel").modal('hide');
                        // $("#oderModel").modal('show');
                        console.log(data);
                        $('#showmsgDiv').show();
                        $('#showmsgDiv').html('Login Successful ! Please Place your Order');


                    }
                }
            });

        });


        $("#clearMenu").click(function () {
            $.ajax({
                url: '{{route('clear-menu')}}',
                type: 'POST',
                data: {'clear':true, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    $("#MenuDiv").html('');
                }
            });
        });

        $("#parking").click(function () {

            let meeting_id = $("#hiddenMeetingID").val();
            let visitor_id = $("#hiddenVisiID").val();
            let status = '1';
            $.ajax({
                url: '{{route('parking-to-admin')}}',
                type: 'POST',
                data: {'visitor_id':visitor_id,'status':status,'meeting_id':meeting_id, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    $('#notificationView').modal('hide');
                    $("#alertSuccessRe").show();
                }
            });

        });

        $("#approveVisitor").click(function () {

            let meeting_id = $("#hiddenMeetingID").val();
            let visitor_id = $("#hiddenvisitorIDModel").val();
            $.ajax({
                url: '{{route('visitor.approveByUser')}}',
                type: 'POST',
                data: {'meeting_id':meeting_id,'visitor_id':visitor_id, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    $('#notificationView').modal('hide');
                    $("#alertSuccess").show();
                }
            });

        });

        $("#re-register").click(function () {

            let visitor_id = $("#hiddenVisiID").val();
            $.ajax({
                url: '{{route('visitor.re-register')}}',
                type: 'POST',
                data: {'visitor_id':visitor_id, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    $('#notificationView').modal('hide');
                    $("#alertSuccessRe").show();
                }
            });


        });

        $("#parking-to-admin").click(function () {

            let meeting_id = $("#hiddenMeetingID").val();
            let visitor_id = $("#hiddenVisiID").val();
            let status = '0';
            $.ajax({
                url: '{{route('parking-to-admin')}}',
                type: 'POST',
                data: {'visitor_id':visitor_id,'status':status,'meeting_id':meeting_id, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    $('#notificationView').modal('hide');
                    $("#alertSuccessRe").show();
                }
            });
        });
        
        

        $("#confirmVisitor").click(function () {
            $("#veryfyformModel").submit();
        });

        $('#refnumber').keypress(function(event){

            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                let refNumber =  $("#refnumber").val();


                if(refNumber.length == 0){
                    alert('Please fill the Reference Number ');
                    e.preventDefault();
                }
                else {

                    $.ajax({
                        url: '<?php echo e(route('visitor.verify')); ?>',
                        type: 'POST',
                        data: {'data': refNumber, _token: $('input[name="_token"]').val()},
                        success: function (data) {

                            if(data.end){

                                // Visitor Info
                                $("#VEmailHere").html(data.email);
                                $("#VNameHere").html(data.visitor_first_name + data.visitor_last_name);
                                $("#VNicHere").html(data.nic);
                                $("#VRefHere").html(data.ref_number);
                                $("#VOrgHere").html(data.organization);
                                $("#VValidHere").html(data.valid_till);



                                $("#MSubjectHere").html(data.meeting_name);
                                $("#MRefHere").html(data.ref_number);

                                $("#MStart").html(data.start);
                                $("#MEnd").html(data.end);
                                $("#MArrangeHere").html(data.arranged_by_first + " " + data.arranged_by_last);
                                $("#MLocationHere").html(data.facility_name);

                                let imagePathHidden = $("#imagePathHidden").val();


                                $("#VImagehere").attr('src',imagePathHidden+data.image_path);
                                $("#VImagehere").attr('width',"315px;");


                                $("#hiddenMeetingID").val(data.meeting_id);
                                $("#hiddenvisitorID").val(data.visitor_id);

                                $("#hiddenMeetingID_relocated").val(data.meeting_id);
                                $("#hiddenvisitorID_relocated").val(data.visitor_id);

                                if(typeof(data.noImage) != "undefined" && data.noImage !== null) {

                                    $("#visitor_img_model").show();
                                    $("#lableImage").show();

                                }
                                if(typeof(data.noNic) != "undefined" && data.noNic !== null) {
                                    $("#visitor_nic_model").show();
                                    $("#lableNic").show();
                                }


                                var APP_URL = <?php echo json_encode(url('/')); ?>

                                    let image = "<img width='200' height='200' src='"+APP_URL+"/visitors/"+data.image_path+"'>";
                                $('#Vimage').html(image);

                                // is tagged
                                if(data.setcheckout == 1){

                                    $("#confirmDiv").hide();
                                    $("#checkoutDiv").show();

                                }
                                else{

                                    $("#checkoutDiv").hide();
                                    $("#confirmDiv").show();
                                }

                                $('#verifyUserModal').modal('show');
                            }else{
                                alert(data);
                            }


                        }
                    });
                }
            }

        });

        function toDataURL(url) {
            return fetch(url)
                .then((response)=> {

                    return response.blob();
                })
                .then(blob=> {
                    const imageEncoded = URL.createObjectURL(blob);
                    console.log('image ', imageEncoded);
                    $("#VImagehere").attr("src",imageEncoded);
                    return imageEncoded;
                });
        }

        $("#upload_form").on('submit', function(e){

            e.preventDefault();
            // let  meetingID = $('#hiddenMeetingID').val();
            // let  visitorID = $('#hiddenvisitorID').val();
            // let cardid =  $('#cardIDVeryfy').val();

            $.ajax({
                url: '{{route('visitor.visits')}}',
                method: 'POST',
                contentType:false,
                processData:false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data:new FormData(this),
                success: function (data) {
                    if(data.msg == 'Visitor Confirmed !'){
                        $("#sucMsg").html(data.msg);
                        if(typeof(data.image) != "undefined" && data.image !== null) {

                            var imageToreplace = data.image;
                            // imageToreplace.then(function(result) {
                            //     console.log('promise result' + result);
                            // });

                            // var newSrc = $('#VImagehere').attr('src').replace(imageToreplace);
                            $('#VImagehere').attr('src',data.image);
                            //$("#VImagehere").attr("src",imageToreplace.replace(/^imageToreplace\/(png|jpg);base64,/, ""));

                        }

                        $('#myModal').modal('hide');

                    } else {

                        $("#sucMsg").html(data.msg);
                    }

                }
            });
        });

        $("#checkoutVisitor").click(function () {


            let refNumber =  $("#refnumber").val();
            let  visitorID = $('#hiddenvisitorID').val();

            if(refNumber.length == 0){
                alert('Please fill the Reference Number ');
                e.preventDefault();
            }
            else {


                $.ajax({
                    url: '{{route('visitor.checkout')}}',
                    type: 'POST',
                    data: {'visitorID':visitorID, _token: $('input[name="_token"]').val()},
                    success: function (data) {
                        $("#sucMsg").html(data);
                        $('#verifyUserModal').modal('hide');
                    }
                });


            }

        });

        $("#continue_btn").click(function () {

            let formArray = $("#formEmailShare").serializeArray();
            let visitorEmail  = $("#email").val();
            let hiddenMeetingID = $("#hiddenMeetingID").val();

            $.ajax({
                url: '{{route('visitor.makeSession')}}',
                type: 'POST',
                data: {'visitorEmail':visitorEmail,'hiddenMeetingID':hiddenMeetingID,'formArray':formArray, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    if(data == "Not Same Domain"){
                        alert('Sharing Email address should be on the same Domain as Yours!')
                    }else {
                        // $("#selfForm").submit();
                        alert(data);
                    }

                }
            });


        });

        $("#visitorIDBtn").click(function (e) {

            e.preventDefault();
            let  visitorID = $('#hiddenvisitorID').val();

            $.ajax({
                url: '{{route('verify-model-get')}}',
                type: 'POST',
                data: {'visitorID':visitorID, _token: $('input[name="_token"]').val()},
                success: function (data) {

                    if(typeof(data.nic_img) != "undefined" && data.nic_img !== null) {



                        $('#VImagehere').attr('src',data.nic_img);

                        $("#visitorIDBtn").hide();
                        $("#visitorIMGBtn").show();
                    }
                }
            });


        });


        
        $("#visitorIMGBtn").click(function (e) {

            e.preventDefault();
            let  visitorID = $('#hiddenvisitorID').val();

            $.ajax({
                url: '{{route('verify-model-get')}}',
                type: 'POST',
                data: {'visitorID':visitorID, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    console.log(data.image_path);
                    if(typeof(data.image_path) != "undefined" && data.image_path !== null) {



                        $('#VImagehere').attr('src',data.image_path);


                        $("#visitorIMGBtn").hide();
                        $("#visitorIDBtn").show();
                    }
                }
            });


        });


        $('#renumberBtn').click(function (e) {

            let refNumber =  $("#refnumber").val();


            if(refNumber.length == 0){
                alert('Please fill the Reference Number ');
                e.preventDefault();
            }
            else {

                $.ajax({
                    url: '{{route('visitor.verify')}}',
                    type: 'POST',
                    data: {'data': refNumber, _token: $('input[name="_token"]').val()},
                    success: function (data) {

                        if(data.end){

                            // Visitor Info
                            $("#VEmailHere").html(data.email);
                            $("#VEmailHere[title='Tooltip on top']").html(data.email);
                            $("#VNameHere").html(data.visitor_first_name + data.visitor_last_name);
                            $("#VNicHere").html(data.nic);
                            $("#VRefHere").html(data.ref_number);
                            $("#VOrgHere").html(data.organization);
                            $("#VValidHere").html(data.valid_till);



                            $("#MSubjectHere").html(data.meeting_name);
                            $("#MRefHere").html(data.ref_number);

                            $("#MStart").html(data.start);
                            $("#MEnd").html(data.end);
                            $("#MArrangeHere").html(data.arranged_by_first + " " + data.arranged_by_last);
                            $("#MLocationHere").html(data.facility_name);

                            let imagePathHidden = $("#imagePathHidden").val();


                            $("#VImagehere").attr('src',imagePathHidden+data.image_path);
                            $("#VImagehere").attr('width',"315px;");

                            $("#devicetbaleBody").html(data.devices);
                            $("#preTableRaw").html(data.Prerequisites);

                            $("#hiddenMeetingID").val(data.meeting_id);
                            $("#hiddenvisitorID").val(data.visitor_id);

                            $("#hiddenMeetingID_relocated").val(data.meeting_id);
                            $("#hiddenvisitorID_relocated").val(data.visitor_id);

                            if(typeof(data.noImage) != "undefined" && data.noImage !== null) {

                                $("#visitor_img_model").show();
                                $("#lableImage").show();

                            }
                            if(typeof(data.noNic) != "undefined" && data.noNic !== null) {
                                $("#visitor_nic_model").show();
                                $("#lableNic").show();
                            }


                            var APP_URL = {!! json_encode(url('/')) !!}
                                let image = "<img width='200' height='200' src='"+APP_URL+"/visitors/"+data.image_path+"'>";
                            $('#Vimage').html(image);

                            // is tagged
                            if(data.setcheckout == 1){

                                $("#confirmDiv").hide();
                                $("#checkoutDiv").show();

                            }
                            else{

                                $("#checkoutDiv").hide();
                                $("#confirmDiv").show();
                            }

                            $('#verifyUserModal').modal('show');
                        }else{
                            alert(data);
                        }


                    }
                });
            }
        })



    });
</script>
