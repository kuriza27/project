<html>

    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">

        <title>Sample</title>

        <style>
            #backend {
                display: none;
            }
            #frontend {
                background-color: #000000;
                border: 1px solid #AAAAAA;
                border-radius: 5px;
                overflow: hidden;
                text-align: center;
                height: 54px;
                width: 100%;
            }
            .solid, .segmented, .swirl {
                display: none;
            }
        </style>

    </head>

    <body>

        <span id="scripts">
            
            <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
            <script type="text/javascript" src="assets/js/canvg.js"></script>
            <script type="text/javascript" src="assets/js/stackblur.js"></script>
            <script type="text/javascript">

                var $_GET = [],
                    $_URL = [],
                    $_COLOR = [];

                $( document ).ready( function(e) {

                    // Get all data from URL
                    $_URL = location.search.replace("?", "").split("&");

                    for (var index = 0; index < $_URL.length; index++) {
                        var value = $_URL[index].split("=");
                        $_GET[value[0]] = value[1];
                    }

                    if(typeof $_GET["color"] !== "undefined" && typeof $_GET["style"] !== "undefined") {

                        // Place colors on an array, for future use
                        $_COLOR = $_GET["color"].split(",");

                        if($_GET["style"] === "swirl") {

                            // Remove SVG elements not used
                            $(".solid").css("display", "none");
                            $(".segmented").css("display", "none");
							$(".glow").css("display", "none");

                            // Set COLORS
                            $("#swirl_1").css( "fill", "#" + $_COLOR[0]);

                            if( $_COLOR.length < 2 ) {
                                $("#swirl_2").css("display", "none");
                            } else {
                                $("#swirl_2").css( "fill", "#" + $_COLOR[1] );
                            }

                            if( $_COLOR.length < 3 ) {
                                $("#swirl_3").css("display", "none");
                            } else {
                                $("#swirl_3").css( "fill", "#" + $_COLOR[2] );
                            }

                            if( $_COLOR.length < 4 ) {
                                $("#swirl_4").css("display", "none");
                            } else {
                                $("#swirl_4").css( "fill", "#" + $_COLOR[3] );
                            }

                            // Render SVG into Canvas
                            render($("#svg_main").parent().html().trim(), "output_canvas", "output_image", "preview");

                        } else if ($_GET["style"] === "segmented") {

                            // Remove SVG elements not used
                            $(".solid").remove();
                            $(".swirl").remove();
							$(".glow").css("display", "none");
							
                            // Set colors
                            if($_COLOR.length === 1) { // If 1 colors

                                $("#segmented_6").remove();
                                $("#segmented_5").remove();
                                $("#segmented_4").remove();
                                $("#segmented_3").remove();
                                $("#segmented_2").remove();

                                $("#segmented_1_1").css( "fill", "#" + $_COLOR[0] );

                            } else if($_COLOR.length === 2) { // If 2 colors

                                $("#segmented_6").remove();
                                $("#segmented_5").remove();
                                $("#segmented_4").remove();
                                $("#segmented_3").remove();
                                $("#segmented_1").remove();

                                $("#segmented_2_2").css( "fill", "#" + $_COLOR[1] );
                                $("#segmented_2_1").css( "fill", "#" + $_COLOR[0] );

                            } else if($_COLOR.length === 3) { // If 3 colors

                                $("#segmented_6").remove();
                                $("#segmented_5").remove();
                                $("#segmented_4").remove();
                                $("#segmented_2").remove();
                                $("#segmented_1").remove();

                                $("#segmented_3_3").css( "fill", "#" + $_COLOR[1]);
                                $("#segmented_3_2").css( "fill", "#" + $_COLOR[2]);
                                $("#segmented_3_1").css( "fill", "#" + $_COLOR[0]);

                            } else if($_COLOR.length === 4) { // If 4 colors

                                $("#segmented_6").remove();
                                $("#segmented_5").remove();
                                $("#segmented_3").remove();
                                $("#segmented_2").remove();
                                $("#segmented_1").remove();

                                $("#segmented_4_4").css( "fill", "#" + $_COLOR[2]);
                                $("#segmented_4_3").css( "fill", "#" + $_COLOR[1]);
                                $("#segmented_4_2").css( "fill", "#" + $_COLOR[3]);
                                $("#segmented_4_1").css( "fill", "#" + $_COLOR[0]);

                            } else if($_COLOR.length === 5) { // If 5 colors

                                $("#segmented_6").remove();
                                $("#segmented_4").remove();
                                $("#segmented_3").remove();
                                $("#segmented_2").remove();
                                $("#segmented_1").remove();

                                $("#segmented_5_5").css( "fill", "#" + $_COLOR[2]);
                                $("#segmented_5_4").css( "fill", "#" + $_COLOR[3]);
                                $("#segmented_5_3").css( "fill", "#" + $_COLOR[1]);
                                $("#segmented_5_2").css( "fill", "#" + $_COLOR[4]);
                                $("#segmented_5_1").css( "fill", "#" + $_COLOR[0]);

                            } else if($_COLOR.length >= 6) { // If 6 colors

                                $("#segmented_5").remove();
                                $("#segmented_4").remove();
                                $("#segmented_3").remove();
                                $("#segmented_2").remove();
                                $("#segmented_1").remove();

                                $("#segmented_6_6").css( "fill", "#" + $_COLOR[3]);
                                $("#segmented_6_5").css( "fill", "#" + $_COLOR[2]);
                                $("#segmented_6_4").css( "fill", "#" + $_COLOR[4]);
                                $("#segmented_6_3").css( "fill", "#" + $_COLOR[1]);
                                $("#segmented_6_2").css( "fill", "#" + $_COLOR[5]);
                                $("#segmented_6_1").css( "fill", "#" + $_COLOR[0]);

                            }

                            // Render SVG into Canvas
                            render($("#svg_main").parent().html().trim(), "output_canvas", "output_image", "preview");

                        } else if($_GET["style"] === "solid") {

                            // Remove SVG elements not used
                            $(".segmented").remove();
                            $(".swirl").remove();
							$(".glow").css("display", "none");
							
                            // Set color
                            $(".solid").css( "fill", "#" + $_COLOR[0]);

                            // Render SVG into Canvas
                            render($("#svg_main").parent().html().trim(), "output_canvas", "output_image", "preview");

                        }
						
						if($_GET["style"] === "glow") {

                            // Remove SVG elements not used
                            $(".segmented").remove();
                            $(".swirl").remove();
							 $(".solid").remove();

                            // Set color
                            $(".glow").css( "fill", "#" + $_COLOR[0]);

                            // Render SVG into Canvas
                            render($("#svg_main").parent().html().trim(), "output_canvas", "output_image", "preview");

                        }

                    } else {

                        // Remove everything!!!
                        $("html").html("Invalid data.");

                    }

                    // Also, remove scripts. Processing is over.
                    $("#scripts").remove();

                });

                /**
                 *  SVG to canvas to image render function
                 */
                function render(svg, canvas, image, preview) {

                    // Get needed elements
                    var can = document.getElementById(canvas);
                    var img = document.getElementById(image);

                    // Convert SVG to canvas using canvg.js
                    canvg(can, svg);

                    // Set converted svg as image source
                    img.setAttribute("src", can.toDataURL());

                    // Apply blur effect on image
                    setTimeout(function() {
                        stackBlurImage(image, "canvas", 50);
                        $("#"+preview).attr("src", $("#canvas")[0].toDataURL()).css("width", "100%");
                        $("#"+image).remove();
                    }, 1000);
                }

            </script>

        </span>

        <div id="backend">

            <canvas id="output_canvas" width="950" height="54"></canvas>

            <img id="output_image" src="" alt="preview" width="950" height="54"/>

            <canvas id="canvas"></canvas>

            <div id="svg_container">

                <svg id="svg_main" version="1.1" x="0px" y="0px"  width="950px" height="54px" viewBox="0 0 950 54" enable-background="new 0 0 950 54">

                    <rect id="solid" class="solid" x="0" width="950" height="54"/>

                    <g id="segmented_1" class="segmented">
                        <rect id="segmented_1_1" width="950" height="54"/>
                    </g>

                    <g id="segmented_2" class="segmented">
                        <rect id="segmented_2_1" width="950" height="54"/>
                        <rect id="segmented_2_2" x="475" width="475" height="54"/>
                    </g>

                    <g id="segmented_3" class="segmented">
                        <rect id="segmented_3_1" width="950" height="54"/>
                        <rect id="segmented_3_2" x="475" width="475" height="54"/>
                        <rect id="segmented_3_3" x="316.5" width="317" height="54"/>
                    </g>

                    <g id="segmented_4" class="segmented">
                        <rect id="segmented_4_1" width="950" height="54"/>
                        <rect id="segmented_4_2" x="475" width="475" height="54"/>
                        <rect id="segmented_4_3" x="237.5" width="475" height="54"/>
                        <rect id="segmented_4_4" x="475" width="237.5" height="54"/>
                    </g>

                    <g id="segmented_5" class="segmented">
                        <rect id="segmented_5_1" width="950" height="54"/>
                        <rect id="segmented_5_2" x="475" width="475" height="54"/>
                        <rect id="segmented_5_3" x="190" width="570" height="54"/>
                        <rect id="segmented_5_4" x="475" width="285" height="54"/>
                        <rect id="segmented_5_5" x="380" width="190" height="54"/>
                    </g>

                    <g id="segmented_6" class="segmented">
                        <rect id="segmented_6_1" width="950" height="54"/>
                        <rect id="segmented_6_2" x="475" width="475" height="54"/>
                        <rect id="segmented_6_3" x="158.333" width="633.333" height="54"/>
                        <rect id="segmented_6_4" x="475" width="316.667" height="54"/>
                        <rect id="segmented_6_5" x="316.5" width="317" height="54"/>
                        <rect id="segmented_6_6" x="474.917" width="158.417" height="54"/>
                    </g>

                    <rect id="swirl_1" class="swirl" x="0" width="950" height="54"/>

                    <g id="swirl_2" class="swirl">
                        <path d="M821.32,15.432c-22.764-6.232-42.893-6.665-56.941,3.508c-8.838,6.403-15.678,20.933-11.594,35.061h126.074 C865.625,35,843.221,21.427,821.32,15.432z"/>
                        <path d="M710.75,40.375c7.75-11.375,7.908-17.06,6.75-22c-2.75-11.75-22.072-8.712-37.486-4.142 C662.25,19.5,650.391,27.066,616.5,26c-14.504-0.457-17.25-10.75-10.5-15.625c6.014-4.344,11.125-3.75,12.227-10.375H486.883 c5.242,8,26.242,6.625,48.93,15.291c8.152,3.114,22.648,8.381,33.074,17.2C577.016,39.367,579.125,47.5,591.07,54h107.139 C702.414,50.322,707.453,45.215,710.75,40.375z"/>
                        <path d="M402.292,33.986c-5.068-7.625-19.074-10.141-35.131-9.628c-19.311,0.614-51.344,14.488-53.475,22.79 c-0.617,2.411,0.049,5.352,1.375,6.852h75.721C404.75,48.375,405.375,38.625,402.292,33.986z"/>
                        <path d="M203.244,28.44c-7.883-4.848-20.478-12.271-39.886-18.991c-12.416-4.3-25.467-7.45-36.251-9.449l0,0H75.753 l0,0c-4.548,1.266-8.651,3.07-11.622,5.639c-9.745,8.426-10.864,18.627-21.306,23.794C32.833,34.377,5.771,43.483,9.217,54H190 c4.482-0.771,10.514-1.557,13.5-2.333C216.519,48.263,217.391,37.137,203.244,28.44z"/>
                    </g>

                    <g id="swirl_3" class="swirl">
                        <path d="M286,9c5.694,7.192,1.666,16.878-5.051,23.436c-8.963,8.75-31.337,10.616-47.46,9.209 c-21.424-1.869-32.378-6.284-62.447-14.64c-18.237-5.066-24.705-5.198-28.055-0.947c-4.394,5.575-0.874,16.426,5.265,22.857 c1.729,1.818,3.5,3.016,6.442,5.085h178.631c9.426-2.093,14.973-14.755,18.475-19.344c13.275-17.396,36.707-21.938,45.618-23.118 c26.557-3.515,55.463,1.022,69.104,2.16C490.77,15.722,567.568,11.94,589.117,0H217.75c6,4.5,25.263,8.558,41.5,5 C274.243,1.715,281.25,3,286,9z"/>
                        <path d="M707.432,24.648c-27.18-12.132-62.553-7.339-85.057,2.949c-18.938,8.655-34.623,21.306-25.922,26.401 c0.002,0.138,140.154,0.002,140.154,0.002C737.426,42.572,722.125,31.207,707.432,24.648z"/>
                        <path d="M950,0h-29.936c-22.814,5.5-34.584,13.981-42.939,22.5c-12.875,13.125-11.279,27.5,3.5,31.5 c0.178,0.034,69.376,0,69.376,0L950,0z"/>
                        <path d="M113.606,14.85C98.694,0,72.174,2.455,62.278,7.978C50.059,14.796,41.695,18.733,34.57,18.534 c-8.708-0.246-11.215-3.93-22.43-6.139c-5.376-1.06-12.139,0.961-12.139,0.961V54l105.491,0.004 C120.577,45.577,125.534,26.733,113.606,14.85z"/>
                    </g>

                    <g id="swirl_4" class="swirl">
                        <path d="M811.645,28.504c-4.842-3.15-15.572-5.795-33.873-2.536c-19.16,3.413-27.773,6.499-47.891,14.124 c-26.445,10.023-52.125,6.079-56.057,4.348c-14.799-6.521-12.75-26.599,7.658-35.694c15.297-6.817,39.896-1.771,42.023-8.744 H557.537c1.479,4.818,7.684,10.616,19.09,17.187c12.096,6.968,35.982,14.473,50.063,17.39c8.408,1.741,13.549,11.221,1.82,19.486 l179.047-0.063C817.971,49.637,822.52,35.583,811.645,28.504z"/>
                        <path d="M338.754,27.603c-23.164-12.315-60.355-13.748-80.071-3.309c-12.374,6.554-23.521,15.845-23.521,29.705 h134.971C363.727,45.802,354.729,36.096,338.754,27.603z"/>
                        <path d="M33.467,0H0l0.001,54h37.408c8.46-3.039,15.514-12.604,17.069-20.456C57.496,18.306,46.677,4.253,33.467,0z"/>
                        <path d="M950,19.304C943.232,9.9,924.541,6.087,910.336,10.5c-14.203,4.412-25.029,14.743-24.201,26.273 c0.488,6.794,8.611,14.312,14.783,17.227h49.083L950,19.304z"/>
                    </g>
					
					<rect id="glow" class="glow" x="0" width="950" height="54"/>
					
                </svg>

            </div>

			<div id="frontend">
				<img id="preview" src="assets/images/spinner_color.gif" alt="preview" style="height: 100%;"/>
			</div>

        </div>

    </body>

</html>