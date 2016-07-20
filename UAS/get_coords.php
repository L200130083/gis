<html>
<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
<script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtS_6mlBUfmxGrmePDkeg3iRS0cgVHUXk&sensor=false">
</script>
<script>
var map, inf = null;
function init(){
    map = new google.maps.Map(
        document.getElementById('m'),
        {
            center:new google.maps.LatLng(-7.5559727801107925, 110.76659560203552),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        }
    );
    
    google.maps.event.addDomListener(map, 'click', function(e){
        inf == null || inf.close();
        inf = new google.maps.InfoWindow({
            content:"lat: "+e.latLng.lat()+' | lng: '+e.latLng.lng(),
            position:e.latLng,
            map:map
        });
        $.post('saveCoord.php', 'a=b&b=d').done(function(e){console.log(JSON.parse(e))});
    }); 
}

google.maps.event.addDomListener(window, 'load', init);

</script>
<div id="m" style="width:100%;height:100%"></div>
</html>