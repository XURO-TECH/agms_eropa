!function(e){"use strict";function t(){document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement||(console.log("pressed"),e("body").removeClass("fullscreen-enable"))}e("#side-menu").metisMenu(),e("#vertical-menu-btn").on("click",function(t){t.preventDefault(),e("body").toggleClass("sidebar-enable"),992<=e(window).width()?e("body").toggleClass("vertical-collpsed"):e("body").removeClass("vertical-collpsed")}),e("#sidebar-menu a").each(function(){var t=window.location.href.split(/[?#]/)[0];this.href==t&&(e(this).addClass("active"),e(this).parent().addClass("mm-active"),e(this).parent().parent().addClass("mm-show"),e(this).parent().parent().prev().addClass("mm-active"),e(this).parent().parent().parent().addClass("mm-active"),e(this).parent().parent().parent().parent().addClass("mm-show"),e(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),e(".navbar-nav a").each(function(){var t=window.location.href.split(/[?#]/)[0];this.href==t&&(e(this).addClass("active"),e(this).parent().addClass("active"),e(this).parent().parent().addClass("active"),e(this).parent().parent().parent().parent().addClass("active"),e(this).parent().parent().parent().parent().parent().addClass("active"))}),e('[data-toggle="fullscreen"]').on("click",function(t){t.preventDefault(),e("body").toggleClass("fullscreen-enable"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}),document.addEventListener("fullscreenchange",t),document.addEventListener("webkitfullscreenchange",t),document.addEventListener("mozfullscreenchange",t),e(".right-bar-toggle").on("click",function(t){e("body").toggleClass("right-bar-enabled")}),e(document).on("click","body",function(t){0<e(t.target).closest(".right-bar-toggle, .right-bar").length||e("body").removeClass("right-bar-enabled")}),e(".dropdown-menu a.dropdown-toggle").on("click",function(t){return e(this).next().hasClass("show")||e(this).parents(".dropdown-menu").first().find(".show").removeClass("show"),e(this).next(".dropdown-menu").toggleClass("show"),!1}),e(function(){e('[data-toggle="tooltip"]').tooltip()}),e(function(){e('[data-toggle="popover"]').popover()}),Waves.init()}(jQuery),function(){"use strict";window.addEventListener("load",function(){var e=document.getElementsByClassName("needs-validation");Array.prototype.filter.call(e,function(e){e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)})},!1)}(),$(document).ready(function(){});