// The process of changing the background and icon
var style = document.cookie.split('; ').find(row => row.startsWith('style')).split('=')[1];
window.onload = function() {
    if (style === 'light') {
        document.getElementById('imgChange').src="/blog/site_pictures/moon.png";
    } else if (style === "dark") {
        document.getElementById('imgChange').src="/blog/site_pictures/sun.png";
    }
}
function changeStyle() {
    if (style === 'light') {
        document.getElementById('imgChange').src="/blog/site_pictures/sun.png";
        document.cookie="style=dark;path=/;expireDate=";
    } else if (style === "dark") {
        document.getElementById('imgChange').src="/blog/site_pictures/moon.png";
        document.cookie="style=light;path=/";
    }
}