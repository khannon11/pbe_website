"use strict";
/*jslint browser:true */

var current_selection = "home";

document.getElementsByClassName = function (cl) {
  var retnode = [],
    myclass = new RegExp('\\b' + cl + '\\b'),
    elem = this.getElementsByTagName('*'),
    i,
    classes;
  for (i = 0; i < elem.length; i++) {
    classes = elem[i].className;
    if (myclass.test(classes)) {
      retnode.push(elem[i]);
    }
  }
  return retnode;
};

$(function() {
  $(window).bind('resize', function() {
    resizeMe();
    }).trigger('resize');
  });

$(function() {
  $(window).load(function() {
    resizeMe();
    }).trigger('ready');
  });

function resizeMe() {
  var preferredHeight = 791;
  var preferredFontSize = 60;
  var fontsize = $("body").css("font-size");
  var displayHeight = $(window).height();
  var percentage = (1.0 * displayHeight) / preferredHeight;
  var newFontSize = Math.floor(preferredFontSize * percentage);
  $("body").css("font-size", newFontSize + 'px');
  $("iframe").contents().find("body").css("font-size", Math.floor(newFontSize * .25) + "px");
  console.log(newFontSize);
  $("div.selected").css("margin-top", "-" + (.125 * newFontSize) + "px");
}

function get_selected_image_from_div(div) {
  return div.getElementsByClassName("selected")[0].getElementsByTagName("img")[0];
}

function select_page(div) {
  var id = div.id,
    image = get_selected_image_from_div(div);
  if (id !== current_selection) {
    image.className = image.className.replace(/(?:^|\s)hide_me(?!\S)/g, "");
    get_selected_image_from_div(document.getElementById(current_selection)).className += " hide_me";
    current_selection = id;
  }
  document.getElementById("header").innerHTML = current_selection;
  document.getElementById("main_content").src = "content/" + current_selection + ".html";
  resizeMe();
}

function show_brother(div) {
  parent.document.getElementById("header").innerHTML = div.title;
  parent.document.getElementById("header").style.fontSize = "24px";
  parent.document.getElementById("main_content").src = "content/" + div.id + ".html";
}

function back_to_brothers() {
  parent.document.getElementById("header").innerHTML = "brothers";
  parent.document.getElementById("header").style.fontSize = "48px";
  parent.document.getElementById("main_content").src = "content/brothers.html";
}
