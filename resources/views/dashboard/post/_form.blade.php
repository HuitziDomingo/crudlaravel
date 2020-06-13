@csrf

<div class="form-group">
<label for="title">Titulo</label>
<input class="form-control" type="text" name="title" id="title" value="{{old("title",$post->title)}}">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
<label for="url_clean">Slug</label>
<input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old("url_clean",$post->url_clean)}}">
    @error('url_clean')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <Textarea class="form-control" id="content" name="content">{{old("content",$post->content)}}</Textarea>
        @error('content')
            <small class="text-danger">{{$message}}</small>
        @enderror
</div>
<button class="btn btn-primary" type="submit">Enviar</button>


