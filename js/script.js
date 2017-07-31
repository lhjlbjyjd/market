$(document).ready(function() {
    $('#search-form').submit(function(e){
        console.log("go");
        e.preventDefault();
        $.ajax({
            type: 'GET',
            cache: false,
            url: 'search_alt.php',
            data: $(this).serialize(),
            success: function(msg) {
                var obj = jQuery.parseJSON(msg);
                var card = $('<div id="search-result" class="card"></div>');
                console.log(obj);
                if(!jQuery.isEmptyObject(obj)){
                    for(var i = 0; i < obj.length; i++) {
                        var item = $('<div class="search-item row"><div class="col-md-3"><img src="http://via.placeholder.com/225x225"></div></div>');
                        var data = $('<div class="search-item-additional-data col-md-9"></div>');
                        data.append($('<h3><a>' + obj[i].manufacturer + ' ' + obj[i].model + '</a></h3>'));
                        var specs = jQuery.parseJSON(obj[i].specs);
                        var cpu = specs.CPU;
                        var ram = specs.RAM;
                        if(typeof cpu === "undefined")
                            cpu = "Нет данных";
                        if(typeof ram === "undefined")
                            ram = "Нет данных";
                        data.append($('<div style="padding-top: 5px"> <h4>Процессор: ' + cpu + '</h4> <h4>Объём ОЗУ: ' + ram + '</h4> </div>)'));
                        data.append($('<div style="bottom: 0; position: absolute;"> <h3>' + getPrice(obj[i].price) + '</h3> </div>'));
                        item.append(data);
                        card.append(item);
                    }
                    $('#search-result').remove();
                    $('#content').append(card);
                }else{
                    card.append($('<div style="line-height: 300px; color: rgba(0,0,0,0.4); font-size: 200px; text-align: center;">\\(o_o)/<br><h6>Ничего не найдено</h6></div>'));
                    $('#search-result').remove();
                    $('#content').append(card);
                }
            }
        });
    });
});

function getPrice(prices){
    var array = jQuery.parseJSON(prices);
    if(array.length > 1) {
        var max = 0;
        var min = 200000000;
        for(var i = 0; i < array.length; i++){
            if(array[i].Price > max)
                max = array[i].Price;
            if(array[i].Price < min)
                min = array[i].Price;
        }

        return min + " - " + max + " ₴";
    }else if(array.length == 1){
        return array[0].Price + " ₴";
    }else{
        return "Нет в наличии";
    }
}
