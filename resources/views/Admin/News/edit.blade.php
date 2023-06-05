@extends(backpack_view('blank'))
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>


@section('content')

    <main class="main pt-2">


        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/news">news</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Edit</li>
            </ol>
        </nav>


        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">news</span>
                <small>Add news.</small>

                <small><a href="/admin/news" class="d-print-none font-sm"><i
                            class="la la-angle-double-left"></i> Back to all <span>news</span></a></small>
            </h2>
        </section>

        <div class="container-fluid animated fadeIn">

            <div class="row">
                <form   action="{{url('/admin/news/'.$data->id)}}" method="POST" enctype="multipart/form-data">


                    <div class="col-md-12 bold-labels">

                        {!! csrf_field() !!}
                        {!! method_field('PUT') !!}

                        <div class="row">
                            <div class="col-md-8">



                                <div class="card">
                                    <div class="card-body row">
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="title" bp-field-type="text">
                                            <label>Title</label>

                                            <input type="text" name="title" value="{{$data->title}}" class="form-control" required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="short_description" bp-field-type="textarea">
                                            <label>Short description</label>
                                            <textarea name="short_description" class="form-control" required>{{$data->short_description}}</textarea>


                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="content" bp-field-type="textarea">
                                            <label>Content</label>
                                            <textarea id="content" name="content" class="form-control" required>{{$data->content}}</textarea>


                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="short_description" bp-field-type="textarea">
                                            <label>Table of Content (Json Data)</label>
                                            <textarea name="tab_content" class="form-control" id="tab_content" required>{{$data->table_of_contents}}</textarea>


                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Thumbnill Image</label>
                                            <input class="form-control" name="image" type="file" id="formFile">
                                        </div>
       
                                        <div class="mb-3">
                                           <label for="formFile" class="form-label">Banner Image</label>
                                           <input class="form-control" name="banner_image" type="file" id="formFile">
                                       </div>
       
                                       <div class="form-check mb-3 ">
                                          
                                           <label class="form-check-label" for="flexCheckDefault">
                                             Hot Article (check if this article is a hot article) :
                                           </label>
                                           <input class="form-check-input ml-2" type="checkbox" name="hot_article" value="1" {{$data->hot_article == 1 ? "checked":""}} >
                                         </div>
       
                                         <div class="form-check mb-3 ">
                                          
                                           <label class="form-check-label" for="flexCheckDefault">
                                             Highlighted Article :
                                           </label>
                                           <input class="form-check-input ml-2" type="checkbox" name="highlighted_article" value="1" {{$data->highlights == 1 ? "checked":""}}>
                                         </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="short_description" bp-field-type="textarea">
                                            <label>Seo Keywords</label>
                                            <textarea name="seo_keyword" class="form-control">{{$data->seo_keywords}}</textarea>
                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                             bp-field-name="short_description" bp-field-type="textarea">
                                            <label>Seo Keywords</label>
                                            <textarea name="seo_meta" class="form-control"></textarea>
                                        </div>



                                    </div>
                                </div>

                                <div class="d-none" id="parentLoadedAssets">["upload_field_styles","bpFieldInitUploadElement"]</div>
                            </div>

                            <div class="col-md-4">
                                <h5>Category</h5>

                                @foreach($categories as $category)

                                    <div class="form-check">

                                            @php
                                                $seperated_cat = explode(',',$data->category_id);
                                            @endphp

                                        <input class="form-check-input" name="category_id[]" type="checkbox" value="{{$category->id}}" id="flexCheckDefault" {{in_array($category->id,$seperated_cat) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$category->category_name}}
                                        </label>
                                    </div>
                                @endforeach


                                <div class="mt-5">
                                    <h5>Tags</h5>

                                    @foreach($tags as $tag)

                                        <div class="form-check">

                                            @php
                                                $seperated_tag = explode(',',$data->tag_id);
                                            @endphp

                                            <input class="form-check-input" name="tag_id[]" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault" {{in_array($tag->id,$seperated_tag) ? 'checked' : ''}} >
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$tag->tag_name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="saveActions" class="form-group ml-3">

                        <input type="hidden" name="_save_action" value="save_and_back">
                        <div class="btn-group" role="group">

                            <button type="submit" class="btn btn-success">
                                <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                <span data-value="save_and_back">Save and back</span>
                            </button>

                            <div class="btn-group" role="group">
                                <button id="bpSaveButtonsGroup" type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="caret"></span><span class="sr-only">▼</span></button>
                                <div class="dropdown-menu" aria-labelledby="bpSaveButtonsGroup">
                                    <button type="button" class="dropdown-item" data-value="save_and_edit">Save and edit
                                        this item</button>
                                    <button type="button" class="dropdown-item" data-value="save_and_new">Save and new
                                        item</button>
                                    <button type="button" class="dropdown-item" data-value="save_and_preview">Save and
                                        preview</button>
                                </div>
                            </div>

                        </div>

                        <a href="/admin/news" class="btn btn-default"><span
                                class="la la-ban"></span> &nbsp;Cancel</a>

                    </div>

                </form>


            </div>



        </div>

    </main>

    <script>
        CKEDITOR.replace( 'content',{
            extraAllowedContent: '*(*)',
        } );
        CKEDITOR.replace( 'tab_content',{
            extraAllowedContent: '*(*)',
        });
    </script>
@endsection
