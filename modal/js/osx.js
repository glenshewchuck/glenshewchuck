/*
 * SimpleModal OSX Style Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */
var $ = jQuery.noConflict();

/**
 * Parse out an object created with jQuery.param (used in messaging here).
 * 
 * @param {type} param
 * @param {type} params
 * @returns {GetParameterValue.urlparam}
 */
function getParameterValue(param, params) {
  var url = params.slice(params.indexOf('?') + 1).split('&');
  for (var i = 0; i < url.length; i++) {
    var urlparam = url[i].split('=');
    if (urlparam[0] == param) {
      return urlparam[1];
    }
  }
}


/**
 * Get the protocol and domain from a string.
 * 
 * @param url
 * @returns string of domain
 */
function get_child_domain(url) {
  var m = url.match(/^http.*:\/\/[^/]+/);
  return m ? m[0] : null;
}


function setGlobalEmailAddress(uri) {
  var emailStart = uri.indexOf('email=') + 6;
  var uri2 = uri.substring(emailStart);
  var emailEnd = uri2.indexOf('&');
  if (emailEnd === -1) {
    var email = uri2;
  } else {
    var email = uri2.substring(0, emailEnd);
    earlyiqUserEmail = email;
  }
}


/**
 * Start the spinner (loader) when calling the modal cert solution.
 */
function startSpinner() {
  var opts = {
    lines: 13, // The number of lines to draw
    length: 20, // The length of each line
    width: 9, // The line thickness
    radius: 35, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#323232', // #rgb or #rrggbb or array of colors
    speed: 0.8, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: true, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: '50%', // Top position relative to parent
    left: '50%' // Left position relative to parent
  };
  var spinner = new Spinner(opts).spin();
  $('#osx-loading').html(spinner.el);
}


/**
 * Stop the spinner (loader) when calling the modal cert solution.
 */
function stopSpinner() {
  $('#osx-loading').html('<div></div>');
}

jQuery(function ($) {
  // Need to get the domain the iframe that we expect to receive a message
  // from.  A personal in Drupal can put a button/link that issues a
  // $.postMessage that this will recieve.  
  // 

  var data_src = $('#getstarted').attr('data-iframe-src');
  //child_domain = get_child_domain(data_src);
  child_domain = '';

/**
  * $.receiveMessage will get messages from EIQ via postMessage in the OSX object.
  * $.receiveMessage will then call this function.  Note that the postMessage can
  * send either data of string type or jQuery.param type. The only string type
  * we expect is to stop the spinner.
  * 
  * Two global javascript variables that other scripts can access: EIQcommand, EIQmessage.
  */
  function actOnMessage(e) {
    returnedValue = e.data;
    EIQcommand = '';
    EIQmessage = '';
    if (typeof returnedValue === "undefined") {
      EIQcommand = 'close';
      EIQmessage = 'undefined';
      var logoutUrl = child_domain + '/logoutbyemail/' + earlyiqUserEmail;
      $.modal.close();
      return;
    } else if (typeof returnedValue === "string") {
      if (returnedValue === "stopSpinner") {
        stopSpinner();
        return;
      }
      // It's not stopping spinner so we assume that an object formated with jQuery.param is sent.
      EIQcommand = getParameterValue('command', returnedValue);
      EIQmessage = getParameterValue('message', returnedValue);      // The returned value can either be a string or a jQuery.param object with
      switch (EIQcommand) {
        case 'stopSpinner':
          stopSpinner();
          break;
        case 'close':
          var logoutUrl = child_domain + '/logoutbyemail/' + earlyiqUserEmail;
          $.modal.close();
          break;
        default:
          var logoutUrl = child_domain + '/logoutbyemail/' + earlyiqUserEmail;
          $.modal.close();
          break;
      }
    } else {
      EIQcommand = 'close';
      EIQmessage = 'undefined';
      var logoutUrl = child_domain + '/logoutbyemail/' + earlyiqUserEmail;
      $.modal.close();
    }
  };

	var OSX = {
		container: null,
		init: function () {
      $( "body" ).on( "click", "input.osx, a.osx", function(e) {
			//$("input.osx, a.osx").click(function (e) {
      var md = new MobileDetect(window.navigator.userAgent);
      //alert(md.mobile());
			e.preventDefault();
      // Show spinner for loading.
      startSpinner();
      // Just in case the stop spinner doesn't run.
      setTimeout(stopSpinner, 20000);
      // For cross domain closing of the modal window from within Drupal.
      var parent_domain = window.location.protocol + '//' + window.location.host;
      if (parent_domain.length > 0) {
        parent_string = "&parent_domain=" + encodeURI(parent_domain);
      } else {
        parent_string = "";
      }
      // Get the target and height and load it.
      data_src = $(this).attr('data-iframe-src');
      setGlobalEmailAddress(data_src);
      // Now we may want to override requested size of modal if it's a small
      // device.
      max_data_height = '750px';
      var maxHeight = $(document).height() - 60;
      //var maxHeight = $(window).height() - 50;
      var maxWidth = $(document).width();
      data_height = $(this).attr('data-iframe-height');
      if (data_height > maxHeight) {
        data_height = maxHeight;
      }
      command = $(this).attr('data-command');
      var modalWidth = Math.round(maxWidth * .90);

      iframeHeight = maxHeight + 'px';

			$("#osx-modal-content").modal({
				overlayId: 'osx-overlay',
				containerId: 'osx-container',
        //autoResize: true,
        closeHTML: null,
				minHeight: maxHeight,
        minWidth: maxWidth,
				//maxWidth: maxWidth,
        
				opacity: 65,
				position: ['0',],
				overlayClose: false,
				onOpen: OSX.open,
				onClose: OSX.close
				});
			});
		},
		open: function (d) {
			var self = this;
			self.container = d.container[0];
      // Set child domain based on this link.
      child_domain = get_child_domain(data_src);
      // Set up receiveMessage for this child domain.
      $.receiveMessage(function(e) { actOnMessage(e) }, child_domain);
			d.overlay.fadeIn('slow', function () {
      $('#osx-modal-data').html('<iframe id="earlyiqframe" class="earlyiqframe" src="' + data_src + parent_string +
        '" seamless style="overflow:hidden;height:' + iframeHeight + ';width:100%" max-height="' + iframeHeight + '" width="100%"></iframe>');
				$("#osx-modal-content", self.container).show();
				var title = $("#osx-modal-title", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data", self.container).height()
							+ title.height()
							+ 20; // padding
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
			});
		},
		close: function (d) {
			var self = this; // this = SimpleModal object
			d.container.animate(
				{top:"-" + (d.container.height() + 20)},
				500,
				function () {
          var logoutUrl = child_domain + '/logoutbyemail/' + earlyiqUserEmail;
          $.post(logoutUrl);
          $.modal.close(); // or self.close();
          if (typeof EIQcommand === "undefined" || EIQcommand === "") {
            EIQcommand = 'close';
          }
          if (typeof EIQmessage === "undefined" || EIQmessage === "") {
            EIQmessage = 'unknown';
          }
          // If the initial call had data-command=<global function name>. Then
          // try and execute it.
          if (typeof command === 'string') {
            window[command]();
          }
				}
			);
		}
	};

	OSX.init();

});
