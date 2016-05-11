/*
 * SimpleModal OSX Style Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

jQuery(window).on("orientationchange",function(event){
  var maxHeight = $(document).height() - 50;
  //alert("Orientation changed, height: " + maxHeight);
  $('#osx-container').css('height', maxHeight);
});

jQuery(function ($) {
  var OSX = {
    container: null,
    init: function () {
      $("input.osx, a.osx").click(function (e) {
        e.preventDefault();  

      maxHeight = $(document).height() - 50;
      var maxWidth = $(document).width();
      var docHeight = $(document).height();

        $("#osx-modal-content").modal({
          overlayId: 'osx-overlay',
          containerId: 'osx-container',
          closeHTML: null,
          minHeight: 80,
          opacity: 65, 
          position: ['0',],
          onOpen: OSX.open,
          onClose: OSX.close,
          overlayClose: false,
          minWidth: maxWidth,
          //maxWidth: 500,
          //height: 300,
          //minHeight: 100,
          //maxHeight: 300,
          autoresize: true
        });
      });
    },
    open: function (d) {
      var self = this;
      self.container = d.container[0];
      d.overlay.fadeIn('slow', function () {
        $("#osx-modal-content", self.container).show();
        var title = $("#osx-modal-title", self.container);
        title.show();
        d.container.slideDown('slow', function () {
          setTimeout(function () {
            var h = $("#osx-modal-data", self.container).height() + title.height() + 20; // padding
            var h = maxHeight;
            d.container.animate(
              {height: h}, 
              200,
              function () {
                $("div.close", self.container).show();
                $("#osx-modal-data", self.container).show();
              }
            );
          }, 300);
        });
      })
    },
    close: function (d) {
      var self = this; // this = SimpleModal object
      d.container.animate(
        {top:"-" + (d.container.height() + 20)},
        500,
        function () {
          self.close(); // or $.modal.close();
        }
      );
    }
  };

  OSX.init();

});
