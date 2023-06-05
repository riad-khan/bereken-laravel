@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
<main class="main pt-2">


    <nav aria-label="breadcrumb" class="d-none d-lg-block">
        <ol class="breadcrumb bg-transparent p-0 justify-content-end">
            <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
            <li class="breadcrumb-item text-capitalize"><a href="/admin/news">news</a></li>
            <li class="breadcrumb-item text-capitalize active" aria-current="page">Add</li>
        </ol>
    </nav>


    <section class="container-fluid">
        <h2 class="ml-1">
            <span class="text-capitalize">Knowledges</span>
            <small>Add knowledge.</small>

            <small><a href="/admin/knowledges" class="d-print-none font-sm"><i
                        class="la la-angle-double-left"></i> Back to all <span>knowledges</span></a></small>
        </h2>
    </section>

    <div class="container-fluid animated fadeIn">

        <div class="row">
            <form method="post" action="{{url('/admin/knowledges')}}" enctype="multipart/form-data">
            <div class="col-md-12 bold-labels">

                    @csrf

             <div class="row">
                 <div class="col-md-8">


                     <div class="card">
                         <div class="card-body row">
                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="title" bp-field-type="text">
                                 <label>Title</label>

                                 <input type="text" name="title" value="" class="form-control" required>



                             </div>
                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="short_description" bp-field-type="textarea">
                                 <label>Short description</label>
                                 <textarea name="short_description" class="form-control" required></textarea>


                             </div>
                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="content" bp-field-type="textarea">
                                 <label>Content</label>
                                 <textarea id="content" name="content" class="form-control" required></textarea>


                             </div>

                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="short_description" bp-field-type="textarea">
                                 <label>Table of Content (Json Data)</label>
                                 <textarea name="tab_content" class="form-control" required></textarea>


                             </div>

                             <div class="mb-3">
                                 <label for="formFile" class="form-label">Thumbnill Image</label>
                                 <input class="form-control" name="image" type="file" id="formFile" required>
                             </div>

                             <div class="mb-3">
                                <label for="formFile" class="form-label">Banner Image</label>
                                <input class="form-control" name="banner_image" type="file" id="formFile" required>
                            </div>

                            


                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="short_description" bp-field-type="textarea">
                                 <label>Seo Keywords</label>
                                 <textarea name="seo_keyword" class="form-control"></textarea>
                             </div>

                             <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                  bp-field-name="short_description" bp-field-type="textarea">
                                 <label>Seo meta</label>
                                 <textarea name="seo_meta" class="form-control"></textarea>
                             </div>



                         </div>
                     </div>

                     <div class="d-none" id="parentLoadedAssets">["upload_field_styles","bpFieldInitUploadElement"]</div>
                 </div>

                 <div class="col-md-4">
                     <h5>Knowledges Category</h5>

                     @foreach($categories as $key=>$category)

                         <div class="form-check">
                             <input class="form-check-input" name="category_id[]" type="checkbox" value="{{$category->id}}" id="{{$category->id}}">
                             <label class="form-check-label" for="{{$category->id}}">
                                 {{$category->category_name}}
                             </label>
                         </div>
                     @endforeach

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

                    <a href="http://127.0.0.1:8000/admin/news" class="btn btn-default"><span
                            class="la la-ban"></span> &nbsp;Cancel</a>

                </div>

            </form>


        </div>



    </div>

</main>

<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection