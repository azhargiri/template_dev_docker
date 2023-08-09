<x-admin-layout>
    <x-slot name="page_title">
            {{ __('Edit Innovation') }}
    </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('home/vendor/summernote/summernote-lite.min.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('home/vendor/summernote/summernote-lite.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                const summernote_toolbar_opt = [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]

                $('#form_description').summernote({
                    height: 150,
                    toolbar: summernote_toolbar_opt
                });

                $('#form_summary').summernote({
                    height: 50,
                    toolbar: summernote_toolbar_opt
                });
            })
        </script>
    </x-slot>


    <x-slot name="content">
        <div class="w-full flex justify-between">
            <a href="{{ route('admin.innovation') }}"><x-back-button>Back</x-back-button></a>

            <a href="{{ route("profile-inovasi", ['id' => $innovation->id]) }}">
                <x-show-button></x-show-button>
            </a>
        </div>

        <section class="body-font relative">
            @include('admin/innovation/_form')
        </section>


    </x-slot>
</x-admin-layout>

