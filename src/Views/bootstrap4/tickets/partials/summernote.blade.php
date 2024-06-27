@if($editor_enabled)

@if($codemirror_enabled)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/codemirror.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/mode/xml/xml.min.js" defer></script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/summernote-bs4.min.js" defer></script>
@if($editor_locale)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/lang/summernote-{{$editor_locale}}.min.js" defer></script>
@endif
<script>


    $(function() {

        var options = $.extend(true, {height: 120, lang: '{{$editor_locale}}' {!! $codemirror_enabled ? ", codemirror: {theme: '{$codemirror_theme}', mode: 'text/html', htmlMode: true, lineWrapping: true}" : ''  !!} } , {!! $editor_options !!});

        $("textarea.summernote-editor").summernote(options);

        $("label[for=content]").click(function () {
            $("#content").summernote("focus");
        });
    });


</script>
@endif