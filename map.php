<html>
<head>
  <style>
    html, body, #map-canvas {
      height: 400px;
      margin: 0px;
      padding: 0px
    }
    #markers_info .marker {
      height: 40px;
      cursor: pointer;
    }
  </style>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>    
  <script>
  /**
    jQuery events
  */
  $(document).ready(function() {
    // initiate Google maps
    initialize();
    // make a .hover event
    $('#markers_info .marker').hover(
      // mouse in
      function () {
        // first we need to know which <div class="marker"></div> we hovered
        var index = $('#markers_info .marker').index(this);
        markers[index].setIcon(highlightedIcon());
      },
      // mouse out
      function () {
        // first we need to know which <div class="marker"></div> we hovered
        var index = $('#markers_info .marker').index(this);
        markers[index].setIcon(normalIcon());
      }

    );
  });
  /**
    Google Maps stuff
  */
    var markerData = [   // the order of these markers must be the same as the <div class="marker"></div> elements
      {lat: 50.84498605, lng: 4.349977747, title: 'Manneken Pis'},
      {lat: 50.84848913, lng: 4.354053363, title: 'Jeanneke Pis'},
      {lat: 50.84673465, lng: 4.352466166, title: 'Grand Place'}
    ];
    var map;
    var markers = [];
    var mapOptions = {
      zoom: 15,
      center: new google.maps.LatLng(50.84673465,4.352466166),  // Brussels, Belgium
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    function initialize() {
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      for (var i=0; i<markerData.length; i++) {
        markers.push(
          new google.maps.Marker({
            position: new google.maps.LatLng(markerData[i].lat, markerData[i].lng),
            title: markerData[i].title,
            map: map,
            icon: normalIcon()
          })
        );
      }
    }
    // functions that return icons.  Make or find your own markers.
    function normalIcon() {
      return {
        url: 'http://1.bp.blogspot.com/_GZzKwf6g1o8/S6xwK6CSghI/AAAAAAAAA98/_iA3r4Ehclk/s1600/marker-green.png'
      };
    }
    function highlightedIcon() {
      return {
        url: 'http://steeplemedia.com/images/markers/markerGreen.png'
      };
    }
    //google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>
<body>
  <div id="map-canvas"></div>
  <div id="markers_info">
    <div class="marker">Manneken Pis,   50.84498605,4.349977747</div>
    <div class="marker">Jeanneke Pis,   50.84848913,4.354053363</div>
    <div class="marker">Grand Place,    50.84673465,4.352466166</div>
  </div>
</body>
</html>
