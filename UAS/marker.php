<html>
<script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtS_6mlBUfmxGrmePDkeg3iRS0cgVHUXk&sensor=false">
</script>
<script>
var map;
function init(){
    map = new google.maps.Map(
        document.getElementById('m'),
        {
            center:new google.maps.LatLng(-7.5559727801107925, 110.76659560203552),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        }
    );
}
function marker(){
    new google.maps.Marker({
        position:map.getCenter(),
        map:map,
        icon:'http://www.w3schools.com/images/up.gif',
        title:new Date()+''
    });
}
google.maps.event.addDomListener(window, 'load', init);
</script>
<div id="m" style="width:100%;height:100%"></div>
</html>