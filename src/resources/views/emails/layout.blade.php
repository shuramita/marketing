<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{$title or ""}}</title>
    <style>{{$style or ""}}</style>
</head>
<body class="main" style="margin: 0; padding: 0;background-color: #f7f7f7;font-family: Roboto, sans-serif;">

    <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;max-width: 600px;margin: 0 auto;">
    <tr>
        <td align="center" style="">
            <div class="logo">
                <a href="{{$links->home}}">
                    <img src="{{$images->logo or ''}}" alt="Averspace" />
                </a>
            </div>

        </td>
    </tr>
    <tr>
        @include('marketing::emails.partials.header')
    </tr>
    <tr>
        <td>
            @yield('body')
        </td>

    </tr>
    <tr>
        <td>
            @include('marketing::emails.partials.footer')
        </td>
    </tr>
</table>

</body>
</html>