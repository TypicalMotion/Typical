<script>
document.addEventListener('DOMContentLoaded', (event) => {
    var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewportWidth < 640) {
        var bgVideo = document.getElementById('my-video');
        bgVideo.childNodes[0].removeAttribute("autoplay");
        bgVideo.childNodes[0].setAttribute("preload", "none");
    } else {
        console.log('big viewport');
    }
})
</script>
