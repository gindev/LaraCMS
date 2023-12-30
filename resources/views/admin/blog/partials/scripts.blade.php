<script type="module">
    (function(){
        new tempusDominus.TempusDominus(document.getElementById('published_at'), {
            display: {
                sideBySide: true,
            },
            localization: {
                startOfTheWeek: 1,
                hourCycle: 'h23',
                format: 'yyyy-MM-dd H:mm:ss',
            }
        });

        document.getElementById('title').addEventListener('blur', function(e) {
            let slug = document.getElementById('slug');

            if(slug.value){
                return;
            }

            slug.value = this.value
                            .toLowerCase()
                            .replace(/[^a-z0-9-]+/g, '-')
                            .replace(/^-+|-+$/g, '');
        });
    })();
</script>