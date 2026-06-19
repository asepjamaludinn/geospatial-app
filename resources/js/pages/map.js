export async function initMap() {
    const mapContainer = document.getElementById("map");

    if (!mapContainer) return;

    const maplibregl = (await import("maplibre-gl")).default;
    await import("maplibre-gl/dist/maplibre-gl.css");

    let map = new maplibregl.Map({
        container: "map",
        style: {
            version: 8,
            sources: {
                "osm-tiles": {
                    type: "raster",
                    tiles: ["https://tile.openstreetmap.org/{z}/{x}/{y}.png"],
                    tileSize: 256,
                },
                "sat-tiles": {
                    type: "raster",
                    tiles: [
                        "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
                    ],
                    tileSize: 256,
                },
                "dark-tiles": {
                    type: "raster",
                    tiles: [
                        "https://basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png",
                    ],
                    tileSize: 256,
                },
            },
            layers: [
                {
                    id: "layer-street",
                    type: "raster",
                    source: "osm-tiles",
                    layout: { visibility: "visible" },
                },
                {
                    id: "layer-satellite",
                    type: "raster",
                    source: "sat-tiles",
                    layout: { visibility: "none" },
                },
                {
                    id: "layer-dark",
                    type: "raster",
                    source: "dark-tiles",
                    layout: { visibility: "none" },
                },
            ],
        },
        center: [107.63, -6.972],
        zoom: 14.5,
        pitch: 45,
    });

    map.addControl(new maplibregl.NavigationControl(), "top-right");

    map.on("load", () => {
        new maplibregl.Marker({ color: "#EF4444" })
            .setLngLat([107.6335, -6.9733])
            .setPopup(
                new maplibregl.Popup({ offset: 25 }).setHTML(
                    "<b style='font-size:16px;'>Telkom University</b><br><span style='color:gray;'>Campus Center</span>",
                ),
            )
            .addTo(map);

        new maplibregl.Marker({ color: "#3B82F6" })
            .setLngLat([107.625, -6.97])
            .setPopup(
                new maplibregl.Popup({ offset: 25 }).setHTML(
                    "<b style='font-size:16px;'>Start Point</b><br><span style='color:gray;'>Route origin</span>",
                ),
            )
            .addTo(map);

        map.addSource("route-dummy", {
            type: "geojson",
            data: {
                type: "Feature",
                geometry: {
                    type: "LineString",
                    coordinates: [
                        [107.625, -6.97],
                        [107.628, -6.972],
                        [107.6335, -6.9733],
                    ],
                },
            },
        });

        map.addSource("area-dummy", {
            type: "geojson",
            data: {
                type: "Feature",
                geometry: {
                    type: "Polygon",
                    coordinates: [
                        [
                            [107.631, -6.971],
                            [107.636, -6.971],
                            [107.636, -6.976],
                            [107.631, -6.976],
                            [107.631, -6.971],
                        ],
                    ],
                },
            },
        });

        map.addLayer({
            id: "area-fill",
            type: "fill",
            source: "area-dummy",
            paint: { "fill-color": "#F59E0B", "fill-opacity": 0.2 },
        });

        map.addLayer({
            id: "area-outline",
            type: "line",
            source: "area-dummy",
            paint: {
                "line-color": "#D97706",
                "line-width": 2,
                "line-dasharray": [2, 2],
            },
        });

        map.addLayer({
            id: "route-line",
            type: "line",
            source: "route-dummy",
            layout: { "line-join": "round", "line-cap": "round" },
            paint: { "line-color": "#10B981", "line-width": 5 },
        });
    });

    const styleButtons = [
        "btn-layer-street",
        "btn-layer-satellite",
        "btn-layer-dark",
    ];
    const cameraButtons = ["btn-2d", "btn-3d"];

    const updateActiveButton = (group, activeId) => {
        group.forEach((id) => {
            const btn = document.getElementById(id);
            if (!btn) return;

            if (id === activeId) {
                btn.classList.remove(
                    "bg-white",
                    "text-gray-700",
                    "border-gray-300",
                );
                btn.classList.add("bg-black", "text-white", "border-black");
            } else {
                btn.classList.add(
                    "bg-white",
                    "text-gray-700",
                    "border-gray-300",
                );
                btn.classList.remove("bg-black", "text-white", "border-black");
            }
        });
    };

    updateActiveButton(styleButtons, "btn-layer-street");
    updateActiveButton(cameraButtons, "btn-3d");

    document.getElementById("btn-2d")?.addEventListener("click", () => {
        map.easeTo({ pitch: 0, bearing: 0, duration: 1500 });
        updateActiveButton(cameraButtons, "btn-2d");
    });

    document.getElementById("btn-3d")?.addEventListener("click", () => {
        map.easeTo({ pitch: 60, bearing: -20, duration: 1500 });
        updateActiveButton(cameraButtons, "btn-3d");
    });

    document.getElementById("btn-campus")?.addEventListener("click", () => {
        map.flyTo({
            center: [107.6335, -6.9733],
            zoom: 16.5,
            pitch: 60,
            bearing: -20,
            duration: 2500,
        });
    });

    document.getElementById("btn-route")?.addEventListener("click", () => {
        map.flyTo({
            center: [107.625, -6.97],
            zoom: 15.5,
            pitch: 30,
            duration: 2000,
        });
    });

    const switchLayer = (layerType, btnId) => {
        if (!map) return;
        map.setLayoutProperty("layer-street", "visibility", "none");
        map.setLayoutProperty("layer-satellite", "visibility", "none");
        map.setLayoutProperty("layer-dark", "visibility", "none");
        map.setLayoutProperty("layer-" + layerType, "visibility", "visible");

        updateActiveButton(styleButtons, btnId);
    };

    document
        .getElementById("btn-layer-street")
        ?.addEventListener("click", () =>
            switchLayer("street", "btn-layer-street"),
        );
    document
        .getElementById("btn-layer-satellite")
        ?.addEventListener("click", () =>
            switchLayer("satellite", "btn-layer-satellite"),
        );
    document
        .getElementById("btn-layer-dark")
        ?.addEventListener("click", () =>
            switchLayer("dark", "btn-layer-dark"),
        );
}
