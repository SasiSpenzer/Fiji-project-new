<!DOCTYPE html>
<html >
<head>
    <title>Traccular</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="${baseUrl}/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body
        {
            padding: 0;
            margin: 0;
            font-family: 'Open Sans', Verdana, Geneva, sans-serif;
            font-size: 22px;
        }
        header
        {
            /* background:indianred; */
            /* padding: 1%; */
            height: 100px;

        }

        .email-content-body
        {
            width: 100%;
            height: 650px;
            /* background: #f4f4f4; */
            /* margin: 3% auto; */
            /* padding-top: 1%; */
        }

        .email-content-body h3 a
        {
            /* color: #fff; */
            /* font-size: 32px; */
        }

        .email-body{
            /* background:indianred; */
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 2%;
            font-size: 20px;
            line-height: 35px;
            /* color: #fff; */
            height: 100%;
            margin-top: 4%;
        }
        .row
        {
            width: 100%;
            float: left;
        }
        .logo
        {
            font-size: 24px;
            background: #fff;
            padding: 1%;
        }
        @media only screen and (max-width: 640px) {
            .email-content-body
            {
                width: 100%;
                height: 650px;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <h2><img src="https://dev.traccular.com/images/traccular_logo_light_small.png" width="30" height="30"/> Your Meeting Details</h2>
    </div>
</header>

<div class="email-content-body">

    <div class="email-body">
        <h3>
            @if($link)
                Meeting Reference No: {{ $link }}
            @endif
        </h3>

        @if($body)
           {{ $body }}
        @endif

        <div class="qr">
            @if($link)
                {{-- <img src="{!!$message->embedData(QrCode::format('png')->size(400)->generate($link), 'QrCode.png', 'image/png')!!}"> --}}
        <img src="{!!$message->embedData(QrCode::format('png')->size(400)->merge('images/qr_logo.png', 0.3, true)->errorCorrection('H')->generate($link), $link.'QrCode.png', 'image/png')!!}" id="{{$link}}">
            @endif
        </div>

        <h3>Please retain this email and provide the QR code or the meeting reference number at the reception</h3>

        <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center">
                                <table border="0" cellpadding="0" cellspacing="0">

                                    <tr>
                                        <td>
                                            <button class="button button-{{ $color ?? 'blue' }}" target="_blank"><a href="{{ $calenders['google'] }}">Add to Google Calender </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="button button-{{ $color ?? 'blue' }}" target="_blank"><a href="{{ $calenders['outlook'] }}">Add to Outlook Calender </a> </button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</div>
</body>
</html>
