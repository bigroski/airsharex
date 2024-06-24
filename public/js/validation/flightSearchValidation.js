<script>
    $(document).ready(function() {
        console.log("validation here");
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='flight-search-form']").validate({
              // Specify validation rules
              rules: {
                from: "required",
            to: "required",
            start_date:"required",
            seat_count:"required",               
              },
             
              messages: {
                from: "Please select departure city",
                to:"Please select arrival city",            
                start_date: "Please slect departure date",
                seat_count:"please add seat quanity"
                
              },
             
              submitHandler: function(form) {
                form.submit();
              }
            });
          })
    
});
</script>
