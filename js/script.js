$(document).ready(function() {
  $("#myCarousel .carousel-item").first().addClass("active");
  $("#myCarousel2 .carousel-item").first().addClass("active");

  $("#myCarousel").on("slide.bs.carousel", function(e) {
    //alert("Button clicked");
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $("#myCarousel .carousel-item").length;
    //alert(totalItems);

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $("#myCarousel .carousel-item")
            .eq(i)
            .appendTo("#myCarousel .carousel-inner");
            //alert("Appended");
        } else {
          $("#myCarousel .carousel-item")
            .eq(0)
            .appendTo($(this).find("#myCarousel .carousel-inner"));
        }
      }
    }
  });
  $("#myCarousel2").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $("#myCarousel2 .carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $("#myCarousel2 .carousel-item")
            .eq(i)
            .appendTo("#myCarousel2 .carousel-inner");
            //alert("Appended");
        } else {
          $("#myCarousel2 .carousel-item")
            .eq(0)
            .appendTo($(this).find("#myCarousel2 .carousel-inner"));
        }
      }
    }
  });
});