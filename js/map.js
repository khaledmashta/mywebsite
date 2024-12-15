var map = L.map('map').setView([51.229886, 4.416064], 18);
L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=lfq36ca9YrzTNAWNDD2n', {
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
}).addTo(map);
var marker = L.marker([51.229886, 4.416064]).addTo(map);
