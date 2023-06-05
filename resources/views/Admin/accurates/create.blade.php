@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">


        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/accurates">accurates</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Add</li>
            </ol>
        </nav>


        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Accurates & Strategic</span>
                <small>create.</small>

                <small><a href="/admin/accurates" class="d-print-none font-sm"><i class="la la-angle-double-left"></i> Back to
                        all <span>Accurates</span></a></small>
            </h2>
        </section>

        <div class="container-fluid animated fadeIn">

            <div class="row">
                <form method="post" action="{{ url('/admin/accurates') }}" enctype="multipart/form-data">
                    <div class="col-md-12 bold-labels">

                        @csrf

                        <div class="row">
                            <div class="col-md-9">


                                <div class="card">
                                    <div class="card-body row">
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Title</label>

                                            <input type="text" name="title" value="" class="form-control"
                                                required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="short_description" bp-field-type="textarea">
                                            <label>Short description</label>
                                            <textarea name="short_description" class="form-control" required></textarea>


                                        </div>


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Icon</label>
                                            <input class="form-control" name="image" type="file" id="formFile"
                                                required>
                                        </div>



                                    </div>
                                </div>

                                <div class="d-none" id="parentLoadedAssets">
                                    ["upload_field_styles","bpFieldInitUploadElement"]</div>
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

                        </div>

                        <a href="http://127.0.0.1:8000/admin/news" class="btn btn-default"><span class="la la-ban"></span>
                            &nbsp;Cancel</a>

                    </div>

                </form>


            </div>



        </div>

    </main>
@endsection
