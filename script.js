$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {
                $('#result').html(response);
            },
            error: function () {
                $('#result').html('<p style="color: red;">An error occurred. Please try again.</p>');
            }
        });
    });
});
