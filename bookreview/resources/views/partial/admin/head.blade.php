<link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
<!-- Typography CSS -->
<link rel="stylesheet" href="{{asset('backend/css/typography.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
<!-- Full calendar -->
<link href='{{asset('backend/fullcalendar/core/main.css')}}' rel='stylesheet' />
<link href='{{asset('backend/fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('backend/fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('backend/fullcalendar/list/main.css')}}' rel='stylesheet' />

<link rel="stylesheet" href="{{asset('backend/css/flatpickr.min.css')}}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">--}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">--}}

<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/ju9oytkgovjt42g1goz4bbx8ah5w7br05qbg396440cuw7ty/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: ' anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        file_picker_callback (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

            tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'Laravel File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    console.log(message)
                    let url = message.content;  // Lấy ra url của file ảnh
                    url = url.replace(/^.*\/\/[^\/]+/, ''); // Xóa domain ảnh
                    console.log(url);
                    message.content = url // Gán lại url cho ảnh
                    callback(message.content, { text: message.text })
                },

            })}

    });
    tinymce.init({
        selector: 'textarea#Seo',
        height:300,
        toolbar: 'undo redo',
        content_css: false,
        menu: false,
        menubar: false,
    });
</script>
