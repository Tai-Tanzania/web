@component('layouts.partners')

    <section style="background: #6c4130; height: 45vh"></section>

    <section style="margin-top: -200px">
        <div class="container">

            <div class="text-center">
                <span style="background: black; padding: 0px 20px; color: white; font-size: 40px">
                   {{ $article->title }}
                 </span>
                 <div class="mx-auto mt-5" style="width: 800px; height: 500px;background-image:url({{ url($article->featured_image) }}); background-size:cover"></div>
            </div>

            <div style="margin: 50px 200px">
                <p style="text-align: justify">
                    {{ $article->body }}
                </p>
            </div>

        </div>
    </section>
@endcomponent