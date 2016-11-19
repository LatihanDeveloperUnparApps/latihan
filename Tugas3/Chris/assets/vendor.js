function buildTile(tiledata) {
    var tile = $("<a/>", { class: "tile", "data-role":"tile", "data-effect":"slideLeft", href:"lihatproduk.html?id="+tiledata.id});
    var tile_content = $("<div/>", { class: "tile-content" });
    tile_content.append($("<span/>", { class: "tile-label bg-orange fg-white", text: tiledata.name}));
    tile_content.append($("<img/>", { src: "assets/images/products/" + tiledata.images[0], "data-role": "fitImage", "data-format": "fill" }));
    tiledata.images.slice(1).map(function (data, i) {
        tile_content.append(
            $("<div/>", {class:"live-slide"}).append(
                $("<img/>", { src: "assets/images/products/" + data, "data-role": "fitImage", "data-format": "square" })
            )
        );
    });
    tile.append(tile_content);
    return tile;
}