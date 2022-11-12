window.onload = function () {
  if (window.jQuery) {
    // jQuery is loaded
    alert("Yeah!");
  } else {
    // jQuery is not loaded
    alert("Doesn't Work");
  }
};

import $ from "jquery";
//const $ = require("jquery");
import strip_tags from "./helpers/strip-tags";

wp.customize("blogname", (value) => {
  value.bind((to) => {
    $(".header").html(to);
  });
});

wp.customize("hs21_display_author_info", (value) => {
  value.bind((to) => {
    if (to) {
      $(".post-author").show();
    } else {
      $(".post-author").hide();
    }
  });
});

wp.customize("hs21_accent_colour", (value) => {
  value.bind((to) => {
    let inline_css = ``;
    let inline_css_obj = hs21["inline-css"];
    for (let selector in inline_css_obj) {
      inline_css += `${selector} {`;
      for (let prop in inline_css_obj[selector]) {
        let val = inline_css_obj[selector][prop];
        inline_css += `${prop}: ${wp.customize(val).get()}`;
      }
      inline_css += `}`;
    }
    $("#hs21-stylesheet-inline-css").html(inline_css);
  });
});

wp.customize("hs21_site_info", (value) => {
  value.bind((to) => {
    $(".site-info").html(strip_tags(to, "<a>"));
  });
});
