<script src="{{ asset('assets/assets/plugins/common/common.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/OwlCarousel/owl.carousel.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript">
    </script>
    <script src="{{ asset('assets/assets/plugins/counterup/waypoints.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/counterup/jquery.counterup.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&amp;sensor=true"
        type="a69da5dac325925ac4c4d885-text/javascript">
    </script>
    <script src="{{ asset('assets/assets/plugins/gmap3/gmap3.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/MorrisChart/raphael-min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/MorrisChart/morris.min.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>

    <script src="{{ asset('assets/main/js/scripts.js') }}" type="a69da5dac325925ac4c4d885-text/javascript"></script>
    <script type="a69da5dac325925ac4c4d885-text/javascript">
        // Ride chart
        Morris.Area({
            element: 'ride-chart',
            data: [{
                time: '2001',
                days: 0,
                nights: 0
            }, {
                time: '2002',
                days: 90,
                nights: 60
            }, {
                time: '2003',
                days: 40,
                nights: 80
            }, {
                time: '2004',
                days: 30,
                nights: 47
            }, {
                time: '2005',
                days: 150,
                nights: 40
            }, {
                time: '2006',
                days: 25,
                nights: 80
            }, {
                time: '2007',
                days: 10,
                nights: 10
            }],
            lineColors: ['#3B3B3B', '#F7BC00'],
            xkey: 'time',
            ykeys: ['days', 'nights'],
            // labels: ['Phone', 'nights', 'Mac'],
            pointSize: 0,
            lineWidth: 0,
            resize: true,
            fillOpacity: 0.8,
            behaveLikeLine: true,
            gridLineColor: 'transparent',
            hideHover: 'auto'

        });
    </script>
    <script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="a69da5dac325925ac4c4d885-|49" defer></script>