<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-17"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-52115242-17');
    </script>

    <meta charset="utf-8">
    <title>Sistem Informasi Bencana Alam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <style>
      @keyframes hideLoader{ 0%{ width: 100%; height: 100%; } 100%{ width: 0; height: 0; } } body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center; } body:not(.loaded) > div.loader{ opacity: 1; } body:not(.loaded){ overflow: hidden; } body.loaded > div.loader{ animation: hideLoader .5s linear .5s forwards; } .loading-animation{width:40px;height:40px;margin:100px auto;background-color:#009B72;border-radius:100%;animation:pulse 1s infinite ease-in-out}@keyframes pulse{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>
    <!-- End loading animation -->
    <link href="{{url('assetshome/css/theme.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&amp;display=swap" rel="stylesheet">


    <!-- link for leaflet js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <style type="text/css">
    .leaflet-left .leaflet-control {
        /* margin-left: 50px !important; */
    }
    .leaflet-right .leaflet-control {
        /* margin-right: 50px !important; */
    }

    #mapid{
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
        /*position: absolute !important;*/
        top: 18%;
        bottom: 0;
        height: 480px;
        width: 100%;
        z-index: 1;
    }

    </style>
  </head>
