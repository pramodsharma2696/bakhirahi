$("form[name='get_in_touch']").validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true
      }
    },
    errorElement: 'span',
    errorPlacement: function(error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function(element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {
      var URL = $("form[name='get_in_touch']").attr('action');
      var formData = $(form).serialize();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        url: URL,
        data: formData,
        beforeSend: function() {
          $("#get_in_btn").attr("disabled", true).text("Sending...");
        },
        success: function(result) {
          if (result.success) {
            $("#get_in_touch")[0].reset();
            toastr.success(result.message);
          } else {
            toastr.error(result.message);
          }
        },
        complete: function() {
          $("#get_in_btn").attr("disabled", false).text("Send Message");
        },
        error: function(xhr) {
          toastr.error('An error occurred: ' + xhr.responseText);
        }
      });
    }
});
