
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Adminpix</title>
<link rel="shortcut icon" href="/adminpanel/assets/dist/img/favicon.png" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    WebFont.load({
        google: {families: ['Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i']},
        active: function () {
            sessionStorage.fonts = true;
        }
    });
</script>
<link href="/adminpanel/assets/dist/css/base.css" rel="stylesheet" type="text/css">
<link href="/adminpanel/assets/dist/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/adminpanel/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->