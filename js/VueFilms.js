function remplirFilms() {
    $('#villes').empty();
    $.ajax({
        url: 'php/traitementVille.php',
        data: $('#cp').serialize(),
        dataType: 'json',
        type: 'GET',
        success: function (lesVilles, textStatus, jqXHR) {
            $.each(lesVilles, function (key, val) {
                $('#villes').append('<option>' + val + '</option>');
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("parametre : " + JSON.stringify(jqXHR));
            console.log("status : " + textStatus);
            console.log("error : " + errorThrown);
        }
    });
}

$(doument).ready(function(){
    $('#cp').val("");
    $('#villes').empty();
    $('#cp').change(remplirVilles);
});