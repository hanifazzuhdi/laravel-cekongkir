$(function () {

    $('select[name="province_origin"]').on('change', function () {
        let province_id = $(this).val();
        console.log(province_id);

        $.ajax({
            url: '/getCity/' + province_id,
            method: 'GET',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $('select[name="city_origin"]').empty();

                data.map(function (val, key){
                    $('select[name="city_origin"]').append(`<option value="${val.city_id}"> ${val.type} ${val.city_name} </option>`);
                });
            }
        })
    });

});
