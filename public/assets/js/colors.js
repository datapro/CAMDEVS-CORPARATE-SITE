$(document).ready(function () {
    var html = '<div id="colorpanel">';
    html += '<div class="colour_patterns">';
    html += '<ul class="c_patterns">';
    html += '<li title="site-color-lime" data-color="#a4c400" class="site-color-lime"></li>';
    html += '<li title="site-color-green" data-color="#60a917" class="site-color-green"></li>';
    html += '<li title="site-color-emerald" data-color="#008a00" class="site-color-emerald"></li>';
    html += '<li title="site-color-teal" data-color="#00aba9" class="site-color-teal"></li>';
    html += '<li title="site-color-blue" data-color="#0db4ea" class="site-color-blue"></li>';
    html += '<li title="site-color-cobalt" data-color="#0050ef" class="site-color-cobalt"></li>';
    html += '<li title="site-color-indigo" data-color="#6a00ff" class="site-color-indigo"></li>';
    html += '<li title="site-color-violet" data-color="#aa00ff" class="site-color-violet"></li>';
    html += '<li title="site-color-pink" data-color="#f472d0" class="site-color-pink"></li>';
    html += '<li title="site-color-magenta" data-color="#d80073" class="site-color-magenta"></li>';
    html += '<li title="site-color-crimson" data-color="#a20025" class="site-color-crimson"></li>';
    html += '<li title="site-color-red" data-color="#e51400" class="site-color-red"></li>';
    html += '<li title="site-color-orange" data-color="#fa6800" class="site-color-orange"></li>';
    html += '<li title="site-color-amber" data-color="#f0a30a" class="site-color-amber"></li>';
    html += '<li title="site-color-yellow" data-color="#e3c800" class="site-color-yellow"></li>';
    html += '<li title="site-color-brown" data-color="#825a2c" class="site-color-brown"></li>';
    html += '<li title="site-color-olive" data-color="#6d8764" class="site-color-olive"></li>';
    html += '<li title="site-color-steel" data-color="#647687" class="site-color-steel"></li>';
    html += '<li title="site-color-mauve" data-color="#76608a" class="site-color-mauve"></li>';
    html += '<li title="site-color-taupe" data-color="#87794e" class="site-color-taupe"></li>';
    html += '</ul>';
    html += '<span class="colorbtn">&nbsp;</span>';
    html += '</div>';
    html += '</div>';

    $('body').append(html);

    // color pattern JS	
    $(".colorbtn").click(function (e) {
        e.preventDefault();
        $('.colour_patterns').toggleClass('active');
    });

    $('.c_patterns > li').on('click', function () {
        var color = $(this).data('color');
        document.documentElement.style.setProperty('--main-bg-color', color);
        document.documentElement.style.setProperty('--main-txt-color', color);
        document.documentElement.style.setProperty('--main-border-color', color);
    });
});