<?php
include_once 'header2.php';
include 'locations_model.php';
include("db.php");if(isset($_POST['submit'])){	$home = $_POST['homeName'];}
//get_unconfirmed_locations();exit;
?>


    

    <div class="container">
    <h3>ค้นหาตำแหน่งบ้านของคุณ</h3> <br>
    
    
        <!-- <form action="" id="signupForm"> -->
           <!-- <label for="name">ชื่อบ้านของคุณ </label>
             <input type="text" id="name" name="name" placeholder="ex...บ้านโครงการหลวง"> -->
            <form action="user-map.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ชื่อบ้านของคุณ</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="homeName">
                        <?php						if(!empty($home)){						echo "<option value=\"$home\">$home<option>";						}
                        $sql = "SELECT * FROM testhome"; 
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['NAME_HOME'];?>"><?php echo $row['NAME_HOME'];?></option>
                            <?php
                        }
                        ?> 
                    </select>
                </div>


                
           
         

           <!-- <input type="submit" value="ค้นหา" > -->
           <button  type="submit" name = "submit" class="btn btn-info">ตกลง</button>
		       <?php /*
            if (isset($_POST['submit'])) { 
                $home = $_POST['homeName'];
                $sql2 = "SELECT * FROM testhome WHERE NAME_HOME = '$home'"; 
                $result2 = mysqli_query($con,$sql2);
                $row2 = mysqli_fetch_array($result2);
				$lat$=row2['LATI_HOME'].'<br>';
               $long=$row2['LONG_HOME'];
            }*/
            ?>
        </form>  <br>
    </div>
    <div>
    </div>

  
        <br>
    </center>



    <div class="geocoder">
        <div id="geocoder" ></div>
    </div>

    <!-- แสดงแผนที่ประเทศไทย  -->
    <div id="map"></div>

<br>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <style>
    </style>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <script>

    
   
    
    
    var map = L.map("map").fitBounds([[13, 101.5], 5]);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);



    ////// ตัวอย่าง ให้แผนที่โชว์ เมื่อเลือกสถานที่ /////

    //  โชว์ ไอคอนรูปบ้านเมื่อคลิกบ้านที่เลือก //
    var icon = L.divIcon({
    className: 'custom-div-icon',
    html: "<div style='background-color:#c30b82;' class='marker-pin'></div><i class='material-icons'>weekend</i>",
    iconSize: [30, 42],
    iconAnchor: [15, 42]
    });

<?php 
            if (!empty($home)) { 
                //$home = $_POST['homeName'];
                $sql2 = "SELECT * FROM testhome WHERE NAME_HOME = '$home'"; 
                $result2 = mysqli_query($con,$sql2);
                $row2 = mysqli_fetch_array($result2);
				$lat=$row2['LATI_HOME'];
               $long=$row2['LONG_HOME'];

            ?>

    var marker = L.marker([<?php echo $lat;?>, <?php echo $long;?>], {
    icon: icon
    }).addTo(map);		$(document).ready(function(){		pintomap(<?php echo $lat;?>,<?php echo $long;?>,"<?php echo $row2['NAME_HOME'];?>");	});
<?php
}
?>

icon = L.divIcon({
    className: 'custom-div-icon',
    html: "<div style='background-color:#4838cc;' class='marker-pin'></div><i class='fa fa-camera awesome'>",
    iconSize: [30, 42],
    iconAnchor: [15, 42]
});


// เรียกใช้งาน ฟีงก์ชั่น เมื่อเลือกสถานที่ //

// set onclick show location of place 1 //

var layerGroup = L.layerGroup().addTo(map);function pintomap(la,lo,txt){	layerGroup.clearLayers();	map.closePopup();    marker = L.marker([la,lo]).addTo(layerGroup);    marker.bindPopup(txt).openPopup();}


</script>



<?php
include_once 'footer.php';

?>