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
                if(obj.constructor.name === 'Object'){
                    alert(obj.model);
                }else if(obj.constructor.name === 'Array'){

                }
            }
        });
    });
});
