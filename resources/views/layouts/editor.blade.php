<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
<script>
    new SimpleMDE({
        element: document.getElementById("content"),
        renderingConfig: {
            codeSyntaxHighlighting: true
        },
        tabSize: 4,
        autosave: {
            enabled: true,
            uniqueId: 'junjun'
        },
//            status: ["autosave", "lines", "words", "cursor"],
    });
</script>