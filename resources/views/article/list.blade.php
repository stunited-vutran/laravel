<h1>Danh sach ne </h1>

@foreach ($articles as $article )
<div>
    {{ $article->title }}
</div>
@endforeach
