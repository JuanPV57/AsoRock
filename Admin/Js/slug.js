
    $(document).ready(function () {
        $("#titulo").keyup(function () {
            var value = $(this).val();
            value = value.toLowerCase(); 
            var regExp = /\s+/g; value = value.replace(regExp,'-');
            $("#slug").val(value);
        });
});


