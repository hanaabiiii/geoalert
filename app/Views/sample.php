<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js%22%3E"></script>
</head>
<body>
    <style>
        body{
            position: relative;
            width: 1440px;
            height: 1024px;

            background: rgba(255, 232, 194, 0.2);
            border-radius: 35px;
        }

        .rectangle-div{
            position: absolute;
            width: 494px;
            height: 343px;
            left: 473px;
            top: 539px;

            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
        }
        #map {
            position: relative;
        }

        .createbtn {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0px;
            gap: 10px;

            position: absolute;
            width: 252px;
            height: 55px;
            left: 594px;
            top: calc(50% - 55px/2 + 220.5px);

            background: #D63533;
            border-radius: 10px;

            /* text */
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 30px;
            /* identical to box height */

            letter-spacing: 0.1em;

            /* white */

            color: #FFFFFF;
            text-align: center;


            /* Inside auto layout */

            flex: none;
            order: 0;
            flex-grow: 0;
        }


    </style>

<div id="map" style="width: 100%; height: 100%;">

</div>
 <script src="https://www.openlayers.org/api/OpenLayers.js"></script>
<script>
    var map = new OpenLayers.Map("map");
    var mapnik = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);
    var lonLat = new OpenLayers.LonLat( 121.080886, 14.331593)
        .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
        );
    var zoom = 12;
    map.setCenter(lonLat, zoom);
</script>

    <!-- <div class="rectangle-div">

        <button class="createbtn" type="submit">
            Create Account
        </button>

    </div>  -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>