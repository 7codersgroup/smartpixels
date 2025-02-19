(function ($) {
  "use strict";

  var $window = $(window);

  // :: 1.0 Masonary Gallery Active Code


  var proCata = $(".amado-pro-catagory");
  var singleProCata = ".single-products-catagory";

  if ($.fn.imagesLoaded) {
    proCata.imagesLoaded(function () {
      proCata.isotope({
          itemSelector: singleProCata,
          percentPosition: true,
          masonry: {
              columnWidth: singleProCata,
          },
      });
    });
  }


    // :: 9.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 10.0 PreventDefault a Click
    $("a[href='#']").on("click", function ($) {
        $.preventDefault();
    });
})(jQuery);

/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
  if ("[object Object]" === Object.prototype.toString.call(t))
    for (var c in t)
      Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
  else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function (hamburger) {
    hamburger.addEventListener(
      "click",
      function () {
        this.classList.toggle("is-active");
      },
      false
    );
  });
}

$("#button-addon2").click(function () {
  switch ($("#password").attr("type")) {
    case "password":
      // code block
      $("#password").attr("type", "text");
      break;
    case "text":
      // code block
      $("#password").attr("type", "password");
      break;
    default:
      // code block
  }
});

$(".custom-file-input").on("change", function () {
  let fileName = $(this).val().split("\\").pop();
  $(this).next(".custom-file-label").addClass("selected").html(fileName);
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

if ($('#seo-tags').length) {
    $('#seo-tags').selectize({
        persist: false,
        createOnBlur: true,
        create: true
    });
}

if ($('#magic_link').length) {
    $('#magic_link').click(function () {
        $('#normal_auth').hide('slow');
        $('#magic_link_wrapper').show('slow');
    });
}

if ($('#magic_link_return').length) {
    $('#magic_link_return').click(function () {
        $('#normal_auth').show('slow');
        $('#magic_link_wrapper').hide('slow');
    });
}

if ($('#bank_info').length) {
    $('#bank_info').click(function () {

        $("html, body").animate(
            {scrollTop: "600"}, 3000);

        $('#update_bank_info').toggle('slow');
    });
}

$(function () {
    if ($("#country").length) {
        $("#country").countrySelect({
            initialCountry: 'auto',
            geoIpLookup: function (callback) {
                $.get('http://ipinfo.io?token=47e8ba0b4941cf', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            }
        });
    }

});


var input = document.querySelector("#phone-number");
window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function (callback) {
        $.get('http://ipinfo.io?token=47e8ba0b4941cf', function () {
        }, "jsonp").always(function (resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
        });
    },
    utilsScript: "js/utils.js" // just for formatting/placeholders etc
});
