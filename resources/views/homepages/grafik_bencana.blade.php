<!doctype html>
<html lang="en">
@include ('homepages/head')

<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:06:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->


  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <!-- <div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
    <div class="container">
        <div class="row no-gutters align-items-md-center justify-content-center">
            <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=https://themeforest.net/item/jumpstart-app-and-software-template/24207799>Redeem Offer</a>
            </div>
            <div class="col-auto position-absolute right">
                <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="assets/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white" data-inject-svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div> -->
@include ('homepages/navbar')
@include ('homepages/animate')
        <section id="landing-pages">
      <div class="container">
          <div class="col">
            <h3 class="h1">Grafik Bencana</h3>
          </div>
        <div class="row mt-4 mt-md-5">
        @yield ('content')
            <div id="chartBencana"></div>
        </div>
      </div>
    </section>

@include ('homepages/script')
<script>
    Highcharts.chart('chartBencana', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Data Bencana'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series:  [{
        name: 'Gempa Bumi',
        data: {!! json_encode($dataGempa) !!}

    }, {
        name: 'Kebakaran',
        data: {!! json_encode($dataKebakaran) !!}
    }, {
        name: 'Banjir',
        data: {!! json_encode($dataBanjir) !!}
    }, {
        name: 'Tanah Longsor',
        data: {!! json_encode($dataLongsor) !!}
    }, {
        name: 'Tsunami',
        data: {!! json_encode($dataTsunami) !!}
    }]
});
</script>
@include ('homepages/footer')
  </body>
<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:07:54 GMT -->
</html>
