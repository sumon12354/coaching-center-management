$( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
 
      // Run the effect
      $( "#effect" ).show( selectedEffect, options, 500, callback );
    };
 
    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
      }, 1500 );
    };
 
    // Set effect from select menu value
    $( "#button" ).on( "click", function() {
      runEffect();
    });
 
    $( "#effect" ).hide();
  } );
  

  $(document).ready(function(){
    $("#button1").click(function(){
      $("#img1").toggle();
    });
  });
  $(document).ready(function(){
    $("#button2").click(function(){
      $("#img2").toggle();
    });
  });
  $(document).ready(function(){
    $("#button3").click(function(){
      $("#img3").toggle();
    });
  });
  $(document).ready(function(){
    $("#button4").click(function(){
      $("#img4").toggle();
    });
  });
  $(document).ready(function(){
    $("#button5").click(function(){
      $("#img5").toggle();
    });
  });

  $( function() {
    $( "#draggable" ).draggable();
  } );