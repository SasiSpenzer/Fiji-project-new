{{-- <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
<script type="text/javascript">

    'use strict';

    var videoElement = document.querySelector('video');
    var audioSelect = document.querySelector('select#audioSource');
    var videoSelect = document.querySelector('select#videoSource');

    // audioSelect.onchange = getStream;
    videoSelect.onchange = getStream;

    getStream().then(getDevices).then(gotDevices);

    const video = document.querySelector('video');
    const captureVideoButton =
        document.querySelector('#screenshot .capture-button');
    const screenshotButton = document.querySelector('#screenshot-button');
    const img = document.querySelector('#screenshot-img');
    const saveImg = document.querySelector('#webcamimagesave');
    // const video = document.querySelector('#screenshot img');

    const canvas = document.createElement('canvas');

    // captureVideoButton.onclick = function() {
    //     navigator.mediaDevices.getUserMedia(constraints).
    //     then(handleSuccess).catch(handleError);
    // };

    screenshotButton.onclick = video.onclick = function() {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        // Other browsers will fall back to image/png
        img.src = canvas.toDataURL('image/png');
        saveImg.value = canvas.toDataURL('image/png');
    };

    function handleSuccess(stream) {
        screenshotButton.disabled = false;
        video.srcObject = stream;
    }



    function getDevices() {
        // AFAICT in Safari this only gets default devices until gUM is called :/
        return navigator.mediaDevices.enumerateDevices();
    }

    function gotDevices(deviceInfos) {
        window.deviceInfos = deviceInfos; // make available to console
        console.log('Available input and output devices:', deviceInfos);
        for (const deviceInfo of deviceInfos) {
            const option = document.createElement('option');
            option.value = deviceInfo.deviceId;
            if (deviceInfo.kind === 'audioinput') {
                // option.text = deviceInfo.label || `Microphone ${audioSelect.length + 1}`;
                // audioSelect.appendChild(option);
            } else if (deviceInfo.kind === 'videoinput') {
                option.text = deviceInfo.label || `Camera ${videoSelect.length + 1}`;
                videoSelect.appendChild(option);
            }
        }
    }

    function getStream() {
        if (window.stream) {
            window.stream.getTracks().forEach(track => {
                track.stop();
            });
        }
        // const audioSource = audioSelect.value;
        const videoSource = videoSelect.value;
        const constraints = {
            // audio: {deviceId: audioSource ? {exact: audioSource} : undefined},
            video: {deviceId: videoSource ? {exact: videoSource} : undefined}
        };
        return navigator.mediaDevices.getUserMedia(constraints).
        then(gotStream).catch(handleError);
    }





    function gotStream(stream) {
        window.stream = stream; // make stream available to console
        // audioSelect.selectedIndex = [...audioSelect.options].
        // findIndex(option => option.text === stream.getAudioTracks()[0].label);
        videoSelect.selectedIndex = [...videoSelect.options].
        findIndex(option => option.text === stream.getVideoTracks()[0].label);
        videoElement.srcObject = stream;
    }

    function handleError(error) {
        console.error('Error: ', error);
    }

    $(document).ready(function () {


        $("#userCam").click(function () {

                $("#camdiv").toggle();
        });


        $("#onAppointment").click(function () {
            $('#meetingdiv').toggle('slow');
        }) ;
        $('#self-reg-user').click(function () {

            $("#exampleModal").modal('show');
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

        $("#continue_btn").click(function () {

            let formArray = $("#formEmailShare").serializeArray();
            let visitorEmail  = $("#email").val();


            $.ajax({
                url: '{{route('visitor.makeSession')}}',
                type: 'POST',
                data: {'visitorEmail':visitorEmail,'formArray':formArray, _token: $('input[name="_token"]').val()},
                success: function (data) {
                    if(data == "Not Same Domain"){
                        alert('Sharing Email address should be on the same Domain as Yours!')
                    }else {
                        $("#selfForm").submit();
                    }

                }
            });


        });
    });



</script>