<!DOCTYPE html>
<html>
    <head>
        <meta name="charset" content="utf-8" />
        <title>DMX CONTROLLER</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <!-- obsah hlavicky -->
        </header>

        <aside class="side">
            <!-- obsah panelu -->
        </aside>

        <?php $data = array( 31, 63, 95, 127, 159, 191, 223, 255 ); ?>

        <div class="sliders-container">
            <?php for ( $i = 0; $i < 8; $i++ ) : ?>
                <div class="slider-container slider-container-<?php echo $i; ?>">
                    <input type="range" min="0" max="255" value="<?php echo ( isset( $data ) && !empty( $data[$i] ) ) ? 255 - $data[$i] : '255'; ?>" step="1" class="slider" id="range-<?php echo $i; ?>" />
                </div>
            <?php endfor; ?>
        </div>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $( window ).on( "load change resize", function() {
                var height = $( ".sliders-container" ).height();
                $( ".slider" ).width( height - 100 );
            });

            $( ".slider" ).on( "input", function() {
                var id = $( this ).attr( "id" );
                var value = 255 - $( this ).val();
                console.log( id + ": " + value );
            });
        </script>
    </body>
</html>
