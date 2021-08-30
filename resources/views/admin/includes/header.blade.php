<!DOCTYPE html>
<html 
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        lang="ar" dir="rtl"
    @else
        lang="en" dir="ltr"
    @endif
>

    <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard Dark Edition by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link href={{URL::asset("adminpanel/css/material-dashboard-rtl.css")}} rel="stylesheet" />
    @else
        <link href={{URL::asset("adminpanel/css/material-dashboard.css")}} rel="stylesheet" />
    @endif
    
    
    </head>

    <body class="dark-edition">