function getKey(a, arr){
    for (let x of arr.keys()){
        if (arr[x] == a){
            return x;
        }
    }
}
$( function() {
    const storage = ['0', '250GB', '500GB', '1TB', '2TB', '3TB', '4TB', '8TB', '12TB', '24TB', '48TB', '72TB'];
    let filtered = $('#amount').val();
    let minFilter = '0';
    let maxFilter = '72TB';
    if (filtered.trim() !== ''){
        minFilter = filtered.split('-')[0];
        maxFilter = filtered.split('-')[1];
    }
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 11,
        step: 1,
        values: [getKey(minFilter.trim(), storage), getKey(maxFilter.trim(), storage)],
        slide: function( event, ui ) {
            if (ui.values[0] == 750){
                console.log('777');
                eve
                return;
            }
            $( "#amount" ).val(  storage[ui.values[ 0 ]] + " - " + storage[ui.values[ 1 ]]);
        }
    });
    // $( "#amount" ).val( storage[$( "#slider-range" ).slider( "values", 0 )]  +
    //     " - " + storage[$( "#slider-range" ).slider( "values", 1 )] );
} );
