<html>
<body>
 <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtS_6mlBUfmxGrmePDkeg3iRS0cgVHUXk">
        </script>
<script>
var map;
function initmap(){
    map = new google.maps.Map(
        document.getElementById('mapah'), 
        {
            center: new google.maps.LatLng(-7.5559727801107925, 110.76683163642883), 
            zoom:7, 
            mapTypeId:google.maps.MapTypeId.ROADMAP
        });
}
function polyLine(){
    var coor = [
        [110.76373100280762,-7.557174609854564], [110.76588749885559,-7.560035589326184], [110.76622009277344,-7.560227029655004], 
        [110.76646685600281,-7.560322749787575], [110.76708912849426,-7.560524825553296], [110.76708912849426,-7.560524825553296], 
        [110.76708912849426,-7.560524825553296], [110.76780796051025,-7.560684358985754], [110.76817274093628,-7.560684358985754], 
        [110.76831221580505,-7.560684358985754], [110.76851606369019,-7.560726901224452], [110.76860189437866,-7.560737536783474], 
        [110.7686448097229,-7.560769443458951], [110.7686448097229,-7.560769443458951], [110.7686448097229,-7.560769443458951], 
        [110.7686448097229,-7.560769443458951], [110.7686448097229,-7.560780079016918], [110.76858043670654,-7.560780079016918]
    ];
    var path = [];
    for(i=0;i<coor.length;i++){
        path.push(new google.maps.LatLng(coor[i][1], coor[i][0]));
    }
    var polyline = new google.maps.Polyline({
        path:path,
        strokeWeight:5,
        stokeColor:'#DDD',
        strokeOpacity:0.8
    });
    polyline.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initmap);
</script>
<div id="mapah" style="width:100%;height:100%"></div>
</body>
</html>