<!DOCTYPE html>
<html data-theme="lofi" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link type="image/png" sizes="16x16" rel="icon" href=".../icons8-bookmark-16.png"> --}}
    <link rel="icon" href="{{ asset('images/icons8-bookmark-16.png') }}" type="image/gif" sizes="16x16">


    <title>{{ config('app.name', 'The Non-Stop Series') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

{{--
    <script type="text/javascript">
        $(function() {

            // sends the uploaded file file to the fielselect event
            $(document).on('change', ':file', function() {
                var input = $(this);
                var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

                input.trigger('fileselect', [label]);
            });

            // Set the label of the uploaded file
            $(':file').on('fileselect', function(event, label) {
                $(this).closest('.uploaded-file-group').find('.uploaded-file-name').val(label);
            });

            // Deals with the upload file in edit mode
            $('.custom-delete-file:checkbox').change(function(e) {
                var self = $(this);
                var container = self.closest('.input-width-input');
                var display = container.find('.custom-delete-file-name');

                if (self.is(':checked')) {
                    display.wrapInner('<del></del>');
                } else {
                    var del = display.find('del').first();
                    if (del.is('del')) {
                        del.contents().unwrap();
                    }
                }
            }).change();

            // Sets the validator defaults
            $.validator.setDefaults({
                errorElement: "span",
                errorClass: "help-block",
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorPlacement: function(error, element) {
                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else if (element.prop('type') === 'checkbox' || element.prop('type') ===
                        'radio') {
                        error.appendTo(element.closest(':not(input, label, .checkbox, .radio)')
                    .first());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });

            // Makes sure any input with the required class is actually required
            $('form').each(function(index, item) {
                var form = $(item);
                form.validate();

                form.find(':input.required').each(function(i, input) {
                    $(input).attr('required', true);
                });
            });

        });
    </script>
 --}}

@livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
