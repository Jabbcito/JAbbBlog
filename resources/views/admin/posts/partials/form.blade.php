<div class="form-group">
    {!! Form::label('name', 'Nombre:'); !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']); !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:'); !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slung del post', 'readonly']); !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:'); !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']); !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">

    <p class="font-weigth-blod">Etiqueta</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null); !!}
            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weigth-blod">Etiqueta</p>

    <label for="">
        {!! Form::radio('status', 1, true); !!}
        Borrador
    </label>

    <label for="">
        {!! Form::radio('status', 2); !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/10/18/17/00/night-7530755_1280.jpg" alt="">
            @endisset
        </div>
    </div>

    <div class="col">
        <div class="from-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post:'); !!}    
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']); !!}
        
            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti nostrum incidunt molestias esse culpa quaerat, saepe dolor maxime illum. Neque incidunt nisi nobis repudiandae ipsum beatae fugiat quos corrupti. Molestiae.</p>
    </div>
</div>



<div class="form-group">
    {!! Form::label('extract', 'Extracto:'); !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']); !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'vuerpo del Post:'); !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']); !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>